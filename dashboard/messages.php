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
    <title>messages</title>
</head>
<body>
<div class="dashboard">
    <div class="sidebar">
      <img src="../imgages/logo.svg" alt="">
      <div class="admin-name">
        <?php
        echo "Welcom  " . $_SESSION['name'];
        ?>
      </div>
      <a href="messages.php">Messages</a>
      <a href="News.php">الاخبار</a>
      <a href="logout.php">logout</a>
    </div>

    <div class="content">

<table>
      <tr >
          <th>id</th>
          <th>name</th>
          <th>phone</th>
          <th>subject</th>
          <th>message</th>


          <th>created at</th>
        
          <th>delete</th>


        </tr>
      <?php
include('config.php');

// ORDER BY created_at DESC
$sqlget="SELECT * FROM `contact`";
$resultget = mysqli_query($conn,$sqlget);
if($resultget){
    
    while($row=mysqli_fetch_array($resultget)){
    ?>
    
    
    <?php
    
$id=$row['id'];
$name=$row['name'];
$phone=$row['phone'];
$subject=$row['subject'];
$message=$row['message'];
$send_at=$row['send at'];



echo '



<tr >
<td " >'.$id.'</td>
<td >'.$name.'</td>
<td >'.$phone.'</td>
<td >'.$subject.'</td>
<td >'.$message.'</td>
<td >'.$send_at.'</td>

 <td ><button><a href = "deletedconatctmessage.php?updatedid='.$id.'">deleted</a></td></button>

</td>

</tr>

';
}}?>



</table>
 
</div>


</div>
</body>
</html>