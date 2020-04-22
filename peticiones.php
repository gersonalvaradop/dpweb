<?php session_start();

function q($query)
{
	include 'conexion.php';
	$c = mysqli_query($conexion, $query) or die(mysqli_error($conexion));
	return $c;
}


$hash = "asdGsdf/678&/(fbrtyYH$%Efgsdg$";

$_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



if ($_POST['login_peticion']) {
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$r = q("select * from usuarios where usuario = '".$usuario."'");
	
	
	

	
	if ($r->num_rows<=0) {
		echo json_encode(array('exito'=>0,'mensaje'=>'No se encontro el usuario'));
		die();
	}

	$data = $r->fetch_object();
	if ($data->password!=md5($hash.$password)) {
		echo json_encode(array('exito'=>0,'mensaje'=>'Password incorrecto'));
		die();
	}

	$_SESSION['tiempo_actividad'] = time();
	$_SESSION['nombre'] = $data->nombre;
	$_SESSION['usuario'] = $data->usuario;
	$_SESSION['correo'] = $data->correo;
	$_SESSION['telefono'] = $data->telefono;
	$_SESSION['rol'] = $data->rol;
	$_SESSION['id'] = $data->id;


	if ($data->rol==1) {
		echo json_encode(array('exito'=>1,'mensaje'=>'Exito','nombre'=>$data->nombre, "redireccion"=>'admin/index.php'));
	}else{
		echo json_encode(array('exito'=>1,'mensaje'=>'Exito','nombre'=>$data->nombre, "redireccion"=>'users.php'));
	}


}



?>