<?php 
	session_start();
	if (!isset($_SESSION['user'])) {
		header('location:index.php');
	}
	include'head.php';	
	require_once'header.php'; 

		
	if (isset($_POST['user']) && isset($_POST['password']) && isset($_POST['rol']) && isset($_POST['revista']) && isset($_POST['email']))

	{	$user= $_POST['user'];
		$password= password_hash( $_POST['password']  ,PASSWORD_DEFAULT);
		$rol= $_POST['rol'];
		$revista= $_POST['revista'];
		$email= $_POST['email'];
		print_r($password);
		require_once'conexion.php';	
		$conexion=conectar();
		$sql="INSERT INTO personal (Usuario,Password,Email,Revista,rol) VALUES ('$user','$password','$email','$revista','$rol')";

		// $sql1="INSERT INTO `usuarios` (`idUsuario`, `nombre`, `clave`, `email`, `rol`, `foto`, `revista`) VALUES (NULL, '$user', '$password', '$email', '$rol', '$nameFoto', '$revista')";


		$result=mysqli_query($conexion,$sql);
		if ($result) {
			echo "<h3>Se cargaron los datos correctamente</h3>";
		}else{
			echo "<h3>No se pudieron cargar los datos correctamente</h3>";
		}
		desconectar($conexion);
	}else{echo "<h3>Alguno de los campos del formulario no ha sido completado</h3> ";}
	// header('refresh:3;url=listar_usuarios.php');  AQUI MODIFICAR Y REDIRECCIONAR A LA PAGINA QUE SE QUIERA MOSTRAR
 ?>