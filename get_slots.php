<?php
include "db.php";

// Helper function to get the next date of a given weekday
function getNextDateOfWeekday($weekday) {
    $weekdays = [
        'Sunday'    => 0,
        'Monday'    => 1,
        'Tuesday'   => 2,
        'Wednesday' => 3,
        'Thursday'  => 4,
        'Friday'    => 5,
        'Saturday'  => 6,
    ];

    $targetDay = $weekdays[$weekday];
    $today = date('w'); // 0 (Sunday) to 6 (Saturday)

    $daysUntil = ($targetDay - $today + 7) % 7;
    $daysUntil = $daysUntil === 0 ? 7 : $daysUntil; // always next week, not today

    return date('Y-m-d', strtotime("+$daysUntil days"));
}

if (isset($_POST['doctor_id']) && is_numeric($_POST['doctor_id'])) {
    $doctor_id = intval($_POST['doctor_id']);

    $query = "SELECT DISTINCT start_time, end_time, available_days 
              FROM doctoravailability 
              WHERE doctor_id = $doctor_id";
    
    $result = mysqli_query($conn, $query);

    $options = "<option value=''>Select Appointment Date & Time</option>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        $weekday = $row['available_days'];
        $date = getNextDateOfWeekday($weekday); // e.g. "2025-08-11"
        $start = $row['start_time'];            // e.g. "10:00:00"
        $end = $row['end_time'];                // optional, for display

        // Combine date + time
        $datetime = "$date $start";            // e.g. "2025-08-11 10:00:00"

        // Display format for user
        $display = "$weekday - $date ($start - $end)";

        // Output option
        $options .= "<option value='$datetime'>$display</option>";
    }

    echo $options;
}
?>
