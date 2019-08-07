<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Frm_20 extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		//session_start();
		$this->load->helper('url');
		$this->load->model('M_Problemas');
		//$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('masterpage/head');
		$this->load->view('V_frm_20');
		$this->load->view('masterpage/footer');
	}
	public function actualizarproblema(){
        $iId_problema = $this->input->post('iId_problema');
        $tNombre_problema = $this->input->post('tNombre_problema');
			$tEstructura_problema = $this->input->post('tEstructura_problema');
			
				$data = array(
				'tNombre_problema' => $tNombre_problema,
				'tEstructura_problema' => $tEstructura_problema
			 );
		
		
		
		if($this->M_Problemas->actualizar_problema($data,$iId_problema)===TRUE){
			echo "Correcto";
		}else{
			echo "Incorrecto";
		}
	}

	public function consultar_problema(){

        $iId_problema=$this->uri->segment(3);
	 $data['problema']=$this->M_Problemas->consultarproblemas($iId_problema);
	echo json_encode($data);
		
	
	}
}