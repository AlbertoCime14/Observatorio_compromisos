<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Control_login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->helper('url');
	//	$this->load->model('M_login');
		
		//$this->load->library('session');
	}
	public function inicia_sesion()
	{
		$this->load->view('V_login');
		
	}
    public function cerrar_sesion()
	{
	//	session_unset('id_usuario');
	//	session_unset('id_dependencia');
	//	session_unset('dependencia_abrev');
	}
}