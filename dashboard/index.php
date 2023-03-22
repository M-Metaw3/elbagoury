<!-- <?php
session_start();
include('config.php');
if($_SESSION){
    header('location:addNews.php');
}else{


if($_SERVER['REQUEST_METHOD']=='POST' && (isset($_POST['submit']) && isset($_POST['email'])) && isset($_POST['password'])){

    
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
// $pass_hash=sha1($password);


// $sql ="INSERT INTO `users` ( `email`, `password`,`name`) VALUES (  '$email','$pass_hash','$name');";
// $sql= "SELECT * FROM `users` WHERE  email=$email";

$sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password' LIMIT 1;";
$result = mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($result)){
//   echo   "<script >alert('metawea')</script>";
    
$_SESSION['id']=$row['id'];
$_SESSION["name"]=$row['name'];
$_SESSION["email"]=$row['email'];
header('location:addNews.php');

}else{
   
    $error="الايميل او الباسورد غير صحيح برجاء اعادة المحاولة ببيانات صحيحة";
    
};
   
 

    
}else {
    echo "xxxxxxxxxxxxxxxxxxx";

};
mysqli_close($conn);
}
?> -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css" />
</head>

<body>


</body>
<div class="login">
<form  method="post" class="login-form">
            <img src="../imgages/logo.svg" alt="">
            <label>Email </label>
            <input autocomplete="off" type="email" name="email" class="form-control" placeholder="enter your email">
        <!-- <div class="form-group">
            <label>Name </label>
            <input autocomplete="off" type="text" name="name" class="form-control" placeholder="enter your email">
        </div> -->

            <label>Password </label>
            <input autocomplete="off" type="password" name="password" class="form-control" placeholder="enter your password">
            <button type="submit" name="submit" class="btn-login">login</button>
            <?php if(isset($error)){ echo $error;}?>
            
     
    </form>
</div>
 


</body>