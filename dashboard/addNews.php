<?php

include('config.php');
if (isset($_POST['mmm'])){

$header = $_POST['fname'];
$news = $_POST['news'];
$sql ="INSERT INTO `news` ( `header`, `news`) VALUES ( '$header', '$news');";

$result = mysqli_query($conn,$sql);
if($result){
    echo "data";
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
<body>
<form  method="post" >
  <label for="fname">العنوان</label><br>
  <input autocompelete='off' type="text" id="fname" name="fname" ><br>
  <label for="lname">الخبر</label><br>
  <textarea name="news" id="" cols="30" rows="15"></textarea>
  <button type="submit" name='mmm'> submit</button>
  
</form> 
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

echo '



<tr >
<td " >'.$id.'</td>
<td >'.$news.'</td>
<td >'.$header.'</td>
<td >'.$created_at.'</td>
<td ><button><a href = "delete.php?deletedid='.$id.'">Deleted</a></td></button>
<td ><button><a href = "updated.php?updatedid='.$id.'">update</a></td></button>
</tr>

';
}}?>



</table>

</body>
</html>