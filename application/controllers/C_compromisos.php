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
		$colors = array('#00A36A', '#212743', '#694688', '#6CBB37');
		$i = 0;
		foreach ($objetos_compromisos as $datos) {

			$data['filas'] .= $this->fila_compromiso($datos['iIdCompromiso'], $datos['vCompromiso'], $datos['iNumero'], $datos['dPorcentajeAvance']);
			$i++;

		}

	}

	public function fila_compromiso($iIdCompromiso, $nombre, $numero, $porcentaje)
	{

		$html = '<div class="col-sm-6 col-lg-3 isotope-item brands" ">
    <div class="portfolio-item">
        <a href="http://localhost/observatorio/compromisos/descripcion">
        <span class="thumb-info thumb-info-lighten border-radius-0">
            <span class="thumb-info-wrapper border-radius-0">
                <img src="http://localhost/observatorio/img/projects/project.jpg" class="img-fluid border-radius-0" alt="">

                <span class="thumb-info-title">
                    <span class="thumb-info-inner">'.$numero.'</span>
                    <span class="thumb-info-type">Compromiso</span>
                </span>

            </span>
        </span>
            <div class="progress mb-2" style="margin-top: 7px">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="'.$porcentaje.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$porcentaje.'%;">
                    '.$porcentaje.'%
                </div>
            </div>
            <p>'.$nombre.' </p>
        </a>
    </div>
</div>';

		echo $html;


	}
}


