<?php
session_start();
$dbServername= "localhost";
$dbUsername= "root";
$dbPassword= "";
$dbName= "bingeit";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Connection failed");
?>