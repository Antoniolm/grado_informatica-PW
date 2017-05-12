<?php
	include_once "./DataBaseConnection.php";
?>

<body>
	<nav  id="menuPanel">
		<ul>
			<li><a href="index.php?category=anotherPortada&iduser=<?php echo $_SESSION["id_user"]?>">-Biografía-</a></li>
			<li><a href="index.php?category=photo&iduser=<?php echo $_SESSION["id_user"]?>">-Fotos-</a></li>
			<li><a href="index.php?category=infoAUser&iduser=<?php echo $_SESSION["id_user"]?>">-Informacion-</a></li>
		</ul>
	</nav>
	<section id="peoplePanel">
		<?php
		$result=$user->searchAllUser();
		while ($row=mysqli_fetch_row($result)){ 
			if($row[0]!=$_SESSION['id_user']){ ?>
			<a href="index.php?category=anotherPortada&iduser=<?php echo $row[0]?>"/>
			<article class="peopleArticle">
			<p><?php echo $row[3] ?></p>
			<img src="./img/kaiser.jpg"/><br>
			</article>
			</a>
		<?php    				
    		}
    	}
		?>
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
					<a href="index.php?category=mainEntry&id=<?php echo $row[0]?>"><p class="titleComentary"> <?php echo $row[2] ?></p></a>
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
			<?php
				$result=$user->searchAllUser();
				while ($row=mysqli_fetch_row($result)){ 
					if($row[0]!=$_SESSION['id_user']){ ?>
						<a href="index.php?category=anotherPortada&iduser=<?php echo $row[0]?>"/>
						<article class="peopleArticle">
						<p id="NamePerfil"><?php echo $row[3] ?></p>
						<img src="./img/kaiser.jpg"/><br>
						</article>
						</a>
			<?php    				
				}
			}
			?>
		</aside>
	</section>
</body>