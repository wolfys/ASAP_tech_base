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
<?php include "include/main.php"; ?>
<div align="center"><img src="img/logo.jpg" alt="asap logo">
<br>
Данная страница используется для добавления <b>нового</b> ПК в Базу Данных КЦ
<br><br>    
<form action="pc-complete.php" method="post">
<input type="hidden" name="id" value="3">
1. Выберите отдел к которому относится данный ПК:<b class="fg-red">*</b><br>
<?php echo pc_add_main(); ?>
2. Введите индефикатор данного ПК:<b class="fg-red">*</b><br>
<div class="input-control text" style="width: 375px">
    <input type="text" name="indificator">
</div><br>
3. Выберите тип ПК:<b class="fg-red">*</b><br>
<div class="input-control select" style="width: 375px">
    <select name="tech">
        <option value="1">Персональный Компьютер</option>
        <option value="2">Неттоп</option>
    </select>
</div><br>
5. Введите пароль:<b class="fg-red">*</b><br>
<div class="input-control password" style="width: 375px">
    <input type="password" name="pass">
</div><br>
<button class="image-button primary">Отправить данные в БД<span class="icon mif-keyboard-return"></span></button>
</form>
<a href='pc.php'><button class='button primary'>Вернуться на главную страницу</button></a>
<br><br><br>
@ Платонов Илья Владимирович. <?php echo $version; ?>
</div>
</body>
</html>
