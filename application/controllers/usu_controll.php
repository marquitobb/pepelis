<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class usu_controll extends CI_Controller{
		public function __construct(){
			parent::__construct();
			//Cargamos el modelo a usar
			$this ->load-> model('modelo_uno');
        }
		public function iniciar_sesion(){
			$this->load->view('inicio', 'refresh');
		}
		


		public function index(){
			if(isset($_POST['datosUsuario']) > 0){
				$usuario=$_POST['usuario'];
				$pass=sha1($_POST['pass']) ;
				$data['usuario']=$usuario;
				$data['pass']=$pass;
				
				$query = $this->modelo_uno->verifica($usuario,$pass);
				if($query){
					$data['peliculas'] = $this->modelo_uno->peliculas();
					$this->load->view('2view',$data);
				}else{
					//redirect('views/inicio');
					//$this->load->view('inicio', 'refresh');
					$this->iniciar_sesion();
					echo "<script>alert('compa ese no es un usuario');</script>";
				}
			}
			else {
				echo "<script>alert('ingresa tu usuario, ¡Gracias!.');</script>";
				$this->iniciar_sesion();	
			}
	}

	public function peliculas(){
		$data['peliculas'] = $peliculas;
		$this->load->view('2view',$data);		
	}

	public function nuevoUsuario(){
		if(isset($_POST['newusuario'])){
				$usu=$_POST['usu'];
				$con=$_POST['con'];
				$correo=$_POST['correo'];
				$data['usu']=$usu;
				$data['con']=$con;
				$data['correo']=$correo;

				/*
				if($con == null) {
					echo "<script>alert('ingresa la contraseña');</script>";
					$this->load->view('registro');
				}
				elseif ($correo == null) {
					echo "<script>alert('ingresa el correo');</script>";
					$this->load->view('registro');
				}				
				elseif ($usu == null) {
					echo "<script>alert('ingresa el usuario');</script>";
					$this->load->view('registro');
				} elseif(($con != null) && ($correo != null) && ($usu != null)){
					$this->modelo_uno->usunew($usu,$con,$correo);
					//$this->load->view('newusuario',$data);
					echo "<script>alert('Usuario Registrado, ¡Gracias!.');</script>";
					$this->load->view('inicio', 'refresh');	
					
				}*/
				if ($con == null || $correo == null || $usu == null) {
					echo "<script>alert('registrate bien');</script>";
					$this->load->view('registro');
				}else {
					$this->modelo_uno->usunew($usu,sha1($con),$correo);
					//$this->load->view('newusuario',$data);
					echo "<script>alert('Usuario Registrado, ¡Gracias!.');</script>";
					$this->load->view('inicio', 'refresh');	
				}


				
		}
	}
	

}

 ?>
