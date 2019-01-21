<?php 
require_once "config.php";

try{
    $accessToken = $helper->getAccessToken();
} catch(\Facebook\Exceptions\FacebookResponseException $e){
    echo "Response Exception : " . $e->getMessage();
    exti();
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
    echo "SDK Exception : " . $e->getMessage();
    exti();
}

if(!$accessToken){
    header('location: login.php');
    exit();
}


$oAuth2Client = $fb->getOAuth2Client();
if(!$accessToken->isLongLived()){
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
}

$response = $fb->get("me?fields=id, name, email, picture", $accessToken);
$userData = $response->getGraphNode()->asArray();

$_SESSION['userData'] = $userData;
$_SESSION['access_token'] = (string) $accessToken;
$date = date('Y-m-d H:i:s');
//insert to DB
$db->query("INSERT INTO users values ('".$_SESSION['userData']['id']."', '".$_SESSION['userData']['name']."', '".$_SESSION['userData']['email']."', 'progress', '$date')");

header('location:index.php');
exit();

?>