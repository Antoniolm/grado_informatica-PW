<?php
include_once "../DataBaseConnection.php";

session_start();

$name = isset($_POST['nameUser']) ? $_POST['nameUser'] : '';
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
$password = isset($_POST['pass']) ? $_POST['pass'] : '';
$image = isset($_POST['image']) ? $_POST['image'] : './img/egg.jpg';
$id=$_SESSION["id_user"];

$user->updateUser($_SESSION["id_user"],$name, $lastname, $nickname, $password,$image);
header("location: ../index.php?category=infoAUser&iduser=$id");
	
?>