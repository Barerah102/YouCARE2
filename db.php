<?php
$conn = mysqli_connect("localhost", "root", "", "youcare");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
