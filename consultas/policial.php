
<?php

	require_once'../php/conexion.php';
 	$conexion = conectar();
 	$sql="SELECT * FROM policial";
 	$policial=mysqli_query($conexion,$sql);
  	
?>
