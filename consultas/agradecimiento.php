<?php
	require_once'../php/conexion.php';
 	$conexion = conectar();
 	$sql="SELECT * FROM agradecimiento";
 	$agradecimiento=mysqli_query($conexion,$sql);
  	
?>
<?php
