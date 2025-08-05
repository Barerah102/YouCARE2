<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_id = $_POST['patient_id'];
    $doctor_id = $_POST['doctor_id'];
    $appointment_date = $_POST['appointment_date'];

    // Insert into Appointments table
    $sql = "INSERT INTO Appointments (patient_id, doctor_id, appointment_date) 
            VALUES ('$patient_id', '$doctor_id', '$appointment_date')";

    if (mysqli_query($conn, $sql)) {
        echo "✅ Appointment booked successfully!";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
}
?>
