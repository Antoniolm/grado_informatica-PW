<?php
	include_once "../DataBaseConnection.php";
	session_start();
	$user->loged($_SESSION["id_user"],false);
	session_destroy();
	
	header('location: ../index.php');
?>