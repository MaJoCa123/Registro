
<?php

	require_once'../php/conexion.php';
 	$conexion = conectar();
 	$sql="SELECT * FROM mejora";
 	$mejora=mysqli_query($conexion,$sql);
  	
?>
