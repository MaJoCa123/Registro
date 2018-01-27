<?php 
	include'head.php';	
?>
<section id="section-login" >
 <form action="recibir.php" method="POST" id="form-alta-user">
 	<figure>
 	<a href="index.php"><img src="../img/policia-de-salta.png" alt="" align="left" width="200"></a>
 	</figure>
 	<h1 id="h1login">Inicio de Sesion</h1>
 	<label for="user">Usuario</label>
 	<input type="text" id="user" name="user" class="input-user-login" autofocus required>
 	<label for="pass">Contraseña</label>
 	<input type="password" id="pass" name="password" class="input-user-login" required>
 	<input type="submit" value="Iniciar Sesion" id="btn-confirma" class="input-submit" >
 	<input type="reset" value="Reestablecer" id="btn-confirma" class="input-submit"><br>
	
 </form>
</section>
<?php 
	include'footer.php';
?> 