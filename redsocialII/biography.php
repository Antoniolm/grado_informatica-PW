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
				$result=$entry->searchUserEntryLimit($_SESSION["id_Auser"],$_SESSION["currentPage"],6);
				$userEntry=$user->searchUser($_SESSION["id_Auser"]);
				$numEntry=$entry->searchNumUserEntry($_SESSION["id_Auser"]);
				while ($row=mysqli_fetch_row($result)){ ?>

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
				}
			?>

		<article id="cursor">
			<?php 
			 if($_SESSION["currentPage"]!=0) { ?>
				<a href="index.php?category=anotherPortada&currentPage=<?php echo $_SESSION["currentPage"]-6 ?>&iduser=<?php echo $_SESSION["id_Auser"]?>"><img  src="./img/cursorLeft.png"/></a>
			<?php } else { ?>
				<a href="#"><img  src="./img/cursorLeft.png"/></a>
			<?php } 
			if($_SESSION["currentPage"]+6<$numEntry) { ?>
				<a href="index.php?category=anotherPortada&currentPage=<?php echo $_SESSION["currentPage"]+6 ?>&iduser=<?php echo $_SESSION["id_Auser"]?>"><img  src="./img/cursorRight.png"/></a>
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