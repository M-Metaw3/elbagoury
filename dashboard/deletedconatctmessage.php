<?php
    include('config.php');
    session_start();
    
    if(!$_SESSION){
        header('location:index.php');
        
    }else{

    
    if(isset($_GET['updatedid'])){
        $id=$_GET['updatedid'];
        echo $id;
 
       $sql = "DELETE FROM `contact` WHERE id=$id";
      
    $result = mysqli_query($conn,$sql);
    
    if($result){
    
        header('location:messages.php');
    
    }else{
        echo('somthing wrong');
    }
    
    }
else{
echo "somthing wrong";

}}
?>