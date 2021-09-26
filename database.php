<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"lgmvip");
if (!$conn){
	die('could not connect my sql:'.mysql_error());
}
?>