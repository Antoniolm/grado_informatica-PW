<?php
include "DataBaseAccess.php";
include "User.php";

$dbAccess = new DateBaseAccess("localhost", "root", "", "redsocial");
$user= new User($dbAccess);
?>
