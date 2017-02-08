<?php
	include "config.php";
	$version = "Version 0.1 - 07.02.2017";

	function pc_upload_Insert_dop()
	{
		$tech = $_POST["tech"];
		$firmas = $_POST["firma"];
		$models = $_POST["model"];
		$dops = $_POST["dop"];
		$sql = mysql_query("INSERT INTO `techlist`(`cat_id`, `firma_name`, `model_name`, `dop_opisanie`) VALUES ('$tech','$firmas','$models','$dops')") or die("Invalid query: " . mysql_error());
		echo '<div align="center">Запись успешно добавлена в базу данных!<br><span class="mif-thumbs-up mif-4x fg-green"></span><br>
		<a href="pc-upload.php"><button class="button primary">Добавить еще запись</button></a><br>
		<a href="pc.php"><button class="button primary">Вернуться на главную страницу</button></a></div>';
	};
	function pc_upload_insert()
	{
		$tech = $_POST["tech"];
		$firmas = $_POST["firma"];
		$models = $_POST["model"];
		$sql = mysql_query("INSERT INTO `techlist`(`cat_id`, `firma_name`, `model_name`) VALUES ('$tech','$firmas','$models')") or die("Invalid query: " . mysql_error());
		echo '<div align="center">Запись успешно добавлена в базу данных!<br><span class="mif-thumbs-up mif-4x fg-green"></span><br>
		<a href="pc-upload.php"><button class="button primary">Добавить еще запись</button></a><br>
		<a href="pc.php"><button class="button primary">Вернуться на главную страницу</button></a></div>';
	}
	function categories_id()
	{
		$catid = $_GET["tip"];
		$sql = mysql_query("SELECT Name FROM categories WHERE id = $catid") or die ("Invalid query: " .mysql_error());
		echo mysql_result($sql, 0);
	}
	function pc_add_upload()
	{
		$indificator = $_POST["indificator"];
		$tech = $_POST["tech"];
		$otdels = $_POST["otdels"];
		$sql = mysql_query("INSERT INTO `pclist`(`name`,`cat_id`,`otdel_id`) VALUES ('$indificator','$tech','$otdels')") or die ("Invalid query: " . mysql_error());
		echo '<div align="center">Запись успешно добавлена в базу данных!<br><span class="mif-thumbs-up mif-4x fg-green"></span><br>
		<a href="pc-add.php"><button class="button primary">Добавить еще запись</button></a><br>
		<a href="pc.php"><button class="button primary">Вернуться на главную страницу</button></a></div>';
	}
	function pc_add_insert()
	{
		echo 'id = '. $_POST["id"] .'<br>';
		echo 'tip = '. $_POST["tip"] .'<br>';
		echo 'model = '. $_POST["model"] .'<br>';
		echo 'pc = '. $_POST["pc"] .'<br>';
		echo 'vote = '. $_POST["vote"] .'<br>';
		echo 'dop = '. $_POST["dop"] .'<br>';
		echo 'status = '. $_POST["status"] .'<br>';
		$sql = mysql_query("INSERT INTO ")

	}	
?>


