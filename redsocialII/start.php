<?php 
	include("conexionBD.php"); 
?>
<body>
	<section class="MainSection">
		<img id="imageMainSectionLeft" src="./img/faceface.png"/>
	</section>
	<section class="MainSection">
	<h3>¿Quieres unirte a nosotros?</h3>
	<form id="registerForm" action="./script/script_new_user.php" method="post">
		Nombre:<input type="text" name="name" required/><br><br>
		Apellido:<input type="text" name="lastname" required/><br><br>
		Nombre en la red:<input type="text" name="nickname" required/><br><br>
		Contraseña:<input type="text" name="password" required/><br><br>
		Repite la contraseña:<input type="text" required/><br><br>
		<input type="submit" value="login" /><br><br>	
	</form>
	</section>
</body>