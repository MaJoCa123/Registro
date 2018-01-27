<?php

	require_once'../php/conexion.php';
 	$conexion = conectar();
 	$sql="SELECT * FROM sector";
 	$sector=mysqli_query($conexion,$sql);
  	
?>