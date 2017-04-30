<?php
$category = isset($_GET['category']) ? $_GET['category'] : '';
$idCommentary = isset($_GET['id']) ? $_GET['id'] : '';
$idUser = isset($_GET['iduser']) ? $_GET['iduser'] : '';

if($category==''){
	require_once('start.php');
}
else if($category=='portada'){
	require_once('portada.php');
}
else if($category=='anotherPortada'){
	$_SESSION["id_Auser"]=$idUser;
	require_once('portadaAUser.php');
}
else if($category=='comment'){
	require_once('comment.php');
}
else if($category=='mainEntry'){
	$_SESSION["id_comentary"]=$idCommentary;
	require_once('entrada.php');
}

?>
