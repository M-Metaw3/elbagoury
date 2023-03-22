<?php
    include('config.php');
session_start();
    
if(!$_SESSION){
    header('location:index.php');
    
    }else{
if (isset($_POST['mmm'])){
    
    $header = $_POST['fname'];
    $news = $_POST['news'];
    $image_file = $_FILES["img"];
    $image_name= $image_file['name'];
echo $image_name;
    if (!isset($image_file)) {
        die('No file uploaded.');
    }
    
    
    move_uploaded_file(
        
        $image_file["tmp_name"],
    
       
        "../images/" . $image_file["name"]
    );








$sql ="INSERT INTO `news` ( `header`, `news`,`image`) VALUES ( '$header', '$news','$image_name');";

$result = mysqli_query($conn,$sql);
if($result){
    echo "data";
    echo $_POST['fname'];

    header('location:News.php');
    mysqli_free($result);

}
}
mysqli_close($conn);

    }
?>