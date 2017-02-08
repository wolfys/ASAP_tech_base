<?php
$dbhost = 'localhost';
$dbuser = 'web';
$dbpass = 'WbJzBRCC5LPAfpBb';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Не возможно подключиться к MySQL');

$dbname = 'techbase';
mysql_select_db($dbname) or die ('Не возможно подключиться к базе данных');
?>
