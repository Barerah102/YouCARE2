<?php
include "db.php";

if (isset($_POST['submitbtn'])) {
    $full_name = trim($_POST['patient_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $city_id = intval($_POST['city']);
    $doctor_id = intval($_POST['doctor_id']);
    $time_slot = trim($_POST['time_slot']);

    // Check required fields
    if (empty($full_name) || empty($email) || empty($phone) || empty($city_id) || empty($doctor_id) || empty($time_slot)) {
        echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
        exit;
    }

    // 1. Check if patient exists
    $patient_id = 0;
    $check = $conn->prepare("SELECT patient_id FROM Patients WHERE email = ? AND phone = ?");
    $check->bind_param("ss", $email, $phone);
    $check->execute();
    $check->bind_result($existing_id);
    if ($check->fetch()) {
        $patient_id = $existing_id;
    }
    $check->close();

    // 2. If not exists, insert patient (without address)
    if ($patient_id == 0) {
        $created_at = date("Y-m-d H:i:s");
        $user_id = 1; // default user

        $insert = $conn->prepare("INSERT INTO Patients (user_id, full_name, phone, email, address, city_id, created_at) VALUES (?, ?, ?, ?, '', ?, ?)");
        $insert->bind_param("isssis", $user_id, $full_name, $phone, $email, $city_id, $created_at);

        if ($insert->execute()) {
            $patient_id = $insert->insert_id;
        } else {
            echo "<script>alert('Failed to add patient: " . $insert->error . "');</script>";
            exit;
        }
        $insert->close();
    }

    // 3. Extract date from time slot
// 3. Extract date from time slot using regex
$appointment_date = '';
if (preg_match('/\d{4}-\d{2}-\d{2}/', $time_slot, $matches)) {
    $appointment_date = $matches[0];
}

    $status = "Pending";
    $booked_on = date("Y-m-d H:i:s");

    // 4. Insert into Appointments
    $stmt = $conn->prepare("INSERT INTO Appointments (patient_id, doctor_id, appointment_date, status, booked_on) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("iisss", $patient_id, $doctor_id, $appointment_date, $status, $booked_on);

    if ($stmt->execute()) {
        echo "<script>alert('Appointment booked successfully!'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Failed to book appointment: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
