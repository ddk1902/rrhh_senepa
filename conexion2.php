<?php
	$server = "localhost";
	$user = "root";
	$password = "root";//poner tu propia contraseña, si tienes una.
	$bd = "rrhh";

	$conexion = mysqli_connect($server, $user, $password, $bd);
	mysqli_query("SET NAMES 'utf8'");
	mysqli_set_charset( $conexion, 'utf8');
	if (!$conexion){ 
		die('Error de Conexión: ' . mysqli_connect_errno());	
	}
?>

