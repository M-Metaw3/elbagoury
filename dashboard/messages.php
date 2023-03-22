<?php
session_start();
if (!$_SESSION) {
    header('location:index.php');
} else {

    include('config.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>messages</title>
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
                <span>
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

            <table>
                <tr>
                    <th>الرقم التعريفي</th>
                    <th>الأسم</th>
                    <th>رقم الموبايل</th>
                    <th>الموضوع</th>
                    <th>الرسالة</th>


                    <th>التاريخ</th>

                    <th>حذف</th>


                </tr>
                <?php
                include('config.php');

                // ORDER BY created_at DESC
                $sqlget = "SELECT * FROM `contact`";
                $resultget = mysqli_query($conn, $sqlget);
                if ($resultget) {

                    while ($row = mysqli_fetch_array($resultget)) {
                ?>


                <?php

                        $id = $row['id'];
                        $name = $row['name'];
                        $phone = $row['phone'];
                        $subject = $row['subject'];
                        $message = $row['message'];
                        $send_at = $row['send at'];



                        echo '



<tr >
<td " >' . $id . '</td>
<td >' . $name . '</td>
<td >' . $phone . '</td>
<td >' . $subject . '</td>
<td >' . $message . '</td>
<td >' . $send_at . '</td>

 <td ><a href = "deletedconatctmessage.php?updatedid=' . $id . '"><i class="fa-solid fa-trash"></i></a></td>

</td>

</tr>

';
                    }
                } ?>



            </table>

        </div>


    </div>
    <script src="https://kit.fontawesome.com/f5a62c1078.js" crossorigin="anonymous"></script>

    <script src="./js/main.js"></script>
</body>

</html>