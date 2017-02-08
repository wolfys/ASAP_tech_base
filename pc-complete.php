<html>
<head>
 <meta charset="utf-8">
<title>Выполнение задачи</title>
    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">
    <link href="css/metro-schemes.css" rel="stylesheet">

    <link href="css/docs.css" rel="stylesheet">

    <script src="js/jquery-2.1.3.min.js"></script>
    <!--<script src="js/jquery-3.1.0.min.js"></script>-->
    <script src="js/metro.js"></script>
    <script src="js/docs.js"></script>
    <script src="js/ga.js"></script>
</head>
<body>
<div align='center'><img src='img/logo.jpg' alt='asap logo'></div>
<?php
include "include/main.php";
if ($_POST["pass"] == "261088") {
    if ($_POST["id"] == "1") {
        echo pc_upload();
    }

     if ($_POST["id"] == "2") {
         echo pc_add_insert();
     }
     if ($_POST["id"] == "3"){
        echo pc_add_main_upload();
     }
} else  {
   echo "<div align ='center'><br>Не правильный пароль!<br><br>
<a href='index.php'><button class='button primary'>Вернуться на главную страницу</button></a></div>";
} 
?>
<div align="center">
<br><br><br>
@ Платонов Илья Владимирович. <?php echo $version; ?>
</div><br>
</body>
</html>
