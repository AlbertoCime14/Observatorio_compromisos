<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Diagnostico extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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
		$this->load->model('M_Diagnostico');
		//$this->load->library('session');
	}
	public function index()
	{
		
	    $this->load->view('masterpage/head');
		$this->load->view('V_diagnostico');
		$this->load->view('masterpage/footer');
		
		
		
	}
	public function agregar_programa_estatal_previo()
	{
	$data['id_programapp']=$this->M_Diagnostico->agregar_programa_estatal_previo($_POST);
	echo json_encode($data);
	}
	public function agregar_lugarimplementacion()
	{
		$iIdConfiguracion = $this->input->post('iIdConfiguracion');
		$iIdmunicipio = $this->input->post('iIdmunicipio');
		for ($i = 0; $i < count($iIdmunicipio); $i++) {
			$datos=array(
			'iIdConfiguracion' =>$iIdConfiguracion,
			'iIdmunicipio' =>$iIdmunicipio[$i]
			);
			$this->M_Diagnostico->agregar_lugarimplementacion($datos);
		
		}
			echo "correcto";	
	}
	public function listar_lugarimplementacion(){
		
		$data['lugares_implentacion'] = $this->M_Diagnostico->listar_lugarimplementacion($_POST);
        echo json_encode($data);
	}
	public function listar_municipios()
    {

        $data['municipios'] = $this->M_Diagnostico->listar_municipios();
        echo json_encode($data);
	}
	/**
		 * Subida de archivos
		 */
		public function add_files_pep()
		{
			$uploadFileDir = "./archivos/documentos_programas_estatales_previos/";
	
			$random = $_POST['randon'];
			$file=$_FILES['files'];
			// if (isset($_FILES['tArchivo' . $id])) {
			// 	$file = $_FILES['tArchivo' . $id];
			// } else if (isset($_FILES['itArchivo' . $id])) {
			// 	$file = $_FILES['itArchivo' . $id];
			// }
			if (isset($file) && $file['error'] === UPLOAD_ERR_OK) {
				// get details of the uploaded file
				$fileTmpPath = $file['tmp_name'];
				$fileName = $file['name'];
				$fileSize = $file['size'];
				$fileType = $file['type'];
				$fileNameCmps = explode(".", $fileName);
				$fileExtension = strtolower(end($fileNameCmps));
	
				$newFileName = $fileName;
	
				// check if file has one of the following extensions
				$allowedfileExtensions = array('zip', 'pdf');
	
				if (in_array($fileExtension, $allowedfileExtensions)) {
					// directory in which the uploaded file will be moved
				
					$dest_path =$uploadFileDir . $random."-".$newFileName;
	
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
		public function drop_files_pep()
	{
		$uploadFileDir = "./archivos/documentos_programas_estatales_previos/";

		$archivo = $this->input->post('archivo');
		$path = $uploadFileDir.$archivo;

		chown($path, 666);

		if (unlink($path)) {
			echo 'correcto';
		} else {
			echo 'incorrecto';
		}
	}

	
}