<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Bienesys extends CI_Controller
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
        $this->load->model('M_ServiciosBienes');
        //$this->load->library('session');
    }

    public function index()
    {

        $this->load->view('masterpage/Head');
        $this->load->view('V_bienessys');
        $this->load->view('masterpage/Footer');


    }

    public function AgregarServicio()
    {
        $vNombre = $this->input->post('vNombreServicio');
        $tDescripcion = $this->input->post('tDescripcion');
        $tCriteriosCalidad = $this->input->post('tCriteriosCalidad');
        $tCriteriosEntregas = $this->input->post('tCriteriosEntregas');
        $iIdUnidadMedida = $this->input->post('iIdUnidadMedida');
        $iIdPrograma =  $this->input->post('iIdPrograma');

        $data = array(
            'vNombreServicio' => $vNombre,
            'tDescripcion' => $tDescripcion,
            'tCriteriosCalidad' => $tCriteriosCalidad,
            'tCriteriosEntregas' => $tCriteriosEntregas,
            'iIdUnidadMedida' => $iIdUnidadMedida,
            'iIdPrograma' => $iIdPrograma
        );

        if ($this->M_ServiciosBienes->agregar_Servicio($data) === TRUE) {
            echo "correcto";
        } else {
            echo "incorrecto";
        }
    }

    public function ListarServicios()
    {
        $key=$this->uri->segment(4);

        //$key = 20;//id de manera provicional
        $data['mydata'] = $this->M_ServiciosBienes->listar_servicios($key);
        $data['filas'] = ''; //las filas que contienen los datos
        $data['num_servicios'] = 0;

        foreach ($data['mydata'] as $datos) {
            $datos['iIdBienServicio'];
            $this->fila_servicio($datos['iIdBienServicio'], $data['num_servicios']);
            $data['num_servicios']++;
        }


    }

    public function EliminarServicio()
    {
        $iIdBienServicio = $this->input->post('iIdBienServicio');
        $data = array(
            'iActivo' => 0
        );
        if ($this->M_ServiciosBienes->Eliminar_servicio($iIdBienServicio, $data) === TRUE) {
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

    public function fila_servicio($iIdBienServicio, $num_servicio)
    {

        $url = base_url();
        $model = new M_ServiciosBienes();

        $datos = $model->listar_servicio($iIdBienServicio);

        $html = '<tr id="' . $num_servicio . '">
		<td><input type="hidden" name="id' . $num_servicio . '" id="id' . $num_servicio . '" value="' . $datos['iIdBienServicio'] . '">
		<input name="vNombreServicio' . $iIdBienServicio . '" type="text" id="vNombreServicio' . $datos['iIdBienServicio'] . '" class="form-control" value="' . $datos['vNombreServicio'] . '"></td>';


        $html .= '<td>
			    <textarea name="DescripcionServicio_' . $iIdBienServicio . '" id="DescripcionServicio_' . $datos['iIdBienServicio'] . '" style="width: 200px;resize:none;"  rows="4" placeholder="Ingrese aquí su descripción" class="form-control resize_vertical" required>' . $datos['tDescripcion'] . '</textarea>
			</td>
			<td>
                <textarea name="criterios_calidad_' . $iIdBienServicio . '" id="criterios_calidad_' . $datos['iIdBienServicio'] . '" style="width: 200px;resize:none;"  rows="4" placeholder="Ingrese aquí su descripción" class="form-control resize_vertical" required>' . $datos['tCriteriosCalidad'] . '</textarea>
			</td>
			<td>
			    <textarea name="criterios_entregas_' . $iIdBienServicio . '" id="criterios_entregas_' . $datos['iIdBienServicio'] . '" style="width: 200px;resize:none;"  rows="4" placeholder="Ingrese aquí su descripción" class="form-control resize_vertical" required>' . $datos['tCriteriosEntregas'] . '</textarea>
			</td>
			<td> ' . $this->selector_unidad($datos['iIdUnidadMedida'], $iIdBienServicio) . '
			
			</td>
			<td class="ui-group-buttons" style="width: 103px;">
				
				 <a title="Actualizar servicio" onclick="ActualizarServicio(' . $datos['iIdBienServicio'] . ');" class="btn btn-success" role="button" >
                                                <span class="glyphicon glyphicon-floppy-disk" ></span>
                                            </a>
				<a title="Eliminar servicio" onclick="EliminarServicio(' . $datos['iIdBienServicio'] . ');" class="btn btn-danger" role="button">
                                                <span class="glyphicon glyphicon-trash" ></span>
                                            </a>
			</td>
		</tr>';

        echo $html;

    }

    function selector_unidad($seleccionado = 0, $iIdBienServicio)
    {


        $html = '';
        $data['UnidadMedida'] = $this->M_ServiciosBienes->recuperar_unidad();

        $html .= '<select name="cbo_unidad' . $iIdBienServicio . '" id="cbo_unidad_' . $iIdBienServicio . '" class="form-control">';
        foreach ($data['UnidadMedida'] as $u) {
            $selected = ($u['iUnidadMedida'] == $seleccionado) ? 'selected' : '';
            $html .= '<option value="' . $u['iUnidadMedida'] . '" ' . $selected . '>' . $u['vNombre'] . '</option>';
        }
        $html .= '</select>';

        return $html;
    }

    function ActualizarServicio()
    {
        $iIdBienServicio = $this->input->post('iIdBienServicio');
        $vNombre = $this->input->post('vNombreServicio');
        $tDescripcion = $this->input->post('tDescripcion');
        $tCriteriosCalidad = $this->input->post('tCriteriosCalidad');
        $tCriteriosEntregas = $this->input->post('tCriteriosEntregas');
        $iIdUnidadMedida = $this->input->post('iIdUnidadMedida');
        $iIdPrograma =$this->uri->segment(4); ; ///este id del programa se obtiene a traves de la url

        $data = array(
            'vNombreServicio' => $vNombre,
            'tDescripcion' => $tDescripcion,
            'tCriteriosCalidad' => $tCriteriosCalidad,
            'tCriteriosEntregas' => $tCriteriosEntregas,
            'iIdUnidadMedida' => $iIdUnidadMedida,
            'iIdPrograma' => $iIdPrograma
        );


        if ($this->M_ServiciosBienes->actualizar_servicio($iIdBienServicio, $data) === TRUE) {
            echo "correcto";
        } else {
            echo "incorrecto";
        }
    }
}