<?php
	include_once "./DataBaseConnection.php";
?>

<body>
	<nav  id="menuPanel">
		<ul>
		<li><a href="index.php?category=portada">-Biografía-</a></li>
		<li><a href="fotos.html">-Fotos-</a></li>
		<li><a href="#">-Informacion-</a></li>
		</ul>
	</nav>
	<section id="peoplePanel">
		<?php
		$result=$user->searchAllUser();
		while ($row=mysqli_fetch_row($result)){ ?>
			<a href="index.php?category=anotherPortada&iduser=<?php echo $row[0]?>"/>
			<article class="peopleArticle">
			<p><?php echo $row[3] ?></p>
			<img src="./img/kaiser.jpg"/><br>
			</article>
			</a>
		<?php    				
    		}
		?>
	</section>


	<section id="mainPerfilSection">
		<section id="comentaryPanel">
		<?php 	$result=$user->searchUser($_SESSION['id_user']); ?>
		<form id="ChangeInfo" action="">
		<h2> Cambiar Información de usuario</h2>
		<img src="./img/forest.jpg"/><br>
		<input type="file" required/><br><br>
		Nombre:<input type="text" placeholder="<?php echo $result["name"]?>" required/><br><br>
		Apellido:<input type="text" placeholder="<?php echo $result["lastname"]?>" required/><br><br>
		Nombre en la red:<input type="text" placeholder="<?php echo $result["nickname"]?>" required/><br><br>
		Contraseña:<input type="text" placeholder="<?php echo $result["password"]?>" required/><br><br>
		Repite la contraseña:<input type="text" required/><br><br>
		<input type="submit" value="Cambiar" /><br><br>	
		</form>
		</section>

		<aside id="activateUserPanel">
			<p>Usuarios Activos</p>

			<a href="jose.html"/>
			<article class="peopleArticle">
			<p id="NamePerfil">Jose</p>
			<img src="./img/kaiser.jpg"/><br>
			</article>
			</a>

			<a href="maria.html"/>
			<article class="peopleArticle">
			<p id="NamePerfil">Maria</p>
			<img src="./img/monkey.jpg"/><br>
			</article>
			</a>

			<a href="antonio.html"/>
			<article class="peopleArticle">
			<p id="NamePerfil">Antonio</p>
			<img src="./img/egg.jpg"/><br>
			</article>
			</a>

			<a href="jose.html"/>
			<article class="peopleArticle">
			<p id="NamePerfil">Jose</p>
			<img src="./img/kaiser.jpg"/><br>
			</article>
			</a>
		
		</aside>
	</section>

	
</body>