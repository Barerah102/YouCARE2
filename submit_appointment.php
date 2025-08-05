<?php
include "db.php"; // Make sure this file connects to your database

if (isset($_POST['submitbtn'])) {
    // Get form data
    $patient_name = $_POST['patient_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $appointment_date = $_POST['appointment_date'];
    $city_id = $_POST['city'];
    $doctor_id = $_POST['doctor_id'];
    $time_slot = $_POST['time_slot'];
    $message = $_POST['message'];

    // Insert into Appointments table
    $query = "INSERT INTO Appointments (patient_name, email, phone, city_id, doctor_id, appointment_date, time_slot, message) 
              VALUES ('$patient_name', '$email', '$phone', '$city_id', '$doctor_id', '$appointment_date', '$time_slot', '$message')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
            alert('Appointment booked successfully!');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
