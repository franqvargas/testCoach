<?php
/** www.w3schools.com **/
/**Constructor del modelo gogo**/
class mAgenda extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	/*
  public function insertar($data){
		$this->db->insert('persona',$data);
	}

	public function eliminar($dato){
		$this->db->query("DELETE FROM persona  WHERE id_p= '".$dato."';");
	}

	public function getid($datos){	
		$row=$this->db->query("SELECT * FROM persona WHERE id_p ='".$datos."';");
		$array = $row->result_array();	
		return $array;
	}
	}

  public function getper(){
	   $row=$this->db->query('SELECT * FROM persona;');
	    $array=$row->result_array();
	     return $array;
  }
*/
}
?>