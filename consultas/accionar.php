
<?php

	require_once'../php/conexion.php';
 	$conexion = conectar();
 	$sql="SELECT * FROM accionar";
 	$accionar=mysqli_query($conexion,$sql);
  	
?>