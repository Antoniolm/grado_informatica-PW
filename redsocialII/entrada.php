<?php
	include_once "./DataBaseConnection.php";
	$idEntry = $_SESSION["id_comentary"];
	$dataEntry=$entry->searchEntry($idEntry);
	$dataUser=$user->searchUser($dataEntry['ID_user']);
?>

<body>
	<nav  id="menuPanel">
		<ul>
		<li><a href="index.php?category=anotherPortada&iduser=<?php echo $_SESSION['id_Auser']?>">-Biografía-</a></li>
		<li><a href="index.php?category=photo&iduser=<?php echo $_SESSION['id_Auser']?>">-Fotos-</a></li>
		<li><a href="index.php?category=infoAUser&iduser=<?php echo $_SESSION['id_Auser']?>">-Informacion-</a></li>
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
			<article class="entryArticle">
				
				<p> <?php echo $dataUser['nickname'] ?></p>
				<img src="./img/forest.jpg"/>
				<p class="hourP"> <?php echo $dataEntry['date'] ?></p>
				<p class="titleEntry">  <?php echo $dataEntry['title'] ?></p>
				<p class="textEntry" maxlength="3">  <?php echo $dataEntry['description'] ?></p>
				<img class="imageEntry" src="<?php echo $dataEntry['image']?>"/>
			</article>
			<section id="ComentPanel">
				<?php 
					$result=$commentary->searchEntryCommentary($idEntry);
					while ($row=mysqli_fetch_row($result)){ 
						$userCommentary=$user->searchUser($row[2]) ?>
						<article class="UserComent">
						<img src="./img/monkey.jpg"/>
						<p><?php echo $userCommentary['nickname']." - ".$row[3]; ?> </p>
						<p><?php echo $row[4]; ?></p>
						</article>
				<?php    				
	    			}
				?>
				
			</section>

			<section id="WritePanel">
				<img src="./img/forest.jpg"/>
				<p><?php echo $_SESSION["nickname"] ?></p>
				<textarea id="textAreaCommentary" name="description" row="4" form="commentaryForm" placeholder="Enter text here..."></textarea>
				<form id="commentaryForm" action="./script/script_new_commentary.php?entry=<?php echo $idEntry?>&id=<?php echo $_SESSION['id_user']?>" method="post" onsubmit="return checkCommentary();">
					<input type="submit"/>
				</form>
			</section>
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