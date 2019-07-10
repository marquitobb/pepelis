<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welc2 extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//Cargamos el modelo a usar
		//$this ->load-> model('Modelo_uno');
	}

	public function index()
	{
		$this->load->view('Inicio');
	}
}
