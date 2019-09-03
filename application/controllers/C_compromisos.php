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

	public function ListarCompromisos()
	{

		$data['filas'] = '';
		$data['num_compromiso'] = 0;

		$data['compromisos'] = $this->M_compromisos->listar_compromisos();
		//echo json_encode( $objetos_compromisos = $data['compromisos']);
		$objetos_compromisos = $data['compromisos'];
		$progress_color = array('progress-bar-primario', 'progress-bar-secundario', 'progress-bar-terciario', 'progress-bar-cuaternario');
		$colors = array('#00A36A', '#212743', '#694688', '#6CBB37');
		$i = 0;
		foreach ($objetos_compromisos as $datos) {

			$data['filas'] .= $this->fila_compromiso($datos['iIdCompromiso'], $datos['vCompromiso'], $datos['iNumero'], $datos['dPorcentajeAvance'],$progress_color[$i],$colors[$i],$datos['iIdDependencia']);

			if($i >=3){
				$i=0;
			}else{
				$i++;
			}
		}

	}


	public function ListarCompromisosP()
	{

		$data['filas'] = '';
		$data['num_compromiso'] = 0;

		$data['compromisosP'] = $this->M_compromisos->listar_compromisosP();
		//echo json_encode( $objetos_compromisos = $data['compromisos']);
		$objetos_compromisos = $data['compromisosP'];
		$progress_color = array('progress-bar-primario', 'progress-bar-secundario', 'progress-bar-terciario', 'progress-bar-cuaternario');
		$colors = array('#00A36A', '#212743', '#694688', '#6CBB37');
		$i = 0;
		foreach ($objetos_compromisos as $datos) {

			$data['filas'] .= $this->fila_compromiso($datos['iIdCompromiso'], $datos['vCompromiso'], $datos['iNumero'], $datos['dPorcentajeAvance'],$progress_color[$i],$colors[$i],$datos['iIdDependencia']);


			if($i >=3){
				$i=0;
			}else{
				$i++;
			}

		}

	}


	public function ListarCompromisosI()
	{

		$data['filas'] = '';
		$data['num_compromiso'] = 0;

		$data['compromisosP'] = $this->M_compromisos->listar_compromisosI();
		//echo json_encode( $objetos_compromisos = $data['compromisos']);
		$objetos_compromisos = $data['compromisosP'];
		$progress_color = array('progress-bar-primario', 'progress-bar-secundario', 'progress-bar-terciario', 'progress-bar-cuaternario');
		$colors = array('#00A36A', '#212743', '#694688', '#6CBB37');
		$i = 0;
		foreach ($objetos_compromisos as $datos) {

			$data['filas'] .= $this->fila_compromiso($datos['iIdCompromiso'], $datos['vCompromiso'], $datos['iNumero'], $datos['dPorcentajeAvance'],$progress_color[$i],$colors[$i],$datos['iIdDependencia']);
			if($i >=3){
				$i=0;
			}else{
				$i++;
			}

		}

	}

	public function fila_compromiso($iIdCompromiso, $nombre, $numero, $porcentaje,$progress_color,$color,$id_dependencia)
	{

					$html = '<div class="col-sm-6 col-lg-3 isotope-item brands" ">
				<div class="portfolio-item">
					<a href="descripcion/'.$iIdCompromiso.'/'.$id_dependencia.'">
					<span class="thumb-info thumb-info-lighten border-radius-0">
						<span class="thumb-info-wrapper border-radius-0">
							<img src="../img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
			
							<span class="thumb-info-title" style="opacity: 0.7 !important;">
								<span style="font-size: 40px !important;text-align: center !important;" class="thumb-info-inner">'.$numero.'</span>
								<span style="background-color: '.$color.' !important;" class="thumb-info-type">Compromiso</span>
							</span>
			
						</span>
					</span>
						<div class="progress mb-2" style="margin-top: 7px">
							<div class="progress-bar '.$progress_color.'" role="progressbar" aria-valuenow="'.$porcentaje.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$porcentaje.'%;">
								'.$porcentaje.'%
							</div>
						</div>
						<p>'.$nombre.' </p>
					</a>
				</div>
			</div>';

		echo $html;


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
		//$cantidad = $this->input->post("cantidad");
		$cantidad=8; //deben ser busquedas por cada 8
		$inicio = ($numeropagina -1)*$cantidad;
		$data = array(
			"compromisos" => $this->M_compromisos->buscar_iniciar($buscar,$inicio,$cantidad),
			"totalregistros" => count($this->M_compromisos->buscar_iniciar($buscar)),
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


