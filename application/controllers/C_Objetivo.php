<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Objetivo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //session_start();
        $this->load->helper('url');
        $this->load->model('M_objetivos');
        $this->load->model('M_Problemas');
        //$this->load->library('session');
    }

    public function index()
    {
        $this->load->view('masterpage/head');
        $this->load->view('V_Objetivos');
        $this->load->view('masterpage/footer');
    }

    public function actualizarobjetivo()
    {
        
		$iIdProblema = $this->input->post('iIdProblema');
        $vNombreObjetivo = $this->input->post('vNombreObjetivo');
        $tEstructuraObjetivo = $this->input->post('tEstructuraObjetivo');

        $data = array(
            'vNombreObjetivo' => $vNombreObjetivo,
			'tEstructuraObjetivo' => $tEstructuraObjetivo,
			'IActivo' =>1
			
        );


        if ($this->M_objetivos->actualizar_objetivos($data, $iIdProblema) === TRUE) {
            echo "Correcto";
        } else {
            echo "Incorrecto";
        }
    }
	

    public function consultar_objetivo()
    {
        //la consulta de este problema servira para pintar un json similar al del arbol de problemas
        $iIdPrograma = $this->uri->segment(3);
        $data['objetivos'] = $this->M_objetivos->consultarobjetivos(base64_decode($iIdPrograma));
        echo json_encode($data);
    }

}