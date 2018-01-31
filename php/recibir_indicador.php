<?php
	
	include'head.php';


				
		$NUMERO = $_POST ['NUMERO'];
		$SICE = $_POST ['SICE'];
		$DGCC = $_POST ['DGCC'];
		$DUURR = $_POST ['id_duur'];
		$ZONA = $_POST ['ZONA'];
		$SECTOR = $_POST ['id_sector'];
		$DEPENDENCIA = $_POST ['DEPENDENCIA'];
		$ACCIONAR = $_POST ['id_accionar'];
		$MEJORA=$_POST['id_mejora'];
		$COMUNITARIO= $_POST['id_comunitario'];
		$EDUCATIVO=$_POST['id_educativo'];
		$POLICIAL=$_POST['id_policial'];
		$AGRADECIMIENTO=$_POST['id_agradecimiento'];
		$FECHA = $_POST ['FECHA'];
		$DETALLE = $_POST ['DETALLE'];
		$CANT_BENEF = $_POST ['CANT_BENEF'];
		$DEPEND_INTERV = $_POST ['DEPEND_INTERV'];
		$FECHACARGA = $_POST ['FECHACARGA'];
		$PERSONAL = $_POST ['PERSONAL'];


  


		if (isset($NUMERO)&&isset($SICE)&&isset($DGCC)&&isset($DUURR)&&isset($ZONA)&&isset($SECTOR)&&isset($DEPENDENCIA)&&isset($ACCIONAR)&&isset($MEJORA)&&isset($COMUNITARIO)&&isset($EDUCATIVO)&&isset($POLICIAL)&&isset($AGRADECIMIENTO)&&isset($FECHA)&&isset($DETALLE)&&isset($CANT_BENEF)&&isset($DEPEND_INTERV)&&isset($FECHACARGA)&&isset($PERSONAL))
		{

				
				require_once'conexion.php';
				$conexion = conectar();
				$sql="INSERT INTO INSERT INTO `indicadores`( `NUMERO`, `SICE`, `DGCC`, `id_duur`, `ZONA`, `id_sector`, `DEPENDENCIA`, `id_accionar`, `id_mejora`, `id_comunitario`, `id_educativo`, `id_policial`, `id_agradecimiento`, `FECHA`, `DETALLE`, `CANT_BENEF`, `DEPEND_INTERV`, `FECHA_CARGA`, `PERSONAL`) VALUES ('$NUMERO', '$SICE', '$DGCC', '$DUURR', '$ZONA', '$SECTOR', '$DEPENDENCIA', '$ACCIONAR', '$MEJORA', '$COMUNITARIO', '$EDUCATIVO', '$POLICIAL', '$AGRADECIMIENTO', '$FECHA', '$DETALLE', '$CANT_BENEF', '$DEPEND_INTERV', '$FECHACARGA', '$PERSONAL'  ";
				echo $sql;

				$result_insert=mysqli_query($conexion , $sql);
				if ($result_insert){
					echo "<h2> Se registraron los datos correctamente del Nuevo Indicador </h2>";
					//header ('location:Indicadores.php');
					
				}else {

					echo "<h2>No se registraron los datos correctamente en la base de datos, vuelva a intentar</h2> ";
					//header ('refresh:2; nuevo_indicador.php');
					
					
				}

				desconectar($conexion);
				

				
					
		}else{
		echo "<h2> Algunos de los campos no se compelto correctamente por favor revise e intente nuevamente";
		//header ('refresh:2; index.php');
		}


		include'footer.php';
?>
		