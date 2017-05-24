<?php
	include_once "./DataBaseConnection.php";
	$id = isset($_GET['id']) ? $_GET['id'] : '';
?>

<!DOCTYPE HTML>
<html lang = "en">
<head><title>FaceToFace</title>
<meta charset = "UTF-8" />
<link rel = "stylesheet" type = "text/css" href = "estilo.css" />
<script src="js/script.js"></script>
</head>
<body>
	<section id="mainPerfilSection">
		<section id="comentaryPanelUserWind">
			<?php 
				$result=$entry->searchUserEntry($id);
				$userInfo=$user->searchUser($id);?>
				<p><?php echo $userInfo["nickname"]; ?> </p>
				
				<?php while ($row=mysqli_fetch_row($result)){ ?>
					<article class="comentaryEntryUserWind">
					<p class="titleComentary"> <?php echo $row[2] ?></p>
					</article>
			<?php    				
    			};
			?>
		</section>

	</section>

	
</body>
</html>