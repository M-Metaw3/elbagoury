<?php
include('config.php');

if(isset($_GET['deletedid'])){

    $id=$_GET['deletedid'];
    echo $id;
   $sql = "DELETE FROM `news` WHERE id=$id";
$result = mysqli_query($conn,$sql);

if($result){

    header('location:addNews.php');

}else{
    echo('somthing wrong');
}

}


?>

