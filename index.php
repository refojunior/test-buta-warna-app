
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
    <div class="container" id="container" style="margin-top:50px">
        <div class="row justify-content-center">
            <div class="col-md-4" style="text-align: center">
                <h3>Mari kita mulai!</h3>
                <button id="btnStart" class="btn btn-primary btn-block">START</button>
            </div>
        </div>
        
    </div>
</body>
</html>

<script>
     $('#btnStart').click(function(){
        var soal = Math.floor(Math.random() * 11);
        $.ajax({
            url:"load-question.php",
            type:"GET",
            data:"question=" + soal,
            success: function(result){
                $('#container').html(result)
            }
        });
    });
</script>

