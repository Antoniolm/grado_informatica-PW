<!DOCTYPE HTML>
<html lang = "en">
<head><title>FaceToFace</title>
<meta charset = "UTF-8" />
<link rel = "stylesheet" type = "text/css" href = "estilo.css" />
</head>
<header>
	<img id="imageLogo" src="./img/faceface.png"/>
	<h1 id="nameSocial"> FaceToFace</h1>
	<section id="loginPanel">
		<?php 
		session_start();
		if(!isset($_SESSION["nickname"])){?>
			<form action="./script/script_login_user.php" method="post">
			Nombre:<br><input type="text" name="user" required/><br>
			Contraseña:<br><input type="text" name="password" required/><br>
			<input type="submit" value="login" /><br>
			</form>
		<?php }
		else{ ?>
			<a href="index.php?category=comment"><p id="NamePerfil">Pepe</p></a>
			<a href="index.php?category=comment"><img id="ImagePerfil" src="./img/forest.jpg"/><br></a>
			<a href="./script/script_close_user.php">Desconectar</a>
		<?php } ?>
		
	</section>
</header>