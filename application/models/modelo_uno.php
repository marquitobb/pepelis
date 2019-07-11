<?php 
	if (! defined('BASEPATH')){
  exit('No direct script acces allowed');

}
class Modelo_uno extends CI_MODEL{

	public function verifica($usuario,$pass){
		$this->db->where('nombre',$usuario);
		$this->db->where('contra',$pass);
		$query = $this->db->get('usuario')->row_array();
		return $query;				
}
public function peliculas(){
	return $this->db->Select()
			 ->from('peliculas')
			 ->order_by(1, "desc")
			 ->get('')
			 ->result();
}
public function usunew($Pelicula,$Nombre,$current_date){
	return $this->db->set('nombre',$Pelicula)
					->set('contra',$Nombre)
					->set('correo',$current_date)
					->insert('usuario');
}

}
 ?>
 