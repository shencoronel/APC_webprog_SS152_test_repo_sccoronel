<?php
$host = "localhost";
$user = "root";
$password = "";
$datbase = "dbtuts";
$connect = mysqli_connect($host,$user,$password);
mysqli_select_db($connect,$datbase);
?>
