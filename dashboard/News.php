<?php
session_start();
if(!$_SESSION){
    header('location:index.php');
    
}else{

    include('config.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
</head>
<body>
<div class="dashboard">
    <div class="sidebar">
      <img src="../imgages/logo.svg" alt="">
      <div class="admin-name">
        <?php
        echo "مرحبا  " . $_SESSION['name'];
        ?>
      </div>
      <a href="messages.php">الرسائل</a>
      <a href="News.php">الاخبار</a>
      <a href="logout.php">تسجيل الخروج</a>
    </div>

    <div class="content">

<table>
      <tr >
          <th>id</th>
          <th>news</th>
          <th>header</th>
          <th>created at</th>
          <th>Delete</th>
          <th>update</th>


        </tr>
      <?php
include('config.php');

$sqlget="SELECT * FROM `news`  ORDER BY created_at DESC  ";
$resultget = mysqli_query($conn,$sqlget);
if($resultget){
    
    while($row=mysqli_fetch_array($resultget)){
    ?>
    
    
    <?php
    
$id=$row['id'];
$news=$row['news'];
$header=$row['header'];
$created_at=$row['created_at'];
$image=$row['image'];


echo '



<tr >
<td " >'.$id.'</td>
<td >'.$news.'</td>
<td >'.$header.'</td>
<td >'.$created_at.'</td>
<td >
<img src="../images/'.$image.'" width= 200 srcset="">
</td>

<td ><button><a href="delete.php?deleteid='.$id.'&image=' . $image .'">Deleted</a></td></button>
<td ><button><a href = "updated.php?updatedid='.$id.'">update</a></td></button>
</tr>

';
}}?>



</table>
    </div>
</div>
</body>
</html>