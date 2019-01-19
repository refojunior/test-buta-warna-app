<?php 
session_start();
require_once "Facebook/autoload.php";
$fb = new Facebook\Facebook([
	'app_id' => '135871274021219',
	'app_secret' => '0204f151932dd4c3dc79319c06d23ffd',
]);
$helper = $fb->getRedirectLoginHelper();


?>