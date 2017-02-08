<html>
<head>
 <meta charset="utf-8">
<title>Система Учёта Техники в КЦ Владимир - Добовление техники в БД</title>
    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">
    <link href="css/metro-schemes.css" rel="stylesheet">

    <link href="css/docs.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <script src="js/jquery-2.1.3.min.js"></script>
    <!--<script src="js/jquery-3.1.0.min.js"></script>-->
    <script src="js/metro.js"></script>
    <script src="js/docs.js"></script>
    <script src="js/ga.js"></script>
</head>
<body>
<div align="center"><img src="img/logo.jpg" alt="asap logo"><br>
<?php include "include/main.php"; ?>
<a href="pc-insert.php?tip=1"><button class="button primary">Персональный компьютер</button></a>
<a href="pc-insert.php?tip=2"><button class="button primary">Неттоп</button></a>
<a href="pc-insert.php?tip=3"><button class="button primary">Монитор</button></a>
<a href="pc-insert.php?tip=4"><button class="button primary">Клавиатура</button></a>
<a href="pc-insert.php?tip=5"><button class="button primary">Мышь</button></a>
<a href="pc-insert.php?tip=6"><button class="button primary">Наушники/Акустика</button></a><br>
<a href="pc-insert.php?tip=7"><button class="button primary">Принтер</button></a>
<a href="pc-insert.php?tip=8"><button class="button primary">Телефон</button></a>
<a href="pc-insert.php?tip=9"><button class="button primary">Свитч/Хаб</button></a>
<a href="pc-insert.php?tip=10"><button class="button primary">Проектор</button></a>
<a href="pc-insert.php?tip=11"><button class="button primary">ИБП</button></a>
<a href="pc-insert.php?tip=12"><button class="button primary">Прочие</button></a><br>
<?php echo pc_insert_main(); ?>
<br><br><br>
@ Платонов Илья Владимирович. <?php echo $version; ?>
</div>
</body>
</html>
