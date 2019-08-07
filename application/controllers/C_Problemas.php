<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Problemas extends CI_Controller
{
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
        $this->load->view('V_Problemas');
        $this->load->view('masterpage/footer');
    }

    public function actualizarproblema()
    {
        $iIdPrograma = $this->input->post('iIdPrograma');
        $vNombreProblema = $this->input->post('vNombreProblema');
        $tEstructuraProblema = $this->input->post('tEstructuraProblema');

        $data = array(
            'vNombreProblema' => $vNombreProblema,
            'tEstructuraProblema' => $tEstructuraProblema
        );


        if ($this->M_Problemas->actualizar_problema($data, $iIdPrograma) === TRUE) {
            echo "Correcto";
        } else {
            echo "Incorrecto";
        }
    }

    public function consultar_problema()
    {

        $iIdPrograma = $this->uri->segment(3);
        $data['problema'] = $this->M_Problemas->consultarproblemas(base64_decode($iIdPrograma));
        echo json_encode($data);


    }
}