<?php require 'control_sesion.php'; ?>

<?php 
if ($_SESSION['rol']!=1) {
	header('location:../index.php');
}

var_dump($_SESSION); ?>