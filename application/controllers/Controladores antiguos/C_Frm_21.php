<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Frm_21 extends CI_Controller
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
        $this->load->view('V_frm_21');
        $this->load->view('masterpage/footer');
    }

    public function actualizarobjetivo()
    {
        $iId_objeivos = $this->input->post('iId_objeivos');
		$iId_problemas = $this->input->post('iId_problemas');
        $tNombre_objetivo = $this->input->post('tNombre_objetivo');
        $tEstructura_objetivo = $this->input->post('tEstructura_objetivo');
		$IActivo = $this->input->post('IActivo');

        $data = array(
            'iId_problemas' => $iId_problemas,
            'tNombre_objetivo' => $tNombre_objetivo,
			'tEstructura_objetivo' => $tEstructura_objetivo,
			'IActivo' =>$IActivo
			
        );


        if ($this->M_objetivos->actualizar_objetivos($data, $iId_objeivos) === TRUE) {
            echo "Correcto";
        } else {
            echo "Incorrecto";
        }
    }

    public function consultar_objetivo()
    {
        //la consulta de este problema servira para pintar un json similar al del arbol de problemas
        $iId_objeivos = $this->uri->segment(3);
        $data['objetivos'] = $this->M_objetivos->consultarobjetivos($iId_objeivos);
        echo json_encode($data);
    }
    public function cosultar_objetivos()
    {

        $iId_objetivos = $this->uri->segment(3);
        $data['objetivos'] = $this->M_objetivos->consultarobjetivos($iId_objetivos);
        echo json_encode($data);
    }
}