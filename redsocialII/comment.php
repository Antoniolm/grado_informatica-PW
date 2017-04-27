<?php
	include_once "./DataBaseConnection.php";
?>

<body>
	<nav  id="menuPanel">
		<ul>
		<li><a href="#">-Biografía-</a></li>
		<li><a href="fotos.html">-Fotos-</a></li>
		<li><a href="info.html">-Informacion-</a></li>
		</ul>
	</nav>
	<section id="peoplePanel">
		<a href="jose.html"/>
		<article class="peopleArticle">
			<p>Jose</p>
			<img src="./img/kaiser.jpg"/><br>
		</article>
		</a>

		<a href="maria.html"/>
		<article class="peopleArticle">
			<p>Maria</p>
			<img src="./img/monkey.jpg"/><br>
		</article>
		</a>

		<a href="antonio.html"/>
		<article class="peopleArticle">
			<p>Antonio</p>
			<img src="./img/egg.jpg"/><br>
		</article>
		</a>

		<a href="jose.html"/>
		<article class="peopleArticle">
			<p>Jose</p>
			<img src="./img/kaiser.jpg"/><br>
		</article>
		</a>

		<a href="maria.html"/>
		<article class="peopleArticle">
			<p>Maria</p>
			<img src="./img/monkey.jpg"/><br>
		</article>
		</a>

		<a href="antonio.html"/>
		<article class="peopleArticle">
			<p>Antonio</p>
			<img src="./img/egg.jpg"/><br>
		</article>
		</a>

		<a href="jose.html"/>
		<article class="peopleArticle">
			<p>Jose</p>
			<img src="./img/kaiser.jpg"/><br>
		</article>
		</a>

		<a href="maria.html"/>
		<article class="peopleArticle">
			<p>Maria</p>
			<img src="./img/monkey.jpg"/><br>
		</article>
		</a>

		<a href="antonio.html"/>
		<article class="peopleArticle">
			<p>Antonio</p>
			<img src="./img/egg.jpg"/><br>
		</article>
		</a>

		<a href="jose.html"/>
		<article class="peopleArticle">
			<p>Jose</p>
			<img src="./img/kaiser.jpg"/><br>
		</article>
		</a>

		<a href="maria.html"/>
		<article class="peopleArticle">
			<p>Maria</p>
			<img src="./img/monkey.jpg"/><br>
		</article>
		</a>

		<a href="antonio.html"/>
		<article class="peopleArticle">
			<p>Antonio</p>
			<img src="./img/egg.jpg"/><br>
		</article>
		</a>
	</section>


	<section id="mainPerfilSection">
		<section id="comentaryPanel">
			<section id="writePerfilPanel">
				<p>Pepe</p>
				<img src="./img/forest.jpg"/>
				
				<form action="./script/script_new_entry.php" method="post">
					<input id="titleWrite" type="text" id="title"  name="title"  placeholder="Introduce aqui el titulo de la entrada"/>
					<textarea row="4" name="description" placeholder="Introduce aqui tu nueva entrada"></textarea>
					<input id="buttonImage" type="submit" value="Upload Image"/>
					<input id="buttonSubmit" type="submit" value="Submit"/>
				</form>
			</section>
			<?php 
				$result=$entry->searchUserEntry($_SESSION["id_user"]);
				while ($row=mysqli_fetch_row($result)){ ?>
					<article class="comentaryArticle">
					<p><?php echo $_SESSION["nickname"]?></p>
					<img src="./img/egg.jpg"/>
					<p class="hourP"><?php echo $row[4] ?></p>
					<p class="titleComentary"> <?php echo $row[2] ?></p>
					<p class="textComentary" maxlength="3"> <?php echo $row[3] ?></p>
					</article>

			<?php    				
    			}
			?>

		<article id="cursor">
		<a href="#"><img  src="./img/cursorLeft.png"/></a>
		<a href="#" ><img src="./img/cursorRight.png"/></a>
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