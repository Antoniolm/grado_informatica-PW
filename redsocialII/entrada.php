<?php
	include_once "./DataBaseConnection.php";
	$idEntry = $_SESSION["id_comentary"];
	$dataEntry=$entry->searchEntry($idEntry);
	$dataUser=$user->searchUser($dataEntry['ID_user']);
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
			<article class="entryArticle">
				
				<p> <?php echo $dataUser['nickname'] ?></p>
				<img src="./img/forest.jpg"/>
				<p class="hourP"> <?php echo $dataEntry['date'] ?></p>
				<p class="titleEntry">  <?php echo $dataEntry['title'] ?></p>
				<p class="textEntry" maxlength="3">  <?php echo $dataEntry['description'] ?></p>
				<img class="imageEntry" src="./img/egg.jpg"/>
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
				<textarea name="description" row="4" form="usrform">Enter text here...</textarea>
				<form id="usrform" action="./script/script_new_commentary.php?entry=<?php echo $idEntry?>&id=<?php echo $_SESSION['id_user']?>" method="post">
					<input type="submit"/>
				</form>
			</section>
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