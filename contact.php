<?php

if (isset($_POST['addcontact'])){
    
    $name = $_POST['name'];
    $phone =  $_POST['phone'];
    $subject = $_POST['subject'];
    $message= $_POST['message'];
    
    if(!$name && !$email && !$mesage && !$subject){
        echo " من فضللك ادخل بيانات رسالتك";
    }
    else{
    include('./dashboard/config.php');
$sql ="INSERT INTO `contact` ( `phone`, `subject`,`name`,`message`) VALUES (  '$phone','$subject','$name','$message');";
$result = mysqli_query($conn,$sql);
if($result){
  $x =  "تم استلام رسالتك بنجاح سيتم التواصل معك ";
  showSuccses();
}else{
    $y=  "برجاء اعد المحاولة";

}
}

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/mobile.css" />
    <link rel="icon" type="image/x-icon" href="./imgages/favicon.svg">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
    <title>مؤسسة الباجوري للمحاماة</title>
  </head>
  <body>
    <header id="navbar">
      <nav>
        <button class="hamburger">
          <i class="fa-solid fa-bars"></i>
        </button>
        <div class="logo">
          <a href="index.html" onclick="{clickHandle}"
            ><img src="./imgages/logo.svg" alt="logo"
          /></a>
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

    <section class="text-center bg-primary">
      <div class="container contact py">
        <h2 class="">تواصل معنا</h2>
        <div class="contact-info">
          <div class="info">
            <div id="mobile">
              <!-- <h3>ارقام التواصل</h3> -->
              <i class="fa-solid fa-phone"></i>
              <ul>
                <li>
                  (+20) 011-1279-2102
                </li>
                <li>
                  (+20) 012-8266-7559
                </li>
              </ul>
            </div>
            <div id="address">
              <!-- <h3>فروعنا</h3> -->
              <i class="fa-solid fa-location-dot"></i>
              <ul>
                <li>
                  <!-- <i class="fa-solid fa-location-dot"></i> -->
                  31 الحايس - الساحل - القاهرة
                </li>
                <li>
                  <!-- <i class="fa-solid fa-location-dot"></i> -->
                  41 الخليفة المأمون - شبرا الخيمة، القليوبية
                </li>
                <li>
                  <!-- <i class="fa-solid fa-location-dot"></i> -->
                  28 مراد - الدقي، الجيزة</li>
              </ul>
            </div>
          </div>
          <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d431.51496842891487!2d31.243661800429518!3d30.0907566560264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458406ba72f4d55%3A0xeceed37bfee5a128!2zMzEg2KfZhNit2KfZitiz2Iwg2KPYs9i52K_YjCDZgtiz2YUg2KfZhNiz2KfYrdmE2Iwg2YXYrdin2YHYuNipINin2YTZgtin2YfYsdip4oCsIDQzNTExMTU!5e0!3m2!1sar!2seg!4v1680433957777!5m2!1sar!2seg" 
            style="border:0;"
            allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
          </div>
        </div>
        <div class="contact-us py">
          <form method='post'>
            <div class="form-group">
              <input required  type="text" name="name" placeholder="الأسم" />
              <input required type="tel" name="phone" placeholder="موبايل" />
            </div>
            <div>
              <input required type="text" name="subject" placeholder="الموضوع" />
            </div>
            <div>
              <textarea
                name="message"
                placeholder="رسالتك..."
                cols="10"
                rows="6"
                required
              ></textarea>
            </div>
            <div class="btn-submit">
              <button class="btn" name="addcontact" type="submit">أرسل</button>
            </div>
          </form>
        </div>
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
              <li class="bold">المؤسسة</li>
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
    
    <script>
      function showSuccses(){
        swal({  
          text: "تم استلام رسالتك بنجاح سيتم التواصل معك ",  
          icon: "success",  
          buttons: false,
          timer: 3000
        });  
      }
      </script>

    <script
      src="https://kit.fontawesome.com/f5a62c1078.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
