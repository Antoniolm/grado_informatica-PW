<?php
include_once "../DataBaseConnection.php";

$name = isset($_POST['name']) ? $_POST['name'] : '';
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$image = isset($_POST['image']) ? $_POST['image'] : 'prueba.png';

$user->insertUserDB($name, $lastname, $nickname, $password,$image);
header('location: ../index.php');
	
?>