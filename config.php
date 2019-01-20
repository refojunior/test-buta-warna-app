<?php 
session_start();

$dbName = "test-buta-warna";
$dbUser = "root";
$dbPass = "";
$dbHost = "localhost";

$db = new PDO("mysql:host=$dbHost; dbname=$dbName; charset=utf8", $dbUser, $dbPass);

require_once "Facebook/autoload.php";
$fb = new Facebook\Facebook([
	'app_id' => '135871274021219',
	'app_secret' => '0204f151932dd4c3dc79319c06d23ffd',
]);
$helper = $fb->getRedirectLoginHelper();


?>