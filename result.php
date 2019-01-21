
<?php 
include "config.php";
if(!isset($_SESSION['access_token'])){
    header("location:login.php");
    exit();
} else {
    $title = "Result ";
    include_once "header.php";
    $user = $_SESSION['userData']['id'];
}

$query = $db->query("SELECT count(id) FROM answers where user_id = '$user' AND result = 'true' and stat = '1'");
$hasil = $query->fetchColumn();
if($hasil == 10){
	$msg = "Selamat, mata anda tergolong normal dan tidak buta warna sama sekali";
} else {
	$msg = "Sepertinya mata anda memiliki masalah, silahkan konsultasikan kepada dokter spesialis mata terdekat";
}

?>

<body>
    <?php include_once "navbar.php" ?>
    <div class="container" id="container" style="margin-top:50px">
        <div class="row justify-content-center">
            <div class="col-md-4" style="text-align: center">
                <h3>HASIL NYA ADALAH</h3>
                <h4><?= $hasil ?></h4>
                <p><?= $msg ?></p>
            </div>
        </div>
        
    </div>
</body>
</html>

