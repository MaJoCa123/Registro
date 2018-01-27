<?php
	
	include'head.php';


				
		$NUMERO = $_POST ['NUMERO'];
		$SICE = $_POST ['SICE'];
		$DGCC = $_POST ['DGCC'];
		$DUURR = $_POST ['DUURR'];
		$ZONA = $_POST ['ZONA'];
		$SECTOR = $_POST ['SECTOR'];
		$DEPENDENCIA = $_POST ['DEPENDENCIA'];
		$ACCIONAR = $_POST ['ACCIONAR'];
		$FECHA = $_POST ['FECHA'];
		$DETALLE = $_POST ['DETALLE'];
		$CANT_BENEF = $_POST ['CANT_BENEF'];
		$DEPEND_INTERV = $_POST ['DEPEND_INTERV'];
		$FECHACARGA = $_POST ['FECHACARGA'];
		$PERSONAL = $_POST ['PERSONAL'];



   	//recorremos el array de cervezas seleccionadas. No olvidarse q la primera posición de un array es la 0 
		print_r($DUURR);
		print_r($SECTOR);
		print_r($ACCIONAR);

   	// for ($i=0;$i<count($DUURR);$i++) 
    //   	{ 
    //   	echo "<br> DUURR " . $i . ": " . $DUURR[$i]; 
    //   	} 

    //  for ($i=0;$i<count($SECTOR);$i++) 
    //   	{ 
    //   	echo "<br> SECTOR " . $i . ": " . $SECTOR[$i]; 
    //   	}

     // for ($i=0;$i<count($ACCIONAR);$i++) 
     //  	{

     //  	echo "<br> ACCIONAR " . $i . ": " . $ACCIONAR[$i]; 
     //  	}
  


		if (isset($NUMERO)&&isset($SICE)&&isset($DGCC)&&isset($DUURR)&&isset($ZONA)&&isset($SECTOR)&&isset($DEPENDENCIA)&&isset($ACCIONAR)&&isset($FECHA)&&isset($DETALLE)&&isset($CANT_BENEF)&&isset($DEPEND_INTERV)&&isset($FECHACARGA)&&isset($PERSONAL))
		{

				
				require_once'conexion.php';
				$conexion = conectar();
				$sql="INSERT INTO indicadores (NUMERO,SICE, DGCC, DUURR, ZONA, SECTOR, DEPENDENCIA, ACCIONAR, FECHA, DETALLE, CANT_BENEF, DEPEND_INTERV, FECHA_CARGA, PERSONAL)
				VALUES ('$NUMERO','$SICE', '$DGCC', '$DUURR', '$ZONA','$SECTOR','$DEPENDENCIA', '$ACCIONAR','$FECHA','$DETALLE','$CANT_BENEF','$DEPEND_INTERV','$FECHACARGA','$PERSONAL')";

				$result_insert=mysqli_query($conexion , $sql);
				if ($result_insert){
					echo "<h2> Se registraron los datos correctamente del Nuevo Indicador </h2>";
					header ('location:Indicadores.php');
					
				}else {

					echo "<h2>No se registraron los datos correctamente en la base de datos, vuelva a intentar</h2> ";
					//header ('refresh:2; nuevo_indicador.php');
					
					
				}

				desconectar($conexion);
				

				
					
		}else{
		echo "<h2> Algunos de los campos no se compelto correctamente por favor revise e intente nuevamente";
		header ('refresh:2; index.php');
		}


		include'footer.php';
?>
		