<?php 
	session_start();
	if (!isset($_SESSION['user'])) {
		header('location:index.php');
	}

	include'head.php';
	#incluyo el archivo donde esta la consulta sql
	include'../consultas/duur.php'; 
	include'../consultas/sector.php';
	include'../consultas/accionar.php';
	include'../consultas/educativo.php';
	include'../consultas/policial.php';
	include'../consultas/comunitario.php';
	include'../consultas/agradecimiento.php';
	include'../consultas/dependencias.php';
	require_once'header.php';
 ?>

	<section>
		<article>
			<h1>Indicador</h1>
			<form action="recibir_indicador.php" method="post" name="indicador nuevo">

				<label for="NUMERO">N°: </label>
				<input type="number" id="NUMERO" name="NUMERO"><br><br>


				<label for="SICE">SICE N°: </label>
				<input type="text" id="SICE" name="SICE"><br><br>


				<label for="DGCC">DGCC N°: </label>
				<input type="number" id="DGCC" name="DGCC"><br><br>

				
				<label for="id_duur">DUUR: </label>
				<!-- itero la variable sector -->				
				<select  name="id_duur" required><br><br>
					<?php while($fila=mysqli_fetch_array($duur)): ?>
						<option value="<?=$fila['id_duur']?>"><?=$fila['duur']?></option>
					<?php endwhile; ?>
				</select>
				 


					
				<label for="ZONA">ZONA: </label>
				<input type="text" id="ZONA" name="ZONA"><br><br>

				
				<label for="id_sector">SECTOR: </label>
				<!-- itero la variable sector -->				
				<select  name="id_sector" required><br><br>
					<?php while($fila=mysqli_fetch_array($sector)): ?>
						<option value="<?=$fila['id_sector']?>"><?=$fila['sector']?></option>
					<?php endwhile; ?>
				</select>
				 
				 


				<label for="DEPENDENCIA">DEPENDENCIA: </label>
				<select  name="DEPENDENCIA" required>
					<?php while($fila=mysqli_fetch_array($dependencias)): ?>
						<option value="<?=$fila['id_dependencia']?>"><?=$fila['dependencia']?></option>
					<?php endwhile; ?>
				</select>

				<br><br>

				<label for="id_accionar">ACCIONAR: </label>
				<!-- itero la variable sector -->				
				<select  name="id_accionar" id="accionar" required><br><br>
					<option disabled selected>SELECCIONAR</option>
					<?php while($fila=mysqli_fetch_array($accionar)): ?>
						<option value="<?=$fila['id_accionar']?>"><?=$fila['accionar']?></option>
					<?php endwhile; ?>
				</select>

				<select name="id_mejora" id="mejora" required>
					<option disabled selected>SELECCIONAR</option>
				</select><br><br>
				 


				<label for="FECHA">Fecha: </label>
				<input type="date" id="FECHA" name="FECHA"><br><br>

				<label for="DETALLE">DETALLE:</label>
				<textarea name="DETALLE" id="DETALLE" cols="70" rows="10" required></textarea><br><br>


				<label for="CANTIDAD DE BENEFCIARIOS">CANTIDAD DE BENEFICIARIOS: </label>
				<input type="number" id="CANT_BENEF" name="CANT_BENEF"><br><br>

				<label for="DEPENDENCIA QUE INTERVIENE EN EL ACCIONAR">DEPENDENCIA QUE INTERVIENE EN EL ACCIONAR: </label>
				<input type="text" id="DEPEND_INTERV" name="DEPEND_INTERV"><br><br>

				<label for="PERSONAL">PERSONAL: </label>
				<input type="text" id="PERSONAL" name="PERSONAL"><br><br>

				<input type="submit" value="Guardar">
				<input type="reset" value="Reestablecer">
			</form>
		</article>
	</section>

<?php
	
	include'footer.php';

/*}else{
	echo "debe iniciar sesion";

}*/

?>