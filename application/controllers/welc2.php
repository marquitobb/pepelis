<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welc2 extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//Cargamos el modelo a usar
		//$this ->load-> model('modelo_uno');
	}

	public function index()
	{
		$this->load->view('inicio');
	}
}
