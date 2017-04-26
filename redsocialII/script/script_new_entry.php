<?php
include "../dataBaseConnection.php";

session_start();
$id_user=$_SESSION["id_user"];
$title = isset($_POST['title']) ? $_POST['title'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$date="12/05/2017";

$dbAccess->Query("insert into entry (ID_user,title,description,date) values ('$id_user','$title','$description','$date')");
header('location: ../index.php?category=comment');
	
?>