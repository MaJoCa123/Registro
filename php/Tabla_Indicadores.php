<?php

session_start();
if (isset ($_SESSION['user']))
{	
	require_once "../html/cabecera.html";
	require_once "../html/header.html";


	echo '<h1>Indicadores 2018</h1><a href="nuevo.php"><img src="../img/nuevo.png" width="60"></a><hr>';


	require_once "conexion.php";
	$conexion = conectar();
	$sql = "SELECT * FROM articulos ORDER BY fecha"; // *=todo, siendo todo, las columnas.
	$resultado = mysqli_query ($conexion, $sql);
	echo "<section>";
	while($articulo=mysqli_fetch_array($resultado)){
		echo "<article>";
		echo '<a href="editar.php?id='.$articulo['ID'].'"><img src="../img/editar.png" align="right" width="30"></a>';
		echo '<a href="eliminar.php?id='.$articulo['ID'].'&articulo='.$articulo["titulo"].'"><img src="../img/borrar.png" align="right" width="30"></a><br>';
		echo $articulo['titulo'].'<br>';
		echo $articulo['fecha'].'<br>';
		echo $articulo['articulo'].'<br>';
		echo "<br><hr> </article> ";
	}
	echo "</section>";
require_once "../html/pie.html";

}else{
	echo "debe iniciar sesion <br>";
	
}
