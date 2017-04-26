<?php
$category = isset($_GET['category']) ? $_GET['category'] : '';

if($category==''){
	require_once('start.php');
}
else if($category=='portada'){
	require_once('portada.php');
}
else if($category=='comment'){
	require_once('coment.php');
}

?>
