<?php
$dbhost = 'localhost';
$dbuser = 'web';
$dbpass = 'WbJzBRCC5LPAfpBb';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('�� �������� ������������ � MySQL');

$dbname = 'techbase';
mysql_select_db($dbname) or die ('�� �������� ������������ � ���� ������');
?>
