<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Poblaciones extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        //session_start();
        $this->load->helper('url');
        $this->load->model('M_poblaciones');
        //$this->load->library('session');
    }


    public function index()
    {
        $this->load->view('masterpage/head');
        $this->load->view('V_poblaciones');
        $this->load->view('masterpage/footer');
    }

    public function AgregarPoblaciones()
    {
        $Descripcion = $this->input->post('Descripcion',TRUE); //este true es un segundo parametro que reciobe la funcion post, que hace un filtro para evitar ataques xss
        $num_hombres = $this->input->post('num_hombres',TRUE);
        $num_mujeres = $this->input->post('num_mujeres',TRUE);
        $num_indigenas = $this->input->post('num_indigenas',TRUE);
        $iIdEdad = $this->input->post('edad',TRUE);
        $iIdPrograma = $this->input->post('idPrograma',TRUE);
        $definicion=$this->input->post('definicion',TRUE);
        $data = array(
            'tDescripcion' => $Descripcion,
            'iHombres' => $num_hombres,
            'iMujeres' => $num_mujeres,
            'iHablantesIndigenas' => $num_indigenas,
            'iIdGrupoEdad' => $iIdEdad,
            'iIdDefinicion' => $definicion, // falta una fila mas en caso de que haya una espeficicacion de otro grupo edad
            'iIdPrograma' => $iIdPrograma
        );

        if ($this->M_poblaciones->agregar_poblacion($data) === TRUE) {
            echo "correcto";
        } else {
            echo "incorrecto";
        }
    }

    public function ListarDefPoblacion()
    {
        $key = $this->uri->segment(4);


        $data['filas'] = '';
        $data['num_def'] = 0;

        $data['definicion_poblacion'] = $this->M_poblaciones->listar_definiciones();
        $data['cuantificacion_pobla'] = $this->M_poblaciones->cuantificacion_poblacion($key);

        if ($data['definicion_poblacion'] == null) {
            echo '<script>location.reload();</script>';
        } else if ($data['cuantificacion_pobla'] == null) {

            $objetos_definicion = $data['definicion_poblacion'];
            foreach ($objetos_definicion as $datos) {

                $data['filas'] .= $this->fila_definicion($datos['iIdDefinicion'], $datos['vNombre'], $data['num_def']);

                $data['num_def']++;
            }

        } else if ($data['cuantificacion_pobla'] != null) {
            $objeto_Def= $data['definicion_poblacion'];
            $objeto_cuantificacion=$data['cuantificacion_pobla'];

            for($i=0;  $i < count($objeto_Def);$i++){
                $contador = 0;


                for($x=0; $x < count($objeto_cuantificacion); $x++){
                    if($objeto_Def[$i]['iIdDefinicion'] == $objeto_cuantificacion[$x]['iIdDefinicion']){
                        $this->tabla_Actualizar($objeto_cuantificacion[$x]['iIdCuantificacion'],$objeto_cuantificacion[$x]['tDescripcion'],$objeto_cuantificacion[$x]['iHombres'],$objeto_cuantificacion[$x]['iMujeres'],$objeto_cuantificacion[$x]['iHablantesIndigenas'],$objeto_cuantificacion[$x]['iIdGrupoEdad'],$objeto_cuantificacion[$x]['iIdDefinicion'],$objeto_cuantificacion[$x]['vNombre'],$objeto_cuantificacion[$x]['iIdPrograma']);
                         $contador =$objeto_cuantificacion[$x]['iIdDefinicion'];
                    }
                }
                if($contador == 0){
                    $this->fila_definicion($objeto_Def[$i]['iIdDefinicion'], $objeto_Def[$i]['vNombre'],  $i);
                }

            }


        }


    }

    public function EliminarPoblacion()
    {
        $iIdCuantificacion = $this->input->post('iIdCuantificacion');
        $data = array(
            'iActivo' => 0
        );
        if ($this->M_poblaciones->eliminar_poblacion($iIdCuantificacion,$data) === TRUE) {
            echo "correcto";
        } else {
            echo "incorrecto";
        }
    }

    public function listar_unidad_medida()
    {
        $data['UnidadMedida'] = $this->M_ServiciosBienes->recuperar_unidad();
        echo json_encode($data);
    }

    public function fila_definicion($iIdDefinicion, $nombre_definicion, $num_definicion)
    {


        //$datos = $model->listar_servicio($iIdBienServicio);


        $html = '<tr id="' . $num_definicion . '">
		<td><input type="hidden" name="id' . $num_definicion . '" id="id' . $num_definicion . '" value="' . $iIdDefinicion . '">
		<label style="width: 170px;" name="vPoblacionReferencia_' . $iIdDefinicion . '" type="text" id="vPoblacionReferencia' . $iIdDefinicion . '"  >' . $nombre_definicion . '</label></td>';


        $html .= '<td>
			    <textarea name="DescripcionPoblacion_' . $iIdDefinicion . '" id="DescripcionPoblacion_' . $iIdDefinicion . '" style="width: 200px;resize:none;"  rows="4" placeholder="Ingrese aquí su descripción" class="form-control resize_vertical" required></textarea>
			</td>
			
			<td>
			    <input style="width: 100px;" name="hombres_' . $iIdDefinicion . '" id="hombres_' . $iIdDefinicion . '" type="number" min="1" max="99999999999999" maxlength="11" onKeyPress="return soloNumeros(event,\'decNO\');"  class="form-control" value="" required onchange="sumar(this.value,'.$iIdDefinicion.');">
			</td>
			
			
			</td>
			<td  style="width: 103px;">
				 <input style="width: 100px;" name="mujeres_' . $iIdDefinicion . '" id="mujeres_' . $iIdDefinicion . '" type="number" min="1" max="99999999999999" maxlength="11" onKeyPress="return soloNumeros(event,\'decNO\');"  class="form-control" value="" required onchange="sumar(this.value,'.$iIdDefinicion.');">
				
			</td>
			<td>
                <label style="width: 100px;" name="total_' . $iIdDefinicion . '" id="total_' . $iIdDefinicion . '"  class="form-control"></label>
			</td>
			<td>
			    <input style="width: 100px;" name="indigenas' . $iIdDefinicion . '" id="indigenas' . $iIdDefinicion . '" type="number" min="1" max="99999999999999" maxlength="11" onKeyPress="return soloNumeros(event,\'decNO\');"  class="form-control" value="" required>
			</td>
			<td >
			    ' . $this->Grupo_edad($iIdDefinicion,"") . '
			</td>
			<td >
			    <button disabled type="submit" class="btn btn-labeled btn-success" name="fuentes"><span class="btn-label"><i class="glyphicon glyphicon-edit" ></i></span>Agregar fuente</button>
			</td>
			<td >
			    <button disabled type="submit" class="btn btn-labeled btn-success" name="criterios"><span class="btn-label"><i class="glyphicon glyphicon-edit"></i></span>Agregar criterios</button>
			</td>
			
			<td class="ui-group-buttons" style="width: 150px;">
				<a title="Agregar población" class="btn btn-success" role="button"  onclick="AgregarPoblacion('.$iIdDefinicion.')" >
                                                <span class="glyphicon glyphicon-floppy-disk" ></span>
                                            </a>
				
			</td>
		</tr>';

        echo $html;

    } //falta poner la opcion de seleccione al combobox

    function Grupo_edad($iIdDefinicion,$grupo_Edad)
    {

        if($grupo_Edad == ""){
            $html = '';
            $data['Grupoedad'] = $this->M_poblaciones->recuperar_grupo_Edad();

            $html .= '<select style="width: 150px;" name="cbo_edad_' . $iIdDefinicion . '" id="cbo_edad_' . $iIdDefinicion . '" class="form-control">';
            foreach ($data['Grupoedad'] as $u) {


                $html .= '<option value="' . $u['iIdGrupoEdad'] . '">' . $u['vClasificacion'] . '</option>';

            }
            $html .= '</select>';
            return $html;
        }else{
            $html = '';
            $data['Grupoedad'] = $this->M_poblaciones->recuperar_grupo_Edad();

            $html .= '<select style="width: 150px;" name="cbo_edad_' . $iIdDefinicion . '" id="cbo_edad_' . $iIdDefinicion . '" class="form-control">';
            foreach ($data['Grupoedad'] as $u) {
                $selected = ($u['iIdGrupoEdad'] == $grupo_Edad) ? 'selected' : '';
                $html .= '<option value="' . $u['iIdGrupoEdad'] . '" ' . $selected . '>' . $u['vClasificacion'] . '</option>';
            }
            $html .= '</select>';

            return $html;
        }




    }


    public function CoberturaGeografica($iIdDefinicion,$nombre_definicion,$id_cuantificacion)
    {
         $html='';
        $definicion = $iIdDefinicion;
        switch ($nombre_definicion) {

            case "Población 2020":

                $html.=' <a title="Actualizar población" class="btn btn-success" role="button" onclick="ActualizarCuantificacio('.$id_cuantificacion.','.$iIdDefinicion.');">
                                                <span class="glyphicon glyphicon-floppy-disk" ></span>
                                            </a>
				<a title="Eliminar población" class="btn btn-danger" role="button" onclick="Eliminar_cuantificacion('.$id_cuantificacion.')">
                                                <span class="glyphicon glyphicon-trash" ></span>
                                            </a><a title="Cobertura Geográfica" class="btn btn-info" role="button" onclick="CoberturaGeografica('.$id_cuantificacion.')" >
                                                <span class="glyphicon glyphicon-globe" ></span>
                                            </a>';
                break;
            case "Población 2021":
                $html.=' <a title="Actualizar población" class="btn btn-success" role="button" onclick="ActualizarCuantificacio('.$id_cuantificacion.','.$iIdDefinicion.');">
                                                <span class="glyphicon glyphicon-floppy-disk" ></span>
                                            </a>
				<a title="Eliminar población" class="btn btn-danger" role="button" onclick="Eliminar_cuantificacion('.$id_cuantificacion.')" >
                                                <span class="glyphicon glyphicon-trash" ></span>
                                            </a><a title="Cobertura Geográfica" class="btn btn-info" role="button" onclick="CoberturaGeografica('.$id_cuantificacion.')" >
                                                <span class="glyphicon glyphicon-globe" ></span>
                                            </a>';
                break;
            case "Población 2022":
                $html.=' <a title="Actualizar población" class="btn btn-success" role="button" onclick="ActualizarCuantificacio('.$id_cuantificacion.','.$iIdDefinicion.');" >
                                                <span class="glyphicon glyphicon-floppy-disk" ></span>
                                            </a>
				<a title="Eliminar población" class="btn btn-danger" role="button" onclick="Eliminar_cuantificacion('.$id_cuantificacion.')">
                                                <span class="glyphicon glyphicon-trash" ></span>
                                            </a><a title="Cobertura Geográfica" class="btn btn-info" role="button" onclick="CoberturaGeografica('.$id_cuantificacion.')" >
                                                <span class="glyphicon glyphicon-globe" ></span>
                                            </a>';
                break;
            case "Población 2023":
                $html.=' <a title="Actualiza población" class="btn btn-success" role="button" onclick="ActualizarCuantificacio('.$id_cuantificacion.','.$iIdDefinicion.');">
                                                <span class="glyphicon glyphicon-floppy-disk" ></span>
                                            </a>
				<a title="Eliminar población" class="btn btn-danger" role="button" onclick="Eliminar_cuantificacion('.$id_cuantificacion.')">
                                                <span class="glyphicon glyphicon-trash" ></span>
                                            </a><a title="Cobertura Geográfica" class="btn btn-info" role="button" onclick="CoberturaGeografica('.$id_cuantificacion.')" >
                                                <span class="glyphicon glyphicon-globe" ></span>
                                            </a>';
                break;
            case "Población 2024":
                $html.=' <a title="Actualiza población" class="btn btn-success" role="button" onclick="ActualizarCuantificacio('.$id_cuantificacion.','.$iIdDefinicion.');">
                                                <span class="glyphicon glyphicon-floppy-disk" ></span>
                                            </a>
				<a title="Eliminar población" class="btn btn-danger" role="button" onclick="Eliminar_cuantificacion('.$id_cuantificacion.')">
                                                <span class="glyphicon glyphicon-trash" ></span>
                                            </a><a title="Cobertura Geográfica" class="btn btn-info" role="button"  onclick="CoberturaGeografica('.$id_cuantificacion.')">
                                                <span class="glyphicon glyphicon-globe" ></span>
                                            </a>';
                break;
            default:
                $html.=' <a title="Actualizar población" class="btn btn-success" role="button" onclick="ActualizarCuantificacio('.$id_cuantificacion.','.$iIdDefinicion.');" >
                                                <span class="glyphicon glyphicon-floppy-disk" ></span>
                                            </a>
				<a title="Eliminar ppoblación" class="btn btn-danger" role="button" onclick="Eliminar_cuantificacion('.$id_cuantificacion.')">
                                                <span class="glyphicon glyphicon-trash" ></span>
                                            </a>';
        }
        return $html;
    }
    public function listar_grupo_Edad()
    {
        $data['GrupoEdad'] = $this->M_poblaciones->recuperar_grupo_Edad();
        echo json_encode($data);
    }

    public function tabla_Actualizar( $id_cuantificacion,$descripcion,$hombres,$mujeres,$indigenas,$grupo_Edad,$iIdDefinicion,$nombre_definicion,$id_programa)//falta el especificacion otro
    {


        //$datos = $model->listar_servicio($iIdBienServicio);

        $url=base_url();
        $html = '<tr id="' . $iIdDefinicion . '">
		<td><input type="hidden" name="id' . $id_cuantificacion . '" id="id' . $id_cuantificacion . '" value="' .$id_cuantificacion . '">
		<label style="width: 170px;" name="vPoblacionReferencia_' . $iIdDefinicion . '" type="text" id="vPoblacionReferencia' . $iIdDefinicion . '"  >' . $nombre_definicion . '</label></td>';


        $html .= '<td>
			    <textarea name="DescripcionPoblacion_' . $iIdDefinicion . '" id="DescripcionPoblacion_' . $iIdDefinicion . '" style="width: 200px;resize:none;"  rows="4" placeholder="Ingrese aquí su descripción" class="form-control resize_vertical" required>'.$descripcion.'</textarea>
			</td>
			
			<td>
			    <input style="width: 100px;" name="hombres_' . $iIdDefinicion . '" id="hombres_' . $iIdDefinicion . '" type="number" min="1" max="99999999999999" maxlength="11" onKeyPress="return soloNumeros(event,\'decNO\');"  class="form-control" value="'.$hombres.'" required onchange="sumar(this.value,'.$iIdDefinicion.');">
			</td>
			
			
			</td>
			<td  style="width: 103px;">
				 <input style="width: 100px;" name="mujeres_' . $iIdDefinicion . '" id="mujeres_' . $iIdDefinicion . '" type="number" min="1" max="99999999999999" maxlength="11" onKeyPress="return soloNumeros(event,\'decNO\');"  class="form-control" value="'.$mujeres.'" required onchange="sumar(this.value,'.$iIdDefinicion.');">
				
			</td>
			<td>
                <label style="width: 100px;" name="total_' . $iIdDefinicion . '" id="total_' . $iIdDefinicion . '"  class="form-control"></label>
			</td>
			<td>
			    <input style="width: 100px;" name="indigenas' . $iIdDefinicion . '" id="indigenas' . $iIdDefinicion . '" type="number" min="1" max="99999999999999" maxlength="11" onKeyPress="return soloNumeros(event,\'decNO\');"  class="form-control" value="'.$indigenas.'" required>
			</td>
			<td >
			    ' . $this->Grupo_edad($iIdDefinicion,$grupo_Edad) . '
			</td>
			<td >
			    <a href="'.$url.'formatos/Pfuentes/'.base64_encode($id_programa).'/'.base64_encode($id_cuantificacion).'" <button  type="submit" class="btn btn-labeled btn-success" name="fuentes"><span class="btn-label"><i class="glyphicon glyphicon-edit"></i></span>Agregar fuente</button></a>
			    
			</td>
			<td >
			    <a href="'.$url.'formatos/criterios/'.base64_encode($id_programa).'/'.base64_encode($id_cuantificacion).'" <button  type="submit" class="btn btn-labeled btn-success" name="criterios"><span class="btn-label"><i class="glyphicon glyphicon-edit"></i></span>Agregar criterios</button></a>
			</td>
			
			<td class="ui-group-buttons" style="width: 150px;">
				' . $this->CoberturaGeografica($iIdDefinicion ,$nombre_definicion,$id_cuantificacion) . '
				
			</td>
		</tr>';

        echo $html;

    }
    public function ActualizarPoblacion()
    {
        $Descripcion = $this->input->post('Descripcion',TRUE); //este true es un segundo parametro que reciobe la funcion post, que hace un filtro para evitar ataques xss
        $num_hombres = $this->input->post('num_hombres',TRUE);
        $num_mujeres = $this->input->post('num_mujeres',TRUE);
        $num_indigenas = $this->input->post('num_indigenas',TRUE);
        $iIdEdad = $this->input->post('edad',TRUE);
        $id_cuantificacion = $this->input->post('id_cuantificacion',TRUE);

        $data = array(
            'tDescripcion' => $Descripcion,
            'iHombres' => $num_hombres,
            'iMujeres' => $num_mujeres,
            'iHablantesIndigenas' => $num_indigenas,
            'iIdGrupoEdad' => $iIdEdad,
            // falta una fila mas en caso de que haya una espeficicacion de otro grupo edad

        );


        if ($this->M_poblaciones->actualizar_poblacion($id_cuantificacion, $data) === TRUE) {
            echo "correcto";
        } else {
            echo "incorrecto";
        }
    }

}


//combo de cobertura geografica
// ' . $this->CoberturaGeografica($iIdDefinicion ,$nombre_definicion) . '