<?php
include 'db.php';

$availabilities = [
    [1, '2025-08-10', '2025-09-10', 'Monday, Wednesday', '09:00', '12:00'],
    [2, '2025-08-11', '2025-09-11', 'Tuesday, Thursday', '10:00', '13:00'],
    [3, '2025-08-12', '2025-09-12', 'Monday, Friday', '08:30', '11:30'],
    [4, '2025-08-13', '2025-09-13', 'Wednesday, Saturday', '11:00', '14:00'],
    [5, '2025-08-14', '2025-09-14', 'Tuesday, Sunday', '09:30', '12:30'],
    [6, '2025-08-15', '2025-09-15', 'Monday, Wednesday', '10:00', '13:00'],
    [7, '2025-08-16', '2025-09-16', 'Tuesday, Friday', '09:00', '12:00'],
    [8, '2025-08-17', '2025-09-17', 'Wednesday, Saturday', '11:30', '14:30'],
    [9, '2025-08-18', '2025-09-18', 'Thursday, Sunday', '10:30', '13:30'],
    [10, '2025-08-19', '2025-09-19', 'Monday, Thursday', '08:00', '11:00'],
    [11, '2025-08-20', '2025-09-20', 'Tuesday, Friday', '09:00', '12:00'],
    [12, '2025-08-21', '2025-09-21', 'Wednesday, Saturday', '10:30', '13:30'],
    [13, '2025-08-22', '2025-09-22', 'Monday, Thursday', '08:30', '11:30'],
    [14, '2025-08-23', '2025-09-23', 'Tuesday, Friday', '09:00', '12:00'],
    [15, '2025-08-24', '2025-09-24', 'Wednesday, Sunday', '11:00', '14:00'],
    [16, '2025-08-25', '2025-09-25', 'Monday, Friday', '09:30', '12:30'],
    [17, '2025-08-26', '2025-09-26', 'Tuesday, Thursday', '10:00', '13:00'],
    [18, '2025-08-27', '2025-09-27', 'Wednesday, Saturday', '08:00', '11:00'],
    [19, '2025-08-28', '2025-09-28', 'Thursday, Sunday', '09:00', '12:00'],
    [20, '2025-08-29', '2025-09-29', 'Monday, Thursday', '10:00', '13:00'],
    [21, '2025-08-30', '2025-09-30', 'Tuesday, Friday', '08:30', '11:30']
];

foreach ($availabilities as $a) {
    $query = "INSERT INTO doctoravailability (doctor_id, start_date, end_date, available_days, start_time, end_time)
              VALUES ($a[0], '$a[1]', '$a[2]', '$a[3]', '$a[4]', '$a[5]')";

    if (mysqli_query($conn, $query)) {
        echo "✅ Inserted Doctor ID: $a[0]<br>";
    } else {
        echo "❌ Error for Doctor ID $a[0]: " . mysqli_error($conn) . "<br>";
    }
}
?>
