<?php session_start(); ?>
<?php 
include 'mysql.php';
$c = new Conexion();
$hash = "asdGsdf/678&/(fbrtyYH$%Efgsdg$";

$_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



if ($_POST['login_peticion']) {
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$r = $c->query("select * from usuarios where usuario = '".$usuario."'");
	if (empty($r) || $r==false) {
		echo json_encode(array('exito'=>0,'mensaje'=>'No se encontro el usuario'));
		die();
	}

	if ($r[0]['password']!=md5($hash.$password)) {
		echo json_encode(array('exito'=>0,'mensaje'=>'Password incorrecto'));
		die();
	}

	$_SESSION['tiempo_actividad'] = time();
	$_SESSION['nombre'] = $r[0]['nombre'];
	$_SESSION['usuario'] = $r[0]['usuario'];
	$_SESSION['correo'] = $r[0]['correo'];
	$_SESSION['telefono'] = $r[0]['telefono'];
	$_SESSION['rol'] = $r[0]['rol'];
	$_SESSION['id'] = $r[0]['id'];

	if ($r[0]['rol']==1) {
		echo json_encode(array('exito'=>1,'mensaje'=>'Exito','nombre'=>$r[0]['nombre'], "redireccion"=>'./admin/index.php'));
	}else{
		echo json_encode(array('exito'=>1,'mensaje'=>'Exito','nombre'=>$r[0]['nombre'], "redireccion"=>'index.php'));
	}


}



?>