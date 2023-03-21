<?php

if (isset($_POST['addcontact'])){
    
    $name = $_POST['name'];
    $phone =  $_POST['email'];
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
    <title>Document</title>
</head>
<body><div>


  
    <h1><?php if($x){ echo  $x;}else{ echo  $y;}?></h1>



    <button><a href="../index.html">الرئيسية</a></button>
    </div>
</body>
</html>