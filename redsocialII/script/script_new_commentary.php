<?php
include_once "../DataBaseConnection.php";

$description = isset($_POST['description']) ? $_POST['description'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$idEntry = isset($_GET['entry']) ? $_GET['entry'] : '';
$date= date("d-m-Y");

$commentary->insertCommentaryDB($idEntry,$id,$date,$description);
header('location: ../index.php?category=mainEntry&id='.$idEntry);
	
?>