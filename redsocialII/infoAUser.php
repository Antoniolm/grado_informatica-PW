<?php
	include_once "./DataBaseConnection.php";
?>

<body>
	<nav  id="menuPanel">
		<ul>
		<li><a href="#">-Biografía-</a></li>
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
		<article id="ChangeInfo" >
			<h2>Información de usuario</h2>
			<img src="./img/monkey.jpg"/><br>
			Nombre:Maria<br><br>
			Apellido:lopez<br><br>
			Nombre en la red:Maria<br><br>
			Contraseña:********<br><br>
		</article>
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