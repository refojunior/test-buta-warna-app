<?php 
session_start();

$dbName = "test-buta-warna";
$dbUser = "root";
$dbPass = "";
$dbHost = "localhost";

$db = new PDO("mysql:host=$dbHost; dbname=$dbName; charset=utf8", $dbUser, $dbPass);

require_once "Facebook/autoload.php";
$fb = new Facebook\Facebook([
	'app_id' => 'YOUR_APP_ID',
	'app_secret' => 'YOUR_APP_SECRET',
]);
$helper = $fb->getRedirectLoginHelper();


?>
