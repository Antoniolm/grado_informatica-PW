<?php
include_once "../DataBaseConnection.php";

$nickname = isset($_POST['user']) ? $_POST['user'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$row= $user->checkLogin($nickname,$password);

if(!empty($row)){
	session_start();
	$_SESSION["nickname"] = $row['nickname']; 
	$_SESSION["id_user"] = $row['ID_user']; 
	header('location: ../index.php?category=portada');
}else{
	header('location: ../index.php');
}
?>