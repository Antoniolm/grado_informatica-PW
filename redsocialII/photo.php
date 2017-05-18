<?php
	include_once "./DataBaseConnection.php";
?>

<body>
	<nav  id="menuPanel">
		<ul>
		<?php if($_SESSION["id_Auser"]!=''){?>
				<li><a href="index.php?category=anotherPortada&iduser=<?php echo $_SESSION["id_Auser"]?>">-Biografía-</a></li>
				<li><a href="#">-Fotos-</a></li>
				<li><a href="index.php?category=infoAUser&iduser=<?php echo $_SESSION["id_Auser"]?>">-Informacion-</a></li>
			<?php } else { ?>
				<li><a href="index.php?category=anotherPortada&iduser=<?php echo $_SESSION["id_user"]?>">-Biografía-</a></li>
				<li><a href="#">-Fotos-</a></li>
				<li><a href="index.php?category=infoAUser&iduser=<?php echo $_SESSION["id_user"]?>">-Informacion-</a></li>
			<?php } ?>	
		</ul>
	</nav>
	<section id="peoplePanel">
		<?php
		$result=$user->searchAllUser();
		while ($row=mysqli_fetch_row($result)){ 
			if($row[0]!=$_SESSION['id_user']){ ?>
			<a href="index.php?category=photo&iduser=<?php echo $row[0]?>"/>
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
				$result=$entry->searchUserEntryLimit($_SESSION["id_Auser"],$_SESSION["currentPage"],$_SESSION["currentPage"]+6);
				$i=0;
				while ($row=mysqli_fetch_row($result)){
					$userEntry=$user->searchUser($row[1]);
					if($i<6){ ?>
						<a href="index.php?category=mainEntry&id=<?php echo $row[0]?>">
						<article class="photoArticle">
							<img  src="<?php echo $row[5]?>"/>
						</article>
						</a>
			<?php    				
    				}$i++;
				}
			?>
		
		<article id="cursor">
		<a href="portada.html"><img  src="./img/cursorLeft.png"/></a>
		<a href="#" ><img src="./img/cursorRight.png"/></a>
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