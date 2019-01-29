<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "construction";
$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
if (!$conn) {
	die("connection failed :".mysql_connect_error());
}