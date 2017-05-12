<?php
	include_once "./DataBaseConnection.php";
?>

<body>
	<nav  id="menuPanel">
		<ul>
			<?php if($_SESSION["id_Auser"]!=''){?>
				<li><a href="#">-Biografía-</a></li>
				<li><a href="index.php?category=photo&iduser=<?php echo $_SESSION["id_Auser"]?>">-Fotos-</a></li>
				<li><a href="index.php?category=infoAUser&iduser=<?php echo $_SESSION["id_Auser"]?>">-Informacion-</a></li>
			<?php } else { ?>
				<li><a href="#>">-Biografía-</a></li>
				<li><a href="index.php?category=photo&iduser=<?php echo $_SESSION["id_user"]?>">-Fotos-</a></li>
				<li><a href="index.php?category=infoAUser&iduser=<?php echo $_SESSION["id_user"]?>">-Informacion-</a></li>
			<?php } ?>	
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
			<?php 
				$result=$entry->searchUserEntry($_SESSION["id_Auser"]);
				$i=0;
				while ($row=mysqli_fetch_row($result)){
					$userEntry=$user->searchUser($row[1]);
					if($i<6){ ?>
					<article class="comentaryArticle">
					<p><?php echo $userEntry['nickname'] ?></p>
					<img src="./img/egg.jpg"/>
					<p class="hourP"><?php echo $row[4] ?></p>
					<a href="index.php?category=mainEntry&id=<?php echo $row[0]?>"><p class="titleComentary"> <?php echo $row[2] ?></p></a>
					<p class="textComentary" maxlength="3"> <?php echo $row[3] ?></p>
					</article>
			<?php    				
    				}$i++;
				}
			?>

		<article id="cursor">
		<a href="#"><img  src="./img/cursorLeft.png"/></a>
		<a href="portadaSigPag.html" ><img src="./img/cursorRight.png"/></a>
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