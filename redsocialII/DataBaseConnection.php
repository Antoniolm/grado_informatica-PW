<?php
include "DataBaseAccess.php";
include "User.php";
include "EntryClass.php";
include "CommentaryClass.php";

$dbAccess = new DateBaseAccess("localhost", "root", "", "redsocial");
$user= new User($dbAccess);
$entry =new Entry($dbAccess);
$commentary =new Commentary($dbAccess);
?>
