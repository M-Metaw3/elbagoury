<?php

include('dashboard/config.php');


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./imgages/favicon.svg" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/mobile.css" />

    <title>الباجوري-الصفحة الرئيسية</title>
  </head>
  <body id="home" onload="onHomePageLoad()">
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
          <!-- <li><a class="nav-link" href="./dashboard/index.php">المسؤل</a></li> -->
        </ul>
      </nav>
    </header>

    <section class="background">
      <img src="./imgages/background.png" alt="" />

      <div class="absolute">
        <h1>
          التميز <br />
          والخبرة <br />والنزاهة
        </h1>
        <a href="./contact.php">
          <button class="btn">إستشرنا</button>
        </a>
      </div>
    </section>

    <section class="bg-primary py-2">
      <div class="container">
        <div class="rectangle-section left-rectangle">
          <div class="content">
            <h2>نقدم لك جميع الخدمات والاستشارات القانونية</h2>
            <p>
              إذا كنت بحاجة إلى محام ، فيمكننا مساعدتك. لقد ساعدنا مئات الأشخاص
              في الماضي ، وسنفعل الشيء نفسه من أجلك.
            </p>
          </div>
     
          <div class="rectangle-section-img">
            <div class="row">
              <div class="top col"></div>
            </div>
            <div class="mid row">
              <div class="col col-r">
                <img src="./imgages/5.svg" alt="" width="100%" />
              </div>
            </div>
            <div class="row">
              <div class="bottom col"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--experience  -->
    <section class="experience bg-primary py">
      <div class="container">
        <h2 class="text-center">خبراتنا</h2>
        <div class="experience-cards">
          <div class="experience-card" onclick="openModal('civilLawModal')">
            <img src="./imgages/civil.svg" alt="" />
            <p>القانون المدني والتجاري</p>
          </div>
           <!-- The Modal -->
           <div id="civilLawModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">القانون المدني والتجاري</h5>
                <span class="close" onclick="closeModal('civilLawModal')"
                  >&times;</span
                >
              </div>
              <div class="modal-body">
                <ul>
                  <li>
                    قضايا الفسخ والإلزام، والحجز على ما للمدين لدى الغير.
                  </li>
                  <li>
                    قضايا الإيجارات في ضوء القانون المدني، وقانون إيجار
                    الأماكن (القانون القديم).
                  </li>
                  <li>
                    قضايا التعويضات بكافة أنواعها بما فيها التعويض الناجم عن
                    عدم الإلتزام، أوالتأخر في تنفيذ الإلتزام، وكذلك التعويض عن
                    الأخطاء المهنية، أوالإهمال المهني ومنها الإهمال الطبي،
                    والحوادث.
                  </li>
                  <li>قضايا الإثراء بلا سبب.</li>
                  <li>
                    قضايا التعويض عن جميع الجرائم الإلكترونية كالإختراق، وسرقة
                    المعلومات، والتنصت، واستراق السمع، والبصر، والسب، والقذف،
                    والبلاغ الكاذب، والتشهير، والتهديد، و الإبتزاز باستخدام
                    كافة وسائل التواصل الإجتماعي والتقني.
                  </li>
                  <li>
                    قضايا الطرد للغصب، والمطالبة بالريع عن فترة الغصب،
                    والإستغلال.
                  </li>
                  <li>
                    قضايا الفرز، والتجنيب لجميع الأموال المشتركة سواء ثروة
                    عقارية، أو معدات، أو أموال سائلة، أو شركات ... إلخ.
                  </li>
                  <li>
                    نقل ملكية جميع الأصول العقارية، والأراضي أمام مصلحة الشهر
                    العقاري.
                  </li>
                  <li>
                    دعاوى صحة التعاقد، وصحة التوقيع، وصحة ونفاذ العقود الغير
                    مسجلة.
                  </li>
                  <li>
                    قضايا الصورية، والغبن، وإبطال بنود الإذعان في العقود.
                  </li>
                  <li>قرارات التمكين، والحيازة، والطعن عليها.</li>
                </ul>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn"
                  class="close"
                  onclick="closeModal('civilLawModal')"
                >
                  إغلاق
                </button>
              </div>
            </div>
          </div>
          <div class="experience-card" onclick="openModal('corporateLawModal')">
            <img src="./imgages/company.svg" alt="" />
            <p>تأسيس الشركات</p>
          </div>
            <!-- The Modal -->
          <div id="corporateLawModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">تأسيس الشركات</h5>
                <span class="close" onclick="closeModal('corporateLawModal')"
                  >&times;</span
                >
              </div>
              <div class="modal-body">
                <ul>
                  <li>اختيار أفضل شكل قانوني للمستثمر.</li>
                  <li>كتابة عقد الشركة حتى إتمام إجراءات التسجيل.</li>
                  <li>
                    تأسيس جميع أنواع الشركات (شركات أموال، شركات أشخاص).
                  </li>
                  <li>
                    القيام بكافة الإجراءات وإيداع الأوراق لدى هيئة الاستثمار.
                  </li>
                  <li>استخراج السجل التجاري، وتسجيل العلامات التجارية.</li>
                  <li>تأسيس فروع الشركات الأجنبية بمصر.</li>
                  <li>تسجيل مكاتب التمثيل بمصر.</li>
                  <li>
                    اعتماد محاضر اجتماعات مجالس الإدارة والجمعيات العامة
                    العادية والغير عادية.
                  </li>
                  <li>فسخ كافة أنواع الشركات وتصفيتها.</li>
                  <li>
                    تسجيل شركات المقاولات في سجل مقاولي التشييد والبناء
                    ومقاولي القطاع الخاص.
                  </li>
                  <li>
                    استخراج رخص التشغيل والسجل الصناعي وتحديد بداية النشاط.
                  </li>
                  <li>
                    استخراج سجل المستوردين وسجل المصدرين وسجل الوكلاء
                    التجاريين.
                  </li>
                  <li>تمثيل الشركات أمام كافة الجهات الحكومية وغيرها.</li>
                  <li>
                    القيام بكافة أنواع تصاريح العمل والإقامات للسادة
                    المستثمرين العرب والأجانب.
                  </li>
                  <li>
                    السير في إجراءات البيع أو التنازل عن الأسهم في الشركات
                    المساهمة.
                  </li>
                  <li>
                    تقديم المشورة القانونية والفنية للموكل عن الشكل القانوني
                    المقترح أو القانون الذي ستنشأ تحت مظلته الشركة، تسجيل
                    العلامات التجارية للشركة (علامة تجارية مسجلة، براءات
                    الاختراع، كافة حقوق الملكية الفكرية).
                  </li>
                </ul>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn"
                  class="close"
                  onclick="closeModal('corporateLawModal')"
                >
                  إغلاق
                </button>
              </div>
            </div>
          </div>
          <div class="experience-card" onclick="openModal('familyLawModal')">
            <img src="./imgages/people.svg" alt="" />
            <p>قانون وقضايا الأسرة</p>
          </div>
           <!-- The Modal -->
           <div id="familyLawModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">قانون وقضايا الأسرة</h5>
                <span class="close" onclick="closeModal('familyLawModal')"
                  >&times;</span
                >
              </div>
              <div class="modal-body">
                <ul>
                  <li>
                    قضايا الأحوال الشخصية، الزواج والطلاق والنفقة وما يترتب
                    عليهم من آثار.
                  </li>
                  <li>قضايا الخلع والطاعة وما يتعلق بهما.</li>
                  <li>معالجة جميع القضايا الحساسة وحل الخلافات الزوجية.</li>
                  <li>
                    تنفيذات الأحوال الشخصية وقضايا المواريث والوصايا و إدارة
                    التركات و الهبة.
                  </li>
                </ul>
                <br />
                <strong>
                  ونظراً لما في قضايا الأحوال الشخصية والأسرة من احتمالات
                  مأساوية لذلك أسعى دائماً لجعل الإجراءات القانونية واضحة
                  وسلسة لموكليني بقدر الإمكان وأقوم بتمثيلهم أمام جميع مراحل
                  التقاضي بداية واستئناف وتمييز وأمام كافة المحاكم العاملة
                  بالدولة، كما أبذل لهم النصح ومحاولة حل الخلافات قدر الإمكان.
                </strong>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn"
                  class="close"
                  onclick="closeModal('familyLawModal')"
                >
                  إغلاق
                </button>
              </div>
            </div>
          </div>
          <div class="experience-card" onclick="openModal('stateLawModal')">
            <img src="./imgages/government.svg" alt="" />
            <p>القضاء الإداري</p>
          </div>
          <!-- The Modal -->
          <div id="stateLawModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">القضاء الإداري (مجلس الدولة)</h5>
                <span class="close" onclick="closeModal('stateLawModal')"
                  >&times;</span
                >
              </div>
              <div class="modal-body">
                <ul>
                  <li>
                    دعاوى الإلغاء بكافة أنواعها اللتي من ضمنها القرارات
                    السلبية.
                  </li>
                  <li>دعاوى وقف التنفيذ بكافة أنواعها.</li>
                  <li>
                    دعاوى براءة ذمة الممول من كافة ديون الضرائب العامة والقيمة
                    المضافة والدمغة وكسب العمل.
                  </li>
                  <li>
                    دعاوى استرداد الرسوم الجمركية المدفوعة بالمخالفة للقانون
                    بكافة أنواعها.
                  </li>
                  <strong> الهدم والبناء والتراخيص </strong>
                  <li>دعاوى إلغاء قرار برفض ترخيص منشأة صناعية.</li>
                  <li>
                    دعاوى إلغاء قرار برفض ترخيص وحيازة سلاح ناري مع توافر
                    الشروط القانونية المقررة من قبل وزارة الداخلية.
                  </li>
                  <li>دعاوى إلغاء قرار برفض منح ترخيص بناء.</li>
                  <li>دعاوى إلغاء قرار برفض منح ترخيص هدم.</li>
                  <li>دعاوى إلغاء قرار هدم صادر من الحكم المحلي.</li>
                  <li>
                    دعاوى التعويض المكمل بشأن قرارات الاستيلاء على الأراضي
                    والمنازل من أجل الانتفاع العام.
                  </li>
                </ul>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn"
                  class="close"
                  onclick="closeModal('stateLawModal')"
                >
                  إغلاق
                </button>
              </div>
            </div>
          </div>
          <div class="experience-card" onclick="openModal('workLawModal')">
            <img src="./imgages/workers.svg" alt="" />
            <p>
              قانون العمل والقضايا العمالية
            </p>        
          </div>
          <!-- The Modal -->
          <div id="workLawModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">قانون العمل والقضايا العمالية</h5>
                <span class="close" onclick="closeModal('workLawModal')"
                  >&times;</span
                >
              </div>
              <div class="modal-body">
                <strong>
                  لدي خبرة واسعة في مجال إدارة قضايا العمل والعمال و أكرس نفسي
                  لمساعدة موكليني وتزويدهم بالاستشارات القانونية اللازمة ووضع
                  الحلول الاستباقية لحل الخلافات التي تنشأ عن علاقة العمل قبل
                  اللجوء إلى المحاكم.
                </strong>
                <ul>
                  <li>
                    تقديم كافة الاستشارات القانونية والخاصة فيما يتعلق بقانون
                    العمل.
                  </li>
                  <li>التعامل مع عملية التفاوض وصياغة وإنهاء عقود العمل.</li>
                  <li>
                    تمثيل موكليني أمام المحاكم العمالية على اختلاف أنواعها
                    ودرجاتها.
                  </li>
                  <li>
                    تحديد حقوق العاملين لدى جميع موكليني من شركات ومؤسسات.
                  </li>
                </ul>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn"
                  class="close"
                  onclick="closeModal('workLawModal')"
                >
                  إغلاق
                </button>
              </div>
            </div>
          </div>
          <div class="experience-card" onclick="openModal('criminalLawModal')">
            <img src="./imgages/crimnal.svg" alt="" />
            <p>القانون الجنائي</p>
          </div>
          <!-- The Modal -->
          <div id="criminalLawModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">القانون الجنائي</h5>
                <span class="close" onclick="closeModal('criminalLawModal')"
                  >&times;</span
                >
              </div>
              <div class="modal-body">
                <ul>
                  <li>
                    جميع قضايا حقوق المرأة والطفل، وما يقع عليها من اعتداءات
                    بدنية ونفسية وجنسية (تحرش، وإغتصاب).
                  </li>
                  <li>
                    جميع القضايا الجنائية بمختلف أشكالها مثل ( القتل، الشروع
                    في القتل، العاهة المستديمة).
                  </li>
                  <li>
                    قضايا المخدرات ( التعاطي، الإتجار، الجلب ) بكافة أنواعها.
                  </li>
                  <li>
                    قضايا إحراز الأسلحة النارية والبيضاء، وتصنيعها بدون ترخيص.
                  </li>
                  <li>
                    قضايا البناء بدون ترخيص، والتعدي على الأراضي الزراعية
                    بمختلف أنواعها.
                  </li>
                  <li>قضايا التزييف والتزوير والاختلاس والأموال العامة.</li>
                  <li>قضايا الرشوة والتربح والإستيلاء على المال العام.</li>
                  <li>قضايا توظيف الأموال بكافة أنواعها.</li>
                  <li>قضايا التسويق الشبكي والفوركس والتلاعب في البورصة.</li>
                  <li>قضايا الشيكات والتبديد وكافة السندات المالية.</li>
                </ul>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn"
                  class="close"
                  onclick="closeModal('criminalLawModal')"
                >
                  إغلاق
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-primary py">
      <div class="container">
        <div class="rectangle-section right-rectangle">
          <div class="rectangle-section-img">
            <div class="row">
              <div class="top col"></div>
            </div>
            <div class="mid row">
              <div class="col col-l">
                <img src="./imgages/سبب تميزنا.png" width="100%" alt="" />
              </div>
            </div>
            <div class="row">
              <div class="bottom col"></div>
            </div>
          </div>
          <div class="content">
            <h2>سبب تميزنا؟</h2>
            <p>
              مؤسسة الباجوري للمحاماة أُسست عام 1920 على يد الدكتور حسنين
              الباجوري وأستمر عملها القانوني حتى الأن, في هذه الفترة عملت
              المؤسسة على العديد من القضايا والأمور القانونية مع العديد من
              الشركاء كان نتيجتها ثقة الموكلين في هذه المؤسسة العريقة.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- slider -->
    <section class="bg-primary py">
      <h2 class="text-center">شركاء النجاح</h2>
      <div class="brand-carousel section-padding owl-carousel">
        <div class="single-logo">
          <!-- <img alt="" src="./imgages/logo-light.png" /> -->
          <p>IRIS-Studio</p>
        </div>
        <div class="single-logo">
          <p>Innovation House</p>
        </div>
        <div class="single-logo">
          <p>Sokhna Sea ST</p>
          <!-- <img alt="" src="./imgages/logo-light.png" /> -->
        </div>
        <div class="single-logo">
          <!-- <img alt="" src="./imgages/logo-light.png" /> -->
          <p>Adala</p>
        </div>
        <div class="single-logo">
          <!-- <img alt="" src="./imgages/logo-light.png" /> -->
          <p>Y&M for contracting & supplies</p>
        </div>
      </div>
    </section>

    <section class="bg-primary">
    <h2 class="text-center py">أخر أخبار المؤسسة</h2>
      <div class="news container">
        <div class="slider">
        <?php

$sqlget = "SELECT * FROM `news`  ORDER BY created_at DESC  LIMIT 2 ";
$resultget = mysqli_query($conn, $sqlget);
if ($resultget) {

  while ($row = mysqli_fetch_array($resultget)) {
?>

      <?php

      $sqlget = "SELECT * FROM `news`  ORDER BY created_at DESC LIMIT 5";
      $resultget = mysqli_query($conn, $sqlget);
      if ($resultget) {

        while ($row = mysqli_fetch_array($resultget)) {
      ?>


  <?php

          $id = $row['id'];
          $news = $row['news'];
          $header = $row['header'];
          $created_at = $row['created_at'];
          $image = $row['image'];
          $bref = $row['bref'];


          echo '
          <div class="news-slides">
            <div class="rectangle-section left-rectangle">
              <div class="content">
                <h2>' . $header . '</h2>
                <p>' . $bref . '</p>
                <a href="#">
                  <button class="btn"><a href = "Details.php?updatedid=' . $id . '" >اقراء المزيد ....</a></button>
                </a>
              </div>
              <div class="rectangle-section-img">
                <div class="row">
                  <div class="top col"></div>
                </div>
                <div class="mid row">
                  <div class="col col-r">
                    <img
                    src="./images/' . $image . '"
                    width="100%"
                    alt=""
                    />
                  </div>
                </div>
                <div class="row">
                  <div class="bottom col"></div>
                </div>
              </div>
            </div>
          </div>
';
}
}
}
}

// mysqli_free($resultget);
mysqli_close($conn);
?>
     
      </div>

      <div class="text-center py-2">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span> 
        <span class="dot" onclick="currentSlide(4)"></span> 
        <span class="dot" onclick="currentSlide(5)"></span> 
      </div>
    </section>

    <!-- top btn -->
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
      $(".brand-carousel").owlCarousel({
        loop: true,
        margin: 40,
        dots: false,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        items: 5,
        responsive: {
          0:{
            items: 1,
          },

          600: {
            items: 2,
          },

          1024: {
            items: 3,
          },
        },
      });
    </script>
    <script
      src="https://kit.fontawesome.com/f5a62c1078.js"
      crossorigin="anonymous"
    ></script>
    <script src="./js/main.js"></script>
  </body>
</html>
