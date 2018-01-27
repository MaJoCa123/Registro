<?php
function conectar()
{	
	$host = 'localhost';
	$user = 'root';
    $pass = '';
	$db = 'registro';
	$conexion = mysqli_connect($host,$user,$pass,$db) or die ('Error. No se puede conectar con el servidor.');
	return $conexion;
}
function desconectar($conn)
{
	mysqli_close($conn);
}
?>