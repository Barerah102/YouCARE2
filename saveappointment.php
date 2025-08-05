<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$specialization = $_POST['specialization'];
$message = $_POST['message'];

$sql = "INSERT INTO appointments (name, email, city_id, phone, appointment_date, specialization, message)
        VALUES ('$name', '$email', '$city', '$phone', '$date', '$specialization', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "Appointment booked successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
