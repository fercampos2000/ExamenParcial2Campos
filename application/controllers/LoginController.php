<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

public function __construct() {	
	parent::__construct();
	$this->load->model('LoginModel');
} 
	public function index()
	{
        $this->load->view('logincampos');
        $this->load->view('logincambiocontra');
	}
    public function login()
	{
		$correouser = $this->input->post('gmail');  
        $contrauser = $this->input->post('contra'); 

		$comprobar = $this->LoginModel->ConsultarDates($correouser,$contrauser);
		
		if($comprobar)
		{
			$this->load->view('login/ingresosistem');
		}
		else 
		{
			$this->load->view('logincampos', $comprobar);
		}
	}

    public function cambiarcontra()
	{
		$correouser = $this->input->post('gmail');  
        $contrauser = $this->input->post('contra'); 

		$comprobar = $this->LoginModel->CambiandoContra($correouser,$contrauser);
		
		if($comprobar)
		{
			$this->load->view('login/cambioexitoso');
		}
		else 
		{
			$this->load->view('logincambiocontra', $comprobar);
		}
	}

	public function soap(){
		$this->load->view('soap');
	}
	
}

