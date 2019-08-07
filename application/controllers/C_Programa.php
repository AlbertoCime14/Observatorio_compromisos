<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class C_Programa extends CI_Controller {
		
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
			$this->load->model('M_Programa');
			//$this->load->library('session');
			
		}
		public function agregar_programa(){
			$vNombre = $this->input->post('vNombre');
			$iIdTipoPrograma = $this->input->post('iIdTipoPrograma');
			$tDescripcion = $this->input->post('tDescripcion');
			$dFechaCaptura= date("Y.m.d") ;
			//usuario estatico para pruebas
			$iIdUsuario=2;
			$data = array(
			'vNombre' => $vNombre,
			'iIdTipoPrograma' => $iIdTipoPrograma,
			'tDescripcion' => $tDescripcion,
			'iIdUsuario' =>$iIdUsuario,
			'dFechaCaptura' =>$dFechaCaptura
			);			
			if($this->M_Programa->agregar_programa($data)===TRUE){
				echo "correcto";	
				}else{
				echo "incorrecto";
			}
		}
		public function listar_programas(){
			$data['programas'] = $this->M_Programa->listar_programas();
			echo json_encode($data);
		}
		
		public function listar_programas_previos_combo(){
			$data['programas_previos'] = $this->M_Programa->listar_programas_previos_combo();
			echo json_encode($data);
		}
		public function listar_programas_previos(){
			$iIdPrograma = $this->input->post('id_programa');				
			$data['programas_previos'] = $this->M_Programa->listar_programas_previos($iIdPrograma);
			echo json_encode($data);
		}
		public function listar_programas_previos_tabla(){	
			$data['programas_previos_tabla'] = $this->M_Programa->listar_programas_previos_tabla($_POST);
			echo json_encode($data);
		}
		 public function listar_bienes_servicios()
		{
			$iIdPrograma = $this->input->post('id_programa');	
			
			 $data['bienes_servicios'] = $this->M_Programa->listar_bienes_servicios($iIdPrograma);
			 echo json_encode($data);
		}
		public function actualizar_status_objetivo(){
		$iIdPrograma = $this->input->post('iIdPrograma');			
			$data = array(
			'iActivo' => 0
			);			
			if($this->M_Programa->actualizar_status_objetivo($iIdPrograma,$data)===TRUE){
				echo "correcto";	
				}else{
				echo "incorrecto";
			}
		}
				public function listar_tipoprograma(){
			$data['tipoprograma'] = $this->M_Programa->listar_tipoprograma();
			echo json_encode($data);
		}
		public function eliminar_programa_estatal_previo(){		
				$data = array('iActivo' => 0);			
				if($this->M_Programa->eliminar_programa_estatal_previo($_POST,$data)===TRUE){
					echo "correcto";	
					}else{
					echo "incorrecto";
				}
			}
		
	}
