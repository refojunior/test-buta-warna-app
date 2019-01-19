
<?php 
include "config.php";
if(!isset($_SESSION['access_token'])){
    header("location:login.php");
    exit();
} else {
    $title = "Try Now";
    include_once "header.php";
}

?>

<body>
    <?php include_once "navbar.php" ?>
    <div class="container" style="margin-top:50px">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <img src="img/1.jpg" alt="1" class="img-fluid">
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-3" style="text-align: center">
                <b>Angka berapakah gambar diatas?</b>
                <ul>
                    <li><input type="radio" value="2" name="answer"> 2</li>
                    <li><input type="radio" value="3" name="answer"> 3</li>
                    <li><input type="radio" value="1" name="answer"> 1</li>
                    <li><input type="radio" value="4" name="answer"> 4</li>
                </li>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-3" style="text-align: center">
                <input type="submit" value="Next" class="btn btn-primary">
            </div>
        </div>
    </div>
</body>
</html>