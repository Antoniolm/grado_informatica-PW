<?php
include_once "../DataBaseConnection.php";

$description = isset($_POST['description']) ? $_POST['description'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$idEntry = isset($_GET['entry']) ? $_GET['entry'] : '';

echo $id." - ".$description;


$dbAccess->Query("insert into commentary (ID_entry,ID_user,date,description) values ('$idEntry','$id','12/04/2017','$description')");
header('location: ../index.php?category=mainEntry&id='.$idEntry);
	
?>