<?php 
include 'mysql.php';
$c = new Conexion();
$hash = "asdGsdf/678&/(fbrtyYH$%Efgsdg$";


if ($_POST['login_peticion']) {
	$r = $c->query("select * from usuarios where usuario = '".$_POST['usuario']."'");
	var_dump($r);


}






?>