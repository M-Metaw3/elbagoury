<?php

if (isset($_POST['addcontact'])){
    
    $name = $_POST['name'];
    $phone =  $_POST['phone'];
    $subject = $_POST['subject'];
    $message= $_POST['message'];
    
    if(!$name && !$email && !$mesage && !$subject){
        echo " من فضللك ادخل بيانات رسالتك";
    }
    else{
    include('config.php');
$sql ="INSERT INTO `contact` ( `phone`, `subject`,`name`,`message`) VALUES (  '$phone','$subject','$name','$message');";
$result = mysqli_query($conn,$sql);
if($result){
  $x =  "تم استلام رسالتك بنجاح سيتم التواصل معك ";
}else{
    $y=  "برجاء اعد المحاولة";

}
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../imgages/favicon.svg">
    <link rel="stylesheet" href="./style.css" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  

    <title>تواصل معنا</title>
</head>
<body>
    <div class="container">
    <div class="success-msg">
        <h1><?php if($x){ echo  $x;}else{ echo  $y;}?></h1>
    </div>
    <button class="back-btn"><a href="../index.php" >الرجوع للصفحة الرئيسية</a></button>        
    </div>
    

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>