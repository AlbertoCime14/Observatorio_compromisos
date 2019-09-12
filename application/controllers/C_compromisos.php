<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_compromisos extends CI_Controller
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
		$this->load->model('M_compromisos');
		//$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('masterpage/head');
		$this->load->view('V_listado_compromisos');
		$this->load->view('masterpage/footer');

	}

	public function mostrar()
	{
		//valor a Buscar

		$buscar = $this->input->post("buscar");
		$numeropagina = $this->input->post("nropagina");
		$id_dependencia = $this->input->post("idDpendencia");
		//$cantidad = $this->input->post("cantidad");
		$cantidad=8; //deben ser busquedas por cada 8
		$inicio = ($numeropagina -1)*$cantidad;
		$data = array(
			"compromisos" => $this->M_compromisos->buscar($buscar,$id_dependencia,$inicio,$cantidad),
			"totalregistros" =>count( $this-> M_compromisos->buscar($buscar,$id_dependencia)),
			"cantidad" =>$cantidad

		);
		echo json_encode($data);
	}
	public function mostrar_number()
	{
		//valor a Buscar
		$buscar = $this->input->post("buscar");
		$numeropagina = $this->input->post("nropagina");

		//$cantidad = $this->input->post("cantidad");
		$cantidad=8; //deben ser busquedas por cada 8
		$inicio = ($numeropagina -1)*$cantidad;
		$data = array(
			"compromisos" => $this->M_compromisos->buscar_number($buscar,$inicio,$cantidad),
			"totalregistros" => count($this->M_compromisos->buscar_number($buscar)),
			"cantidad" =>$cantidad

		);
		echo json_encode($data);
	}
	public function mostrarProcesos()
	{
		//valor a Buscar
		$buscar = $this->input->post("buscar");
		$numeropagina = $this->input->post("nropagina");
		$id_dependencia = $this->input->post("Id_dependencia");
		//$cantidad = $this->input->post("cantidad");
		$cantidad=8; //deben ser busquedas por cada 8
		$inicio = ($numeropagina -1)*$cantidad;
		$data = array(
			"compromisos" => $this->M_compromisos->buscar_proceso($buscar,$id_dependencia,$inicio,$cantidad),
			"totalregistros" => count($this->M_compromisos->buscar_proceso($buscar,$id_dependencia)),
			"cantidad" =>$cantidad

		);
		echo json_encode($data);
	}
	public function procesos_number()
	{
		//valor a Buscar
		$buscar = $this->input->post("buscar");
		$numeropagina = $this->input->post("nropagina");
		//$cantidad = $this->input->post("cantidad");
		$cantidad=8; //deben ser busquedas por cada 8
		$inicio = ($numeropagina -1)*$cantidad;
		$data = array(
			"compromisos" => $this->M_compromisos->buscar_proceso_number($buscar,$inicio,$cantidad),
			"totalregistros" => count($this->M_compromisos->buscar_proceso_number($buscar)),
			"cantidad" =>$cantidad

		);
		echo json_encode($data);
	}
	public function mostrarProcesosIniciar()
	{
		$buscar = $this->input->post("buscar");
		$numeropagina = $this->input->post("nropagina");
		$id_dependencia = $this->input->post("idDependencia");
		//$cantidad = $this->input->post("cantidad");
		$cantidad=8; //deben ser busquedas por cada 8
		$inicio = ($numeropagina -1)*$cantidad;
		$data = array(
			"compromisos" => $this->M_compromisos->buscar_iniciar($buscar,$id_dependencia,$inicio,$cantidad),
			"totalregistros" => count($this->M_compromisos->buscar_iniciar($buscar,$id_dependencia)),
			"cantidad" =>$cantidad
		);
		echo json_encode($data);
	}
	public function procesos_numberIniciar()
	{
		$buscar = $this->input->post("buscar");
		$numeropagina = $this->input->post("nropagina");
		//$id_dependencia = $this->input->post("idDpendencia");
		//$cantidad = $this->input->post("cantidad");
		$cantidad=8; //deben ser busquedas por cada 8
		$inicio = ($numeropagina -1)*$cantidad;
		$data = array(
			"compromisos" => $this->M_compromisos->buscar_iniciar_number($buscar,$inicio,$cantidad),
			"totalregistros" => count($this->M_compromisos->buscar_iniciar_number($buscar)),
			"cantidad" =>$cantidad

		);
		echo json_encode($data);
	}
	public function listar_dependencias(){
		$data['dependencias'] = $this->M_compromisos->recuperar_dependencias();
		echo json_encode($data);
	}
}


