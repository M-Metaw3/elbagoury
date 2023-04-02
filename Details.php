<?php

include('dashboard/config.php');


// echo "welcom  " . $_SESSION['email'];
// $adminName= $_SESSION['email'];
if (isset($_GET['updatedid'])) {
  $id = $_GET['updatedid'];



  // $sql = "INSERT INTO `news` ( `header`, `news`) VALUES ( '$header', '$news');";
  $sql = "SELECT * FROM `news` WHERE  id=$id";


  $result = mysqli_query($conn, $sql);

  if ($result) {
    while ($row = mysqli_fetch_array($result)) {
      $news = $row['news'];
      $header = $row['header'];
      $createdat = $row['created_at'];
      $image = $row['image'];
      $bref = $row['bref'];;
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
  <link rel="icon" type="image/x-icon" href="./imgages/favicon.svg">
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/mobile.css" />
  <title>مؤسسة الباجوري للمحاماة</title>
</head>

<body>
  <header id="navbar">
    <nav>
      <button class="hamburger">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="logo">
        <a href="index.html" onclick="{clickHandle}"><img src="./imgages/logo.svg" alt="logo" /></a>
      </div>
      <ul class="nav-menu">
        <li><a class="nav-link" href="index.php">الرئيسية</a></li>
        <li><a class="nav-link" href="about.html">عنا</a></li>
        <li><a class="nav-link" href="lawyers.html">محامونا</a></li>
        <li><a class="nav-link" href="news.php">الأخبار</a></li>
        <li><a class="nav-link" href="contact.php">تواصل معنا</a></li>
      </ul>
    </nav>

  </header>

  <section class="bg-primary py pb-3">
    <div class="container">

      <?php
      if (isset($result)) {
      ?>
      <?php
        echo '

    <div class="news">
      <div class="rectangle-section left-rectangle">
        <div class="content">
          <h6>' . $createdat . '</h6>
          <h2 >' . $header . '</h2>
          <p>
          ' . $news . '
          </p>


        </div>
        <div class="rectangle-section-img">
        <div class="row">
          <div class="top col"></div>
        </div>
        <div class="mid row">
          <div class="col col-r">
          <img  src="./images/' . $image . '" width="100%" alt="" />
          </div>
        </div>
        <div class="row">
          <div class="bottom col"></div>
        </div>
      </div>
    </div>


    ';
      }
      ?>
    </div>
  </section>
  <button onclick="topFunction()" id="topBtn" title="Go to top ">
    <i class="fa-sharp fa-solid fa-chevron-up"></i>
  </button>
  <footer>
    <section class="container">
      <div class="footer">
        <div class="footer-right titles">
          <ul class="page-titles">
            <li class=" bold">المؤسسة</li>
            <li><a href="index.php">الرئيسية</a></li>
            <li><a href="lawyers.html">محامونا</a></li>
            <li><a href="about.html">عنا</a></li>
            <li><a href="news.html">الأخبار</a></li>
            <li><a href="contact.html">تواصل معنا</a></li>
          </ul>
        </div>
        <div class="footer-left">
          <div class="logo">
            <a href="#home"><img src="./imgages/logo.svg" alt="logo" /></a>
          </div>
          <div class="sociallogos text-center">
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
          </div>
        </div>
      </div>
    </section>

    <section id="Copyright" class="text-center">
      <p>&copy; All Rights Reserved, ALBAGORY ORGANIZATION</p>
      <p>
        Developed By:
        <a href="https://irisstudio.org/" target="_blank">IRIS Studio</a>
      </p>
    </section>
  </footer>

  <script src="https://kit.fontawesome.com/f5a62c1078.js" crossorigin="anonymous"></script>

  <script src="./js/main.js"></script>
</body>

</html>