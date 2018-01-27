<?php 
	session_start();
	if (!isset($_SESSION['user'])) {
		header('location:index.php');
	}
	include'head.php';	
	require_once'header.php'; 
 ?>
 <section id="section-agree-user">
	<form action="nuevo_usuario_bd.php" method="POST" id="form-alta-user" >
		<legend id="legend-alta"><h1 class="titulo"> Alta usuarios </h1></legend><br>
			
		<label for="name">Usuario</label>	
		<input type="text" id="name" autofocus name="user" class="input-user-nuevo">
		<label for="pass">Contraseña</label>	
		<input type="password" id="pass" name="password" class="input-user-nuevo" >
		<label for="mail">Correo</label>	
		<input type="email" id="mail" name="email" class="input-user-nuevo" required>
		<label for="Revista">Revista</label>	
		<input type="text" id="Revista" name="revista" class="input-user-nuevo" required>
		<label for="rol1">Usuario Administrador</label><br>
		<input type="radio" id="rol1" name="rol" value="1" class="input-user-radio-nvo" required><br>
		<label for="rol2">Usuario común</label>	
		<input type="radio" id="rol2" name="rol" value="2" class="input-user-radio-nvo" required><br>		
		
		<input type="submit" value="Agregar" class="input-submit">

	</form>
	<form action="listar_usuarios.php">
		<input type="submit" value="Volver a Usuarios" class="input-submit">
	</form>
</section>
	
	
	
<?php 
	include'footer.php';
 ?>

