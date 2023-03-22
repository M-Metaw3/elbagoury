<?php
include('config.php');
session_start();

if (!$_SESSION) {
    header('location:index.php');
} else {
    $id = $_GET['updatedid'];
    $sqlget = "SELECT * FROM `news` WHERE id=$id";
    $resulta = mysqli_query($conn, $sqlget);
    if ($resulta) {
        $rowa = mysqli_fetch_array($resulta);
        $newsa = $rowa['news'];
        $headera = $rowa['header'];
        $image = $rowa['image'];
    } else {
        die(mysqli_error($conn));
    }

    if (isset($_POST['update'])) {

        $image_file = $_FILES["img"];
        $image_name = $image_file['name'];
        echo $image_name;
        $header = $_POST['fname'];
        $news = $_POST['news'];
        $sql = "UPDATE `news` SET `header`='.$header.',`news`='.$news.',`image`='.$image_name.' WHERE id=$id";

        $resultaaa = mysqli_query($conn, $sql);
        if ($resultaaa) {
            move_uploaded_file(

                $image_file["tmp_name"],


                "../images/" . $image_file["name"]
            );
            echo 'jjjjjjjjjjj';
            unlink("../images/" . $image);

            header('location:addNews.php');
            //    mysqli_free($resultaaa);

        } else {
            die(mysqli_error($conn));
        }
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>update</title>
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
                <span id="selectNews">
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
            <form method="post" enctype="multipart/form-data" class="add-news">

                <!-- <label for="fname">العنوان</label><br> -->
                <input value=<?php echo $headera ?> type="text" id="fname" name="fname"><br>
                <!-- <label for="lname">الخبر</label><br> -->
                <textarea name="news" id="" cols="20" rows="6"><?php echo $newsa ?></textarea>
                <?php echo '<img src="../images/' . $image . '" width= 200 srcset="">' ?><br>

                <label for="img" class="file-input">
                    تعديل الصورة
                    <i class="fa-solid fa-camera"></i>
                    <input type="file" id="img" name="img">
                    <span id="imageName"></span>
                </label>
                <button type="submit" name='update' class="btn-add">تعديل</button>




            </form>
        </div>


    </div>
    <script src="https://kit.fontawesome.com/f5a62c1078.js" crossorigin="anonymous"></script>

<script src="./js/main.js"></script>
</body>

</html>