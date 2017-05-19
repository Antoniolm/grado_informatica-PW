<?php
$category = isset($_GET['category']) ? $_GET['category'] : '';
$idCommentary = isset($_GET['id']) ? $_GET['id'] : '';
$idUser = isset($_GET['iduser']) ? $_GET['iduser'] : '';
$currentPage = isset($_GET['currentPage']) ? $_GET['currentPage'] : 0;

if($category==''){
	require_once('start.php');
}
else if($category=='portada'){
	$_SESSION["id_Auser"]='';
	$_SESSION["currentPage"]=$currentPage;
	require_once('cover.php');
}
else if($category=='anotherPortada'){
	$_SESSION["id_Auser"]=$idUser;
	$_SESSION["currentPage"]=$currentPage;
	require_once('biography.php');
}
else if($category=='photo'){
	$_SESSION["id_Auser"]=$idUser;
	$_SESSION["currentPage"]=$currentPage;
	require_once('photo.php');
}
else if($category=='infoAUser'){
	$_SESSION["id_Auser"]=$idUser;
	require_once('info.php');
}
else if($category=='comment'){
	$_SESSION["currentPage"]=$currentPage;
	require_once('comment.php');
}
else if($category=='mainEntry'){
	$_SESSION["id_comentary"]=$idCommentary;
	require_once('entry.php');
}

else if($category=='contact'){
	require_once('contact.php');
}

?>
