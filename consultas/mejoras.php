<?php
header('Content-type: text/html; charset=utf-8');
if(isset($_POST['id_accionar'])){
	require_once'../php/conexion.php';
 	$conexion = conectar();
 	$sql      = "SELECT * FROM mejoras WHERE id_accionar = " . $_POST['id_accionar'];
 	$mejora   = mysqli_query($conexion,$sql);
 	$data     = [];
 	while ($fila = mysqli_fetch_array($mejora)) {
 		$data[] = [ 'id_mejora' => $fila['id_mejora'], 'mejora' => $fila['mejora'] ];
 	}
 	echo json_encode($data);
}

  	
?>
