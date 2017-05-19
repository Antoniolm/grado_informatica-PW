<?php
include_once "../DataBaseConnection.php";

session_start();
$id_user=$_SESSION["id_user"];
$title = isset($_POST['title']) ? $_POST['title'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$date= date("d-m-Y");
$hour= date("H");
$image="./img/forest.jpg";

$entry->insertEntryDB($id_user,$title,$description,$date,$hour,$image);
header('location: ../index.php?category=comment');
	
?>