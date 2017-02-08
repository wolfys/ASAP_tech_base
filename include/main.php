<?php
include "global.php";
include "config.php";
function pc_upload ()
	{
		$firma = $_POST["firma"];
		$model = $_POST["model"];
		$dop = $_POST["dop"];
		if ($firma != NULL) {
			if ($model != NULL) {
				if ($dop != NULL) {
					echo pc_upload_Insert_dop();
				} else {
					echo pc_upload_insert();
				}
			} else {
				echo '  <div align="center">
					            <br>Вы забыли указать модель технического устройства <br><b class="fg-red">Данное поле обязательно!</b><br><br>
				                          <a href="pc-upload.php"><button class="button primary">Исравить ошибку</button></a><br>
				                          <a href="pc.php"><button class="button primary">Вернуться на главную страницу</button></a></div>';	
			}
				} else {
   					echo '  <div align="center">
					            <br>Вы забыли указать название Фирмы производителя. <br><b class="fg-red">Данное поле обязательно!</b><br><br>
				                          <a href="pc-upload.php"><button class="button primary">Исравить ошибку</button></a><br>
				                          <a href="pc.php"><button class="button primary">Вернуться на главную страницу</button></a></div>';
			}
	};
function pc_insert_main()
	{
		if ($_GET["tip"] == NULL) {
			echo "Выберите категорию";
		} else {
			$tips = $_GET["tip"];
			echo "<br>Вы выбрали категорию <b class='fg-red'>";
			echo categories_id();
			echo "</b><br><br>";
			echo '<form action="pc-complete.php" method="post">';
			echo '<input type="hidden" name="id" value="2">';
			echo '<input type="hidden" name="tip" value="'. $tips .'">';
			echo "1. Выберите фирму и модель технического устройства:<b class='fg-red'>*</b><br>";
			$result1 = mysql_query("SELECT CONCAT (`firma_name`, ' ',`model_name`) AS 'name1',id FROM techlist WHERE cat_id = $tips") or die("Invalid query: " . mysql_error());
			// $link - это активное соединение 
			// $link = mysqli_connect(...);
			echo '<div class="input-control select" style="width: 375px">
				<select name="model">';
			while($row1 = mysql_fetch_assoc($result1))
				{
			    		$id1 = $row1['id']; // иднтификатор
			    		$name1 = $row1['name1']; // фамилия
			    		echo "<option value='$id1'> $name1</option>"; // выводим
				}
			echo '</select></div><br>';
			echo '2. Выберите ПК к которому относится данное устройство:<b class="fg-red">*</b> <br>';
			$result2 = mysql_query("SELECT id AS 'id2',name AS 'name2' FROM pclist") or die ("Invalid query: " .mysql_error());
			echo '<div class="input-control select" style="width: 375px">
			           <select name="pc">';
			while($row2 = mysql_fetch_assoc($result2))
				{
			    		$id2 = $row2['id2']; // иднтификатор
			    		$name2 = $row2['name2']; // фамилия
			    		echo "<option value='$id2'>$name2</option>"; // выводим
				}	
			echo '</select></div><br>';
			echo '3. Выберите Оценку состояния данного устройства по 5 бальной шкале:<b class="fg-red">*</b><br>
				<div class="input-control select" style="width: 375px">
    					<select name="vote">
        						<option value="5">5</option>
        						<option value="4">4</option>
        						<option value="3">3</option>
        						<option value="2">2</option>
        						<option value="1">1</option>
    					</select>
				</div><br>
			          4. Введите дополнительную информацию по состоянию если требуется. (не более 255 символов):<br>
			          <div class="input-control textarea" style="width: 375px; height: 125px">
    			          <textarea name="dop"></textarea>
			          </div><br>';
			 echo '5. Текущий статус устройства:<b class="fg-red">*</b><br>';
			 $result3 = mysql_query("SELECT id,name FROM sostoianie") or die ("Invalid query: " .mysql_error());
			 echo '<div class="input-control select" style="width: 375px">
			 	<select name="status">';
			 while ($row3 = mysql_fetch_assoc($result3))
			 	{
			 		$id3 = $row3['id']; //индификатор
			 		$name3 = $row3['name']; //индификатор
			 		echo "<option value='$id3'>$name3</option>";
			 	}	
			 echo '</select></div><br>';
			 echo '5. Введите пароль:<b class="fg-red">*</b><br>
				<div class="input-control password" style="width: 375px">
    				<input type="password" name="pass">
				</div><br>';
			echo '<button class="image-button primary">Отправить данные в БД<span class="icon mif-keyboard-return"></span></button></form>';
			echo "<a href='pc.php'><button class='button primary'>Вернуться на главную страницу</button></a>";
			}
	}
function pc_insert_main_upload()
	{

	}
function pc_add_main()
	{
		$result = mysql_query("SELECT id,otdel_name FROM otdel") or die("Invalid query:" .mysql_error());
		echo '<div class="input-control select" style="width: 375px">
		<select name="otdels">';
		while($row = mysql_fetch_assoc($result))
		{
			$id = $row['id'];
			$name1 = $row['otdel_name'];
			echo "<option value='$id'>$name1</option>";
		}
		echo "</select></div><br>";
	}
function pc_add_main_upload()
	{
		$indificator = $_POST["indificator"];
		if ($indificator != NULL) {
			echo pc_add_upload();
		} else {
			echo '  <div align="center">
				<br>Вы забыли указать иднтификатор ПК <br><b class="fg-red">Данное поле обязательно!</b><br><br>
				<a href="pc-add.php"><button class="button primary">Исравить ошибку</button></a><br>
				 <a href="pc.php"><button class="button primary">Вернуться на главную страницу</button></a></div>';
		}

	}
?>
