<?php
    include('config.php');
session_start();

if(!$_SESSION){
    header('location:index.php');
    
    }else{
$id=$_GET['updatedid'];
$sqlget="SELECT * FROM `news` WHERE id=$id";
$resulta = mysqli_query($conn,$sqlget);
if($resulta){
    $rowa=mysqli_fetch_array($resulta);
    $newsa=$rowa['news'];
    $headera=$rowa['header'];
    $image=$rowa['image'];
    

   
}else{
 die(mysqli_error($conn));

}

if (isset($_POST['update'])){

    $image_file = $_FILES["img"];
    $image_name= $image_file['name'];
echo $image_name;
    $header = $_POST['fname'];
    $news = $_POST['news'];
    $sql = "UPDATE `news` SET `header`='.$header.',`news`='.$news.',`image`='$image_name' WHERE id=$id";
    
    $resultaaa = mysqli_query($conn,$sql);
    if($resultaaa){
        unlink("../images/".$image);
        move_uploaded_file(
        
            $image_file["tmp_name"],
            
            
            "../images/" . $image_file["name"]
        );
        echo 'jjjjjjjjjjj';

   header('location:addNews.php');
//    mysqli_free($resultaaa);
       
    }else{
 die(mysqli_error($conn));

    }
    }
    }
    mysqli_close($conn);
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
<form  method="post" enctype="multipart/form-data" >
  <label for="fname">العنوان</label><br>
  <input value=<?php echo $headera?> type="text" id="fname" name="fname" ><br>
  <label for="lname">الخبر</label><br>
  <textarea  name="news" id="" cols="30" rows="15"><?php echo $newsa?></textarea>
  <button type="submit" name='update'> updated</button>
  <input type="file" name="img" id="">
  <?php echo '<img src="../images/'.$image.'" width= 200 srcset="">'?>
  


</form> 
</body>
</html>