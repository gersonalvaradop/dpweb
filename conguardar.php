<?php
 include ('conexion.php');
 
$nombre = $_POST['Nombre'];
 $mail = $_POST['email'];
 $asunto= $_POST['Asunto'];
$mensaje = $_POST['Msj']; 

$query = "INSERT INTO contacto(nombre,email,asunto,mensaje)values ('$nombre','$mail','$asunto','$mensaje')";

$resultado = $conexion->query($query);
		if ($resultado) {
		
			//header("location: mostrarproduc.php");
		}else{
			echo "Error no se guardo";

		}



 ?>


