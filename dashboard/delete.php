<?php
    include('config.php');
session_start();

if(!$_SESSION){
    header('location:index.php');
    
}else{
// $image=$_GET['image'];
// unlink($image);

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $image=$_GET['image'];
if($image){
unlink("../images/".$image);
    
}
    
    echo  $id;
    echo  $image;


   $sql = "DELETE FROM `news` WHERE id=$id";
  
$result = mysqli_query($conn,$sql);

if($result){

    header('location:addNews.php');

}else{
    echo('somthing wrong');
}

}
if(isset($_GET['img']))
{
    echo "done";
        // echo $image;
}
mysqli_free($result);
mysqli_close($conn);
}
?>

