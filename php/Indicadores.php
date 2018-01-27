
<?php 
	session_start();
	if (!isset($_SESSION['user'])) {
		header('location:index.php');
	}
	include'head.php';
	include'header1.php'; 
	//require_once'menu.php'; 
 ?>
	<section id="section-listado">	
	
	
 	<table border="2">
		<tr>
			<th>NUMERO</th><th>SICE</th><th>DGCC</th><th>DUURR</th><th>ZONA</th><th>SECTOR</th>
			<th>DEPENDENCIA</th><th>ACCIONAR</th><th>FECHA</th><th>DETALLE</th><th>CANT_BENEF</th>
			<th>DEPEND_INTERV</th><th>FECHA DE CARGA</th><th>PERSONAL</th>
		</tr>		
<?php 
 	require_once'conexion.php';
 	$conexion = conectar();
 	$sql="SELECT * FROM indicadores";
 	$result=mysqli_query($conexion,$sql);
 	echo "<caption>Listado de Indicadores</caption>";
 	while ($fila=mysqli_fetch_array($result))
 	{
 		echo '<tr><td>'.$fila["NUMERO"].'</td>
 			      <td>'.$fila["SICE"].'</td>
 			      <td>'.$fila["DGCC"].'</td>
 			      <td>'.$fila["DUURR"].'</td>
 			      <td>'.$fila["ZONA"].'</td>
 			      <td>'.$fila["SECTOR"].'</td>
 			      <td>'.$fila["DEPENDENCIA"].'</td>
 			      <td>'.$fila["ACCIONAR"].'</td>
 			      <td>'.$fila["FECHA"].'</td>
 			      <td>'.$fila["DETALLE"].'</td>
 			      <td>'.$fila["CANT_BENEF"].'</td>
 			      <td>'.$fila["DEPEND_INTERV"].'</td>
 			      <td>'.$fila["FECHA_CARGA"].'</td>
 			      <td>'.$fila["PERSONAL"].'</td>'
 			     			 
 		 ;

  	}

  	mysqli_free_result($result);
  	desconectar($conexion);
  	
  ?>
	
  	</table>
	</section>
<?php
	include'footer.php';
 
 ?>

