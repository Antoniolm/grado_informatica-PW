<?php
	include_once "./DataBaseConnection.php";
?>

<body>
	<nav  id="menuPanel">
		<ul>
		<li><a href="index.php?category=anotherPortada&iduser=<?php echo $_SESSION['id_Auser']?>">-Biografía-</a></li>
		<li><a href="index.php?category=photo&iduser=<?php echo $_SESSION['id_Auser']?>">-Fotos-</a></li>
		<li><a href="#">-Informacion-</a></li>
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
		if($_SESSION['id_Auser']==$_SESSION['id_user']){
			$result=$user->searchUser($_SESSION['id_user']); ?>
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
		<?php
		 } else { ?>

			<article id="ChangeInfo" >
			
			<?php 	$result=$user->searchUser($_SESSION['id_Auser']); ?>
			<h2>Información de usuario</h2>
			<img src="./img/monkey.jpg"/><br>
			Nombre:<?php echo $result['name']?><br><br>
			Apellido:<?php echo $result['lastname']?><br><br>
			Nombre en la red:<?php echo $result['nickname']?><br><br>
			Contraseña:********<br><br>
		</article>
		 	<?php
		 	} ?>
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