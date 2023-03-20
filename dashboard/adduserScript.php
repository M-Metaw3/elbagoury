<?php

include('config.php');
if (isset($_POST['mmm'])){

$header = $_POST['fname'];
$news = $_POST['news'];
$sql ="INSERT INTO `news` ( `header`, `news`) VALUES ( '$header', '$news');";

$result = mysqli_query($conn,$sql);
if($result){
    echo "data";
    header('location:addNews.php');

}
}



?>