<?php
session_start();
include('config.php');
if($_SESSION){
    header('location:addNews.php');


}else{


if($_SERVER['REQUEST_METHOD']=='POST' && (isset($_POST['submit']) && isset($_POST['email'])) && isset($_POST['password'])){

    
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$pass_hash=sha1($password);


// $sql ="INSERT INTO `users` ( `email`, `password`,`name`) VALUES (  '$email','$pass_hash','$name');";
// $sql= "SELECT * FROM `users` WHERE  email=$email";

$sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$pass_hash' LIMIT 1;";
$result = mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($result)){
//   echo   "<script >alert('metawea')</script>";
    
$_SESSION['id']=$row['id'];
$_SESSION["name"]=$row['name'];
$_SESSION["email"]=$row['email'];
    header('location:addNews.php');



}else{
    header('location:index.php');

};
   
 
mysqli_free($result);
    
}else {
    // echo "xxxxxxxxxxxxxxxxxxx";
    // header('location:index.php');
    
    // header('location:addNews.php');
};
mysqli_close($conn);
}
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

    <form  method="post">
            <img src="../imgages/logo.svg" alt="">
        <div class="form-group">
            <label>Email </label>
            <input autocomplete="off" type="email" name="email" class="form-control" placeholder="enter your email">
        </div>
        <!-- <div class="form-group">
            <label>Name </label>
            <input autocomplete="off" type="text" name="name" class="form-control" placeholder="enter your email">
        </div> -->

        <div class="form-group">
            <label>Password </label>
            <input autocomplete="off" type="password" name="password" class="form-control" placeholder="enter your password">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-outline-light btn-lg px-5">login</button>
        </div>
     

    </form>


</body>