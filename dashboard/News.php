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
    <title>Document</title>
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
            <a href="addNews.php">إضافة خبر</a>
            <a href="messages.php">الرسائل</a>
            <a href="News.php">الاخبار</a>
            <a href="logout.php">تسجيل خروج</a>
        </div>

        <div class="content hscroll">
            <table>
                <tr>
                    <th>الرقم التعريفي</th>
                    <th>العنوان</th>
                    <th>الخبر</th>
                    <th>الاختصار</th>


                    <th> تاريخ الخبر</th>
                    <th>صورة الخبر</th>
                    <th>تعديل</th>
                    <th>حذف</th>

                </tr>
                <?php
                include('config.php');

                $sqlget = "SELECT * FROM `news`  ORDER BY created_at DESC  ";
                $resultget = mysqli_query($conn, $sqlget);
                if ($resultget) {

                    while ($row = mysqli_fetch_array($resultget)) {
                ?>


                <?php

                        $id = $row['id'];
                        $header = $row['header'];
                        $news = $row['news'];
                        $created_at = $row['created_at'];
                        $image = $row['image'];
                        $bref = $row['bref'];

                        



                        echo '



<tr >
<td " >' . $id . '</td>
<td >' . $header . '</td>
<td >' . $news . '</td>
<td >' . $bref . '</td>

<td >' . $created_at . '</td>
<td >
    <img src="../images/' . $image . '" width= 100 srcset="">
</td>
<td ><a href = "updated.php?updatedid=' . $id . '"><i class="fa-solid fa-pen"></i></a></td>
<td ><a href="delete.php?deleteid=' . $id . '&image=' . $image . '"><i class="fa-solid fa-trash"></i></a></td>
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