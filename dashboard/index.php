<?php

include('config.php');
// echo $_POST["fname"];
isset($_POST['Submit']);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>


    <!-- <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div> -->

    <form action="" method="POST">
            <img src="../imgages/logo.svg" alt="">
        <div class="form-group">
            <label>Email </label>
            <input type="email" name="email" class="form-control" placeholder="enter your email">
        </div>

        <div class="form-group">
            <label>Password </label>
            <input type="password" name="password" class="form-control" placeholder="enter your password">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-outline-light btn-lg px-5">login</button>
        </div>
    </form>

</body>