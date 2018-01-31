<?php

	require_once'../php/conexion.php';
 	$conexion = conectar();
 	$sql="SELECT * FROM educativo";
 	$educativo=mysqli_query($conexion,$sql);
  	
?>
