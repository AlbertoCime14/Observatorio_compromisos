<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_fuentes_otros extends CI_Controller
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
        //$this->load->model('M_otro_criterios');
        //$this->load->library('session');
    }


    public function index()
    {
        $this->load->view('masterpage/Head');
        $this->load->view('V_fuentes_otros');
        $this->load->view('masterpage/Footer');
    }
    public function AgregarCriterio(){
        $nombre_criterio=$this->input->post('nombre_criterio',TRUE);
        $descripcion_criterio=$this->input->post('descripcion',TRUE);
        $id_cuantificacion=$this->input->post('idCuantificacion',TRUE);

        $data=array(
            'VnombreCriterio' => $nombre_criterio,
            'tDescripcionCriterio' => $descripcion_criterio,
            'iIdCuantificacion' => $id_cuantificacion
        );
        if ($this->M_otro_criterios->agregar_criterio($data) === TRUE) {
            echo "correcto";
        } else {
            echo "incorrecto";
        }
    }
    public function ListarCriterios(){

        $key=$this->uri->segment(4);

        //$key = 20;//id de manera provicional
        $data['criterios'] = $this->M_otro_criterios->listar_Criterios($key);
        $data['filas'] = ''; //las filas que contienen los datos
        $data['num_criterios'] = 0;

        $data_criterio=$data['criterios'];

        for($x=0; $x < count($data_criterio); $x++){

            $this->fila_criterios($data_criterio[$x]['iIdCriterio'],$data_criterio[$x]['VnombreCriterio'],$data_criterio[$x]['tDescripcionCriterio']);


        }


    }
    public function fila_criterios($id_Criterio,$nombre, $descripcion)
    {


        $html = '<tr id="' . $id_Criterio . '">
		<td><input type="hidden" name="id' . $id_Criterio . '" id="id' . $id_Criterio . '" value="">
		<input name="nombre_criterio" type="text" id="nombre_criterio'.$id_Criterio.'" class="form-control" value="' . $nombre . '"></td>';


        $html .= '<td>
			    <textarea  name="descripcion_criterio' . $id_Criterio . '" id="descripcion_criterio' . $id_Criterio . '" style="width:600px;resize:none;"  rows="3" placeholder="Ingrese aquí su descripción" class="form-control resize_vertical" required>' . $descripcion . '</textarea>
			</td>
			
			
			<td class="ui-group-buttons" style="width: 103px;">
				
				 <a title="Actualizar criterio" onclick="ActualizarCriterio(' .$id_Criterio . ');" class="btn btn-success" role="button" >
                                                <span class="glyphicon glyphicon-floppy-disk" ></span>
                                            </a>
				<a title="Eliminar criterio" onclick="EliminarCriterio(' . $id_Criterio. ');" class="btn btn-danger" role="button">
                                                <span class="glyphicon glyphicon-trash" ></span>
                                            </a>
			</td>
		</tr>';

        echo $html;

    }
    public function EliminarCriterio()
    {
        $id_criterio = $this->input->post('idCriterio');
        $data = array(
            'iActivo' => 0
        );
        if ($this->M_otro_criterios->eliminar_criterio($id_criterio,$data) === TRUE) {
            echo "correcto";
        } else {
            echo "incorrecto";
        }
    }
    public function  ActualizarCriterio(){
        $nombre_criterio=$this->input->post('nombre_criterio',TRUE);
        $descripcion_criterio=$this->input->post('descripcion',TRUE);
        $id_criterio=$this->input->post('idcriterio',TRUE);

        $data=array(
            'VnombreCriterio' => $nombre_criterio,
            'tDescripcionCriterio' =>$descripcion_criterio,

        );

        if($this->M_otro_criterios->Actualizarcriterio($id_criterio,$data)== TRUE){
            echo "correcto";
        }else{
            echo "incorrecto";
        }
    }

    public function add_files()
    {
        $uploadFileDir = "./archivos/fuente_poblacion/";

        //$id = $_POST['id'];
        $file;
        if (isset($_FILES['tArchivo'])) {
            $file = $_FILES['tArchivo' ];
        } else if (isset($_FILES['itArchivo' ])) {
            $file = $_FILES['itArchivo' ];
        }
        if (isset($file) && $file['error'] === UPLOAD_ERR_OK) {
            // get details of the uploaded file
            $fileTmpPath = $file['tmp_name'];
            $fileName = $file['name'];
            $fileSize = $file['size'];
            $fileType = $file['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            // sanitize file-name
            $newFileName = $fileName;

            // check if file has one of the following extensions
            $allowedfileExtensions = array('zip', 'pdf');

            if (in_array($fileExtension, $allowedfileExtensions)) {
                // directory in which the uploaded file will be moved

                $dest_path =$uploadFileDir . $newFileName;

                if (move_uploaded_file($fileTmpPath, $dest_path)) {
                    echo "correcto";
                } else {
                    //validar error al pasar archivo al servidor
                    echo "incorrecto";
                }
            } else {
                //valida los tipos de archivos
                echo "vilidartiposarchivos";
            }
        } else {
            //valida si existe el post
            echo "incorrecto";
        }
    }


}



