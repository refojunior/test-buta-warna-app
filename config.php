<?php 
session_start();
require_once "Facebook/autoload.php";

$FB = new \Facebook\Facebook([
    'app_id' => '388342955256977',
    'app_secret' => '99416127c036d488d87028784b0097d4',

]);

$helper = $FB->getRedirectLoginHelper();

?>