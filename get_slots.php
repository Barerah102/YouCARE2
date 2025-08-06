<?php
include "db.php";

if (isset($_POST['doctor_id']) && is_numeric($_POST['doctor_id'])) {
    $doctor_id = intval($_POST['doctor_id']);

    $query = "SELECT DISTINCT start_time, end_time, available_days 
              FROM doctoravailability 
              WHERE doctor_id = $doctor_id";
    
    $result = mysqli_query($conn, $query);

    $options = "<option value=''>Select Time Slot</option>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        $slot = "{$row['available_days']} ({$row['start_time']} - {$row['end_time']})";
        $options .= "<option value='$slot'>$slot</option>";
    }

    echo $options;
}
?>
