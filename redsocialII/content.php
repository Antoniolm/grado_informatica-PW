<?php
$category = isset($_GET['cat']) ? $_GET['cat'] : '';

if($category==''){
	require_once('start.php');
}
else if($category=='portada'){
	require_once('portada.php');
}

?>
