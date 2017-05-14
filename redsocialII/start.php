<body>
	<section class="MainSection">
		<img id="imageMainSectionLeft" src="./img/faceface.png"/>
	</section>
	<section class="MainSection">
	<h3>¿Quieres unirte a nosotros?</h3>
	<form id="registerForm" action="./script/script_new_user.php" name="registerForm" method="post" onsubmit="return checkRegister();">
		Nombre:<input type="text" name="name" /><br><br>
		Apellido:<input type="text" name="lastname" /><br><br>
		Nombre en la red:<input type="text" name="nickname" /><br><br>
		Contraseña:<input type="text" name="password" /><br><br>
		Repite la contraseña:<input type="text" name="rePass" /><br><br>
		<input type="submit" value="login" /><br><br>	
	</form>
	</section>
</body>