<?php
	
include'header.php';
if (isset($_POST['user'])&&isset($_POST['password'])) {
		
	$user= $_POST['user'];
	$password= $_POST['password'];
	require_once ("conexion.php");
	$conexion = conectar();
	$sql = "SELECT Usuario,Password,rol FROM personal WHERE Usuario = '$user'";
	$resultado = mysqli_query($conexion, $sql);
	$datos=mysqli_fetch_array($resultado);
	if (isset($datos['Usuario']))
	{
		if (password_verify("$password",$datos['Password'])) 
		{	
			session_start();
			$_SESSION['user']=$user;
			$_SESSION['administator']=$datos['rol'];
			header('location:nuevo_indicador.php');
			desconectar($conexion);
			mysqli_free_result($resultado);
		
		}else{
			 echo "<script>alert('Contraseña incorrecta'); location.replace('index.php');
				   </script>"; //location.replace fn de JS para modificar el direccionamiento de una pagina
		}
		
	}else{
		echo "<script>alert('Usuario incorrecto o No registrado'); location.replace('index.php');
		</script>";
	}

}else{
	echo "<h1>Alguno de los datos no fue ingresado</h1>";
	header ("refresh: 3, url=index.php");
}

?>


	<!-- $password= password_hash($_POST['password'],PASSWORD_DEFAULT); -->