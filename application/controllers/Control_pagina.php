<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_pagina extends CI_Controller
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
        $this->load->view('V_index_compromiso');
        $this->load->view('masterpage/footer');

    }
    public function ListarCompromisos4(){

		$data['filas'] = '';
		$data['num_compromiso'] = 0;

		$data['compromisos_4'] = $this->M_compromisos->listar_compromisos4();
		$objetos_definicion = $data['compromisos_4'];
		echo json_encode($objetos_definicion);
		/*foreach ($objetos_definicion as $datos) {

			$data['filas'] .= $this->fila_definicion($datos['iIdDefinicion'], $datos['vNombre'], $data['num_def']);

			$data['num_def']++;
		}*/
	}
}


