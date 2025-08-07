<?php
$host = "localhost";
$user = "root";       // default for XAMPP
$password = "";       // default for XAMPP
$database = "youcare";  // change to your actual database name

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
