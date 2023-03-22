<?php

include('dashboard/config.php');


  // echo "welcom  " . $_SESSION['email'];
  // $adminName= $_SESSION['email'];
  if (isset($_GET['updatedid'])){
    $id=$_GET['updatedid'];



    // $sql = "INSERT INTO `news` ( `header`, `news`) VALUES ( '$header', '$news');";
$sql= "SELECT * FROM `news` WHERE  id=$id";


    $result = mysqli_query($conn, $sql);
  
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
          $news= $row['news'];
          $header= $row['header'];
          $createdat= $row['created_at'];
          $image= $row['image'];
          $bref= $row['bref'];

          
          
          
          ;}
    }


  mysqli_close($conn);
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
<body>
    <?php
    if(isset($result)){
        ?>
        <?php
    echo '
    <h1>'.$news.'</h1>
    <h1>'.$header.'</h1>
    <h1>'.$createdat.'</h1>
    <img src="./images/'.$image.'" width= 200 srcset="">
   
    ';
    }
    ?>
</body>
</html>