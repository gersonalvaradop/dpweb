<?php 
include 'mysql.php';
$c = new Conexion();
$hash = "asdGsdf/678&/(fbrtyYH$%Efgsdg$";

$_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



if ($_POST['login_peticion']) {
	$usuario = $_POST['usuario'];
	$r = $c->query("select * from usuarios where usuario = '".$usuario."'");
	if (empty($r) || $r==false) {
		echo json_encode(array('exito'=>0,'mensaje'=>'No se encontro el usuario'));
		die();
	}

	if ($r[0]['password']!=md5($hash.$usuario)) {
		echo json_encode(array('exito'=>0,'mensaje'=>'Password incorrecto'));
		die();
	}

	

}



?>