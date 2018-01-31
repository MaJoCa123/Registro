
<?php
	require_once'../php/conexion.php';
 	$conexion = conectar();
 	$sql="SELECT * FROM dependencia";
 	$dependencias=mysqli_query($conexion,$sql);
  	
?>