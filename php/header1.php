<?php 
	if ($_SESSION["administator"]==1) {
 
 ?>

<figure>
	<img src="../img/policia-de-salta.png" alt="" align="left" width="200">
</figure>
<header>
	<h1>Departamento Gestion y Crontol de Calidad</h1>
	<li><a href="nuevo_indicador.php">NUEVO INDICADOR</a></li>
	
	<?php echo '<li><span><a href="nuevo_indicador.php">USUARIO:'.strtoupper($_SESSION['user']).' </a></span></li> '; ?>
	<li><a href="logout.php" class="close-session">CERRAR SESION</a></li>
</header><hr>

<?php
	} //SE CIERRA LA LLAVE DEL IF
	elseif ($_SESSION["administator"]==2) {  #Usuario no Administrador:
 ?>

<figure>
	<img src="../img/policia-de-salta.png" alt="" align="left" width="200">
</figure>
<header>
	<h1>Departamento Gestion y Crontol de Calidad</h1>
	<li><a href="nuevo_indicador.php">NUEVO INDICADOR</a></li>
	
	<?php echo '<li><span><a href="nuevo_indicador.php">USUARIO:'.strtoupper($_SESSION['user']).' </a></span></li> '; ?>
	<li><a href="logout.php" class="close-session">CERRAR SESION</a></li>
</header><hr>


 <?php 
 	}//SE CIERRA LA LLAVE DEL ELSEIF
  ?>