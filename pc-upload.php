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
Данная страница используется для добавления <b>нового</b> вида техники в Базу Данных КЦ
<br><br>    
<form action="pc-complete.php" method="post">
<input type="hidden" name="id" value="1">
1. Выберите категорию в которую следует добавить новый вид техники:<b class="fg-red">*</b><br> 
<div class="input-control select" style="width: 375px">
    <select name="tech">
        <option value="1">Персональный Компьютер</option>
        <option value="2">Неттоп</option>
        <option value="3">Монитор</option>
        <option value="4">Клавиатура</option>
        <option value="5">Мышь</option>
        <option value="6">Наушники/Акустика</option>
        <option value="7">Принтер</option>
        <option value="8">Телефон</option>
        <option value="9">Свитч/Хаб</option>
        <option value="10">Проектор</option>
        <option value="11">ИБП</option>
        <option value="12">Прочие</option>
    </select>
</div><br>
2. Введите фирму производителя техники: (макс. 255 символов)<b class="fg-red">*</b><br>
<div class="input-control text" style="width: 375px">
    <input type="text" name="firma">
</div><br>
3. Введите модель техники (макс. 255 символов):<b class="fg-red">*</b><br>
<div class="input-control text" style="width: 375px">
    <input type="text" name="model">
</div><br>
4. Введите дополнительное описание техники (к примеру, характеристики) (макс. 255 символов):<br>
<div class="input-control textarea" style="width: 375px; height: 125px">
    <textarea name="dop"></textarea>
</div><br>
5. Введите пароль:<b class="fg-red">*</b><br>
<div class="input-control password" style="width: 375px">
    <input type="password" name="pass">
</div><br>
<button class="image-button primary">Отправить данные в БД<span class="icon mif-keyboard-return"></span></button>
</form>
<a href='index.php'><button class='button primary'>Вернуться на главную страницу</button></a>
<br><br><br>
@ Платонов Илья Владимирович. <?php echo $version; ?>
</div>
</body>
</html>
