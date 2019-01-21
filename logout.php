<?php 
include "config.php";
$user = $_SESSION['userData']['id'];
//change to done when logout
$db->query("UPDATE users set stat = 'done' WHERE user_id = '$user' " );
//change stat table answers
$db->query("UPDATE answers set stat = '0' WHERE user_id = '$user' ");

session_destroy();
header("location:index.php");
 ?>