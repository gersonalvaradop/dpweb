<?php 
session_start(); 
if (!isset($_SESSION['id'])) {
	header("location: ../");
}
ini_set("date.timezone", "America/El_Salvador");
if (isset($_SESSION['tiempo_actividad']) && (time() - $_SESSION['tiempo_actividad'] > 7200)) {//7200 equivalente a 2 horas
	session_unset();     
	session_destroy();   
	header("location: ./");
}else{$_SESSION['tiempo_actividad'] = time();}