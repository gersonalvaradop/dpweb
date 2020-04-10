<?php 


class Conexion{
	private $mysqli="";
	
	function __construct() {
		$this->mysqli = new mysqli("127.0.0.1", "root", "", "jardineria", 3306);
		if ($this->mysqli->connect_errno) {
			echo json_encode(array("exito"=>0, "mensaje"=>"Fallo al conectar a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error));
		}
	}

	function query($query)
	{
		$r = $this->mysqli->query($query);
		if($r){
			$v =  $r->fetch_all(MYSQLI_ASSOC);
			$r->free_result();
			$this->mysqli->close();
			return $v;			
		}else{
			$r->free_result();
			$this->mysqli->close();
			return false;
		}
	}

}



?>