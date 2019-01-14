<?php
    require_once "config.php";

    $redirectURL = "http://localhost/test-buta-warna/fb-callback.php";
    $permissions = ['email'];
    $loginURL = $helper->getLoginUrl($redirectURL, $permissions);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <div class="container" style="margin-top:100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
                <h2>Login</h2>
                <form action="">
                    <input type="text" class="form-control" placeholder="Email" name="email">
                    <br>
                    <input type="password" class="form-control" placeholder="Password" name="Password">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Login">
                    <input type="button" onclick="window.location = '<?= $loginURL ?>' " class="btn btn-primary" Value="Login with facebook ">
                </form>
            </div>
        </div>
    </div>
</body>
</html>