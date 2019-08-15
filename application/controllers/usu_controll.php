<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Usu_controll extends CI_Controller{
		public function __construct(){
			parent::__construct();
			//Cargamos el modelo a usar
			$this ->load-> model('Modelo_uno');
        }
		public function iniciar_sesion(){
			$this->load->view('Inicio', 'refresh');
		}
		


		public function index(){
			if(isset($_POST['datosUsuario']) > 0){
				$usuario=$_POST['usuario'];
				$pass=sha1($_POST['pass']) ;
				$data['usuario']=$usuario;
				$data['pass']=$pass;
				
				$query = $this->Modelo_uno->verifica($usuario,$pass);
				if($query){
					$data['peliculas'] = $this->Modelo_uno->peliculas();
					$this->load->view('2view',$data);
				}else{
					//redirect('views/Inicio');
					//$this->load->view('Inicio', 'refresh');
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

				$query = $this->db->get_where('usuario', array('nombre' => $usu));

				if ($query->num_rows() > 0) {
					echo'<script>alert("Ingresa otro nombre de usuario ese ya fue registrado")</script>';
					$this->load->view('Registro', 'refresh');	
				}else{

					if ($con == null || $correo == null || $usu == null) {
						echo "<script>alert('registrate bien');</script>";
						$this->load->view('Registro');
					}else{
						$this->Modelo_uno->usunew($usu,sha1($con),$correo);
						//$this->load->view('newusuario',$data);
						echo "<script>alert('Usuario Registrado, ¡Gracias!.');</script>";
						$this->load->view('Inicio', 'refresh');	
					}
				}
				
		}
	
	}
	

}

 ?>
