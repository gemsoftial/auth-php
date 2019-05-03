<?php
$host = "localhost";
$user = "id9377486_dianhandiyansah";
$pass = "gemsoftial45";
$database = "id9377486_count";

$conn = mysqli_connect($host, $user, $pass)or die(mysqli_error());
mysqli_select_db($conn, $database)or die(mysqli_error());
?>