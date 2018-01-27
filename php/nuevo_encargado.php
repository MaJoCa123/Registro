<?php

	require_once ("../html/cabecera.html");
	require_once ("conexion.php");
	require_once ("../html/header.html");

?>

	<section>
		<article>
				<div>
					<form action="altanuevo_encargado.php" method="post">

						<p><label for="jerarquia">Jerarquia: </label><select name="jerarquia">
  						<option value="1">Agente</option> 
   						<option value="2">Cabo</option> 
   						<option value="3">Sargento</option>
   						<option value="4">Sgto.Ayte</option> 
  						<option value="5">SubOf.Ppal</option> 
   						<option value="6">SubOf.Myr</option> 
   						<option value="7">Of.S/Ayte</option> 
   						<option value="8">Of.Ayte</option> 
   						<option value="9">Of.Aux</option>
   						<option value="10">Of.Ppal</option> 
  						<option value="11">Sub Crio.</option>  


						</select><p>
						
						<label for="legajo">Legajo: </label>
						<input type="tex" id="legajo" name="legajo"><br><br>

						<label for="nombreapellido">Nombre y Apellido: </label>
						<input type="text" id="nombreapellido" name="nombreapellido"><br><br>

						<label for="revista">Revista: </label>
						<input type="text" id="revista" name="revista"><br><br>

						<label for="dur">DUR: </label><select name="dur">
  						<option value="1">DUR-1</option> 
   						<option value="2">DUR-2</option> 
   						<option value="3">DUR-3</option>
   						<option value="4">DUR-4</option> 
  						<option value="5">DUR-5</option> 
   						<option value="6">DUR-6</option> 
   						</select><p>


						<label for="direccion">Direccion: </label>
						<input type="text" id="direccion" name="direccion"><br><br>
						

						<input type="submit" value="Guardar">
						<input type="reset" value="Reestablecer">
					</form>
				</div>
		</article>
	</section>

<?php
	
	require_once ("../html/pie.html");

?>