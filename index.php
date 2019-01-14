
<?php 
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <div class="container" style="margin-top:100px">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <img src="<?= $_SESSION['userData']['picture']['url'] ?>" width="140">
            </div>
            <div class="col-md-9">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td><?= $_SESSION['userData']['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><?= $_SESSION['userData']['name'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $_SESSION['userData']['email'] ?></td>
                        </tr>
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
</body>
</html>