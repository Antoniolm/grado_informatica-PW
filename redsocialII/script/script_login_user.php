<?php
include "../conexionBD.php";

$nickname = isset($_POST['user']) ? $_POST['user'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
echo $nickname." ".$password." hola";

$select="SELECT * FROM user WHERE nickname='".$nickname."' and password='".$password."'";
$result=$datos->query($select);
$row= mysqli_fetch_array($result);
if(!empty($row)){
	session_start();
	$_SESSION["nickname"] = $row['nickname']; 
	$_SESSION["id_user"] = $row['ID_user']; 
}
header('location: ../index.php');

?>