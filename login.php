<?php
    require_once "config.php";

    $redirectURL = "http://localhost/test-buta-warna/fb-callback.php";
    $permissions = ['email'];
    $loginURL = $helper->getLoginUrl($redirectURL, $permissions);
    
    $title = "Login";

    include_once "header.php";
?>



<body>
    <div class="container" style="margin-top:100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
                <h2>LOGIN DENGAN AKUN FACEBOOK ANDA UNTUK MEMULAI </h2>
                
                    <button type="button" onclick="window.location = '<?= $loginURL ?>' " class="btn btn-primary btn-lg btn-block"><i class="fab fa-facebook-f"></i></button>
                
            </div>
        </div>
    </div>
</body>
</html>