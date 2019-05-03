<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "auth";

$conn = mysqli_connect($host, $user, $pass)or die(mysqli_error());
mysqli_select_db($conn, $database)or die(mysqli_error());
?>
