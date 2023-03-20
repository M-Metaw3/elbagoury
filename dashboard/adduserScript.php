<?php

include('config.php');
if (isset($_POST['mmm'])){
    
    $header = $_POST['fname'];
    $news = $_POST['news'];
    $image_file = $_FILES["img"];
    $image_name= $image_file['name'];
echo $image_name;
    if (!isset($image_file)) {
        die('No file uploaded.');
    }
    
    // Move the temp image file to the images/ directory
    move_uploaded_file(
        // Temp image location
        $image_file["tmp_name"],
    
        // New image location, __DIR__ is the location of the current PHP file
        "../images/" . $image_file["name"]
    );








$sql ="INSERT INTO `news` ( `header`, `news`,`image`) VALUES ( '$header', '$news','$image_name');";

$result = mysqli_query($conn,$sql);
if($result){
    echo "data";
    echo $_POST['fname'];

    header('location:addNews.php');


}
}



?>