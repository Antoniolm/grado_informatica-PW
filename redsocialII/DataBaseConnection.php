<?php
include "DataBaseAccess.php";
include "User.php";
include "EntryClass.php";
include "CommentaryClass.php";

$dbAccess = new DateBaseAccess("localhost", "pw_76667039", "Xpw_76667039", "pw_76667039");
//$dbAccess = new DateBaseAccess("localhost", "root", "", "redsocial");
$user= new User($dbAccess);
$entry =new Entry($dbAccess);
$commentary =new Commentary($dbAccess);
?>
