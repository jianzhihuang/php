<?php
$server="localhost";
$user="huangzhi_test";
$pass="Qwe22034409";
$db = "huangzhi_shoppingcart";



mysqli_connect($server,$user,$pass) or die ("抱歉,無法連上伺服器");

$link = mysqli_connect("localhost","huangzhi_test","Qwe22034409");

mysqli_select_db($link,$db) or die("抱歉,無法連上數據庫");




?>