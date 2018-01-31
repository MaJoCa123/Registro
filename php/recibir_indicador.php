<?php
	include'head.php';

		//form = true indica que todos los campos estan completos
		$form = true;

		//para ahorrar codigo y no poner tantos isset, recorro el array POST, si algun
		//campo es vacio entonces a $form lo pongo en false porque hay campos incompletos
		//$name es el name del formulario
		//$value es el valor que trae que puede estar no definido

		foreach ($_POST as $name => $value) {
			if(!isset($value) || empty($value)){
				$form = false;
			}
		}

		

		//Si todo el formulario esta completo,recien asigno variables
		if ($form)
		{	
			$NUMERO = $_POST ['NUMERO'];
			$SICE = $_POST ['SICE'];
			$DGCC = $_POST ['DGCC'];
			$DUURR = $_POST ['id_duur'];
			$ZONA = $_POST ['ZONA'];
			$SECTOR = $_POST ['id_sector'];
			$DEPENDENCIA = $_POST ['DEPENDENCIA'];
			$ACCIONAR = $_POST ['id_accionar'];
			$MEJORA=$_POST['id_mejora'];
			$FECHA = $_POST ['FECHA'];
			$DETALLE = $_POST ['DETALLE'];
			$CANT_BENEF = $_POST ['CANT_BENEF'];
			$DEPEND_INTERV = $_POST ['DEPEND_INTERV'];
			$FECHACARGA = $_POST ['FECHACARGA'];
			$PERSONAL = $_POST ['PERSONAL'];

				
				require_once'conexion.php';
				$conexion = conectar();
				$sql="
					INSERT INTO indicadores(NUMERO, SICE, DGCC, id_duur, ZONA, id_sector, id_dependencia, id_mejora, FECHA, DETALLE, CANT_BENEF, DEPEND_INTERV, PERSONAL) 
					VALUES ($NUMERO,'$SICE',$DGCC,$DUURR,'$ZONA',$SECTOR,'$DEPENDENCIA',$MEJORA,'$FECHA','$DETALLE',$CANT_BENEF,'DEPEND_INTERV','$PERSONAL')
				";

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
		echo "<h2>Algunos de los campos no se compelto correctamente por favor revise e intente nuevamente";
		//header ('refresh:2; index.php');
		}


		include'footer.php';
?>
		