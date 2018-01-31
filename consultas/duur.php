<?php

	require_once'../php/conexion.php';
 	$conexion = conectar();
 	$sql="SELECT * FROM duur";
 	$duur=mysqli_query($conexion,$sql);
  	
?>

