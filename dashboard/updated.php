<?php
include('config.php');
$id=$_GET['updatedid'];
$sqlget="SELECT * FROM `news` WHERE id=$id";
$resulta = mysqli_query($conn,$sqlget);
if($resulta){
    $rowa=mysqli_fetch_array($resulta);
    $newsa=$rowa['news'];
$headera=$rowa['header'];
   
}else{
 die(mysqli_error($conn));

}

if (isset($_POST['xx'])){

    $header = $_POST['fname'];
    $news = $_POST['news'];
    $sql = "UPDATE news SET news='$news', header='$header'  WHERE id=$id";
    
    $resultaaa = mysqli_query($conn,$sql);
    if($resultaaa){
        echo 'jjjjjjjjjjj';
   header('location:addNews.php');
       
    }else{
 die(mysqli_error($conn));

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
  <input value=<?php echo $headera?> type="text" id="fname" name="fname" ><br>
  <label for="lname">الخبر</label><br>
  <textarea  name="news" id="" cols="30" rows="15"><?php echo $newsa?></textarea>
  <button type="submit" name='xx'> updated</button>


</form> 
</body>
</html>