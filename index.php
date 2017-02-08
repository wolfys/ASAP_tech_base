<html>
<head>
 <meta charset="utf-8">
<title>Система Учёта Техники в КЦ Владимир</title>
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
<div align="center"><img src="img/logo.jpg" alt="asap logo">
<br>
<?php include "include/main.php"; ?>
Добро пожаловать в систему Учёта Техники в Контакт - Цетре ( г. Владимир ) компании ASAP<br>
Выберите нужный раздел :<br>
<div class="dropdown-button">
    <button class="button primary dropdown-toggle">Статистика Техники</button>
    <ul class="split-content d-menu" data-role="dropdown">
        <li><a href="#">Все виды</a></li>
        <li><a href="#">Персональные Компьютеры</a></li>
        <li><a href="#">Неттопы</a></li>
        <li><a href="#">Мониторы</a></li>
        <li><a href="#">Клавиатуры</a></li>
        <li><a href="#">Мыши</a></li>
        <li><a href="#">Наушники/Акустика</a></li>
        <li><a href="#">Принтеры</a></li>
        <li><a href="#">Телефоны</a></li>
        <li><a href="#">Свитч/Хаб</a></li>
        <li><a href="#">Проекторы</a></li>
        <li><a href="#">ИБП</a></li>
        <li><a href="#">Прочие</a></li>
    </ul>
</div>
<a href="pc-insert.php"><button class="image-button primary">Добавление техники в БД<span class="icon mif-keyboard-return"></span></button></a>
<a href="pc-upload.php"><button class="image-button primary">Добавление нового вида техники<span class="icon mif-file-upload"></span></button></a>
<a href="pc-add.php"><button class="image-button primary">Добавление нового ПК в БД<span class="icon mif-display"></span></button></a><br>
<a href="print.php"><button class="image-button success">Печать этикеток<span class="icon mif-printer"></span></button>
<a href=""><button class="image-button warning">Перенос техники<span class="icon mif-redo"></span></button></a>
<a href=""><button class="image-button danger">Удаление техники из БД<span class="icon mif-blocked"></span></button></a>
<br><br><br>
@ Платонов Илья Владимирович. <?php echo $version; ?>
</div>
</body>
</html>
