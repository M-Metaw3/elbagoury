<?php
include('config.php');
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
    echo "mmmmmm";
        // echo $image;
}

?>

