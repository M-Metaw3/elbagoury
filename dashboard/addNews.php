<?php
session_start();
include('config.php');
if (!$_SESSION) {
  header('location:index.php');
} else {
  // echo "welcom  " . $_SESSION['email'];
  // $adminName= $_SESSION['email'];
  if (isset($_POST['mmm'])) {

    $header = $_POST['fname'];
    $news = $_POST['news'];
    $sql = "INSERT INTO `news` ( `header`, `news`) VALUES ( '$header', '$news');";

    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "data";
    }
  }

  mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css" />
  <title>add News</title>
</head>

<body>
  <div class="dashboard">
    <div class="sidebar">

      <img src="../imgages/logo.svg" alt="">
      <div class="admin-name">
        <?php
        echo "مرحبا  " . $_SESSION['name'];
        ?>
      </div>
      <!-- <a href="News.php"  class="select"> -->
      <div class="select">
      <span>الأخبار</span>
      <span >
        <i class="fa-solid fa-chevron-down"></i>
      </span>
      </div>
   
      <!-- </a> -->
      <div class="news">
        <a href="News.php">عرض الأخبار</a>
        <a href="addNews.php">إضافة خبر</a>
      </div>
      <a href="messages.php">الرسائل</a>
      <a class="logout" href="logout.php">تسجيل خروج</a>
    </div>

    <div class="content">
      <form class="add-news" action='adduserScript.php' method="post" enctype="multipart/form-data">
        <!-- <label for="fname">العنوان</label> -->
        <input autocomplete="off" type="text" id="fname" name="fname" placeholder="عنوان الخبر"><br>
        <input autocomplete="off" type="text" id="fname" name="fname" placeholder="اختصار"><br>
        <!-- <label for="lname">الخبر</label> -->
        <textarea autocomplete="off" name="news" id="" cols="20" rows="6" placeholder="تفاصيل الخبر..."></textarea>
        <label for="img" class="file-input">
        أرفع الصورة   
        <i class="fa-solid fa-camera"></i>
          <input type="file" id="img" name="img" onchange="uploadImag()" >
          <span id="imageName"></span>
        </label>
        <button type="submit" name='mmm' class="btn-add">نشر</button>
      </form>
    </div>


  </div>

  <!-- <table>
      <tr >
          <th>id</th>
          <th>news</th>
          <th>header</th>
          <th>created at</th>
          <th>Delete</th>
          <th>update</th>


        </tr>
      <?php
      // include('config.php');

      // $sqlget="SELECT * FROM `news`  ORDER BY created_at DESC  ";
      // $resultget = mysqli_query($conn,$sqlget);
      // if($resultget){

      //     while($row=mysqli_fetch_array($resultget)){
      //     
      ?>
    
    
//     <?php

        // $id=$row['id'];
        // $news=$row['news'];
        // $header=$row['header'];
        // $created_at=$row['created_at'];
        // $image=$row['image'];


        // echo '



        // <tr >
        // <td " >'.$id.'</td>
        // <td >'.$news.'</td>
        // <td >'.$header.'</td>
        // <td >'.$created_at.'</td>
        // <td >
        // <img src="../images/'.$image.'" width= 200 srcset="">
        // </td>

        // <td ><button><a href="delete.php?deleteid='.$id.'&image=' . $image .'">Deleted</a></td></button>
        // <td ><button><a href = "updated.php?updatedid='.$id.'">update</a></td></button>
        // </tr>

        // ';
        // }}
        ?>



</table> -->

  <script src="https://kit.fontawesome.com/f5a62c1078.js" crossorigin="anonymous"></script>

  <script src="./js/main.js"></script>

</body>

</html>