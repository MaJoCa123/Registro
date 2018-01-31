
<?php
	require_once'../php/conexion.php';
 	$conexion = conectar();
 	$sql="SELECT * FROM comunitario";
 	$comunitario=mysqli_query($conexion,$sql);
  	
?>