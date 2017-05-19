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
			<img src="<?php echo $row[5]?> " onmouseover="showUserEntry(<?php echo $row[0] ?>);" /><br>
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
				$result=$entry->searchEntryLimit($_SESSION["currentPage"],6);
				$i=0;
				while ($row=mysqli_fetch_row($result)){
					$userEntry=$user->searchUser($row[1]);?>
					<article class="comentaryArticle">
					<p><?php echo $userEntry['nickname'] ?></p>
					<img src="<?php echo $userEntry['image'] ?>"/>

					<?php if($row[4]!=date("d-m-Y")){?>
						<p class="hourP"><?php echo $row[4] ?></p>
					<?php } else { ?>
						<p class="hourP"><?php echo "hace ".(date("H")-$row[5])." hora"?></p>
					<?php } ?>

					<a href="index.php?category=mainEntry&id=<?php echo $row[0]?>"><p class="titleComentary"> <?php echo $row[2] ?></p></a>
					<p class="textComentary" maxlength="3"> <?php echo $row[3] ?></p>
					</article>
			<?php   
				$i++; 				
				}
			?>

		<article id="cursor">
		<?php 
		 if($_SESSION["currentPage"]!=0) { ?>
			<a href="index.php?category=portada&currentPage=<?php echo $_SESSION["currentPage"]-6 ?>"><img  src="./img/cursorLeft.png"/></a>
		<?php } else { ?>
			<a href="#"><img  src="./img/cursorLeft.png"/></a>
		<?php } 
		if($i>4) { ?>
			<a href="index.php?category=portada&currentPage=<?php echo $_SESSION["currentPage"]+6 ?>"><img  src="./img/cursorRight.png"/></a>
		<?php } else {?>
			<a href="#"><img  src="./img/cursorRight.png"/></a>
		<?php } ?>

		</article>
		</section>

		<aside id="activateUserPanel">
			<p>Usuarios Activos</p>
			<?php
				$result=$user->searchConnectedUser();
				while ($row=mysqli_fetch_row($result)){ 
					if($row[0]!=$_SESSION['id_user']){ ?>
						<a href="index.php?category=anotherPortada&iduser=<?php echo $row[0]?>"/>
						<article class="peopleArticle">
						<p id="NamePerfil"><?php echo $row[3] ?></p>
						<img src="<?php echo $row[5]?>"/><br>
						</article>
						</a>
			<?php    				
				}
			}
			?>
		</aside>
	</section>

	
</body>