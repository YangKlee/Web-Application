<?php
$host='localhost';
$namehost='root';
$passhost='';
$csdl='19d';
//$csdl='paging_examlpe';

$connect=mysqli_connect($host,$namehost,$passhost,$csdl) or die ("Không thể kết nối Database");
mysqli_query($connect,"SET NAMES 'UTF8'");

$dump= "mysqldump -u -p 19d > C:\db_19d.sql";
if (isset($dump) != null)
	echo 'back up thanh cong';
?>



