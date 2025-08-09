<?php
include "db.php";

if (isset($_POST['city_id']) && is_numeric($_POST['city_id'])) {
    $city_id = intval($_POST['city_id']);

    // Select only doctors for this city
    $query = "SELECT * FROM Doctors WHERE city_id = $city_id ORDER BY full_name ASC";
    $result = mysqli_query($conn, $query);

    echo "<option value=''>Select Doctor</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='{$row['doctor_id']}'>{$row['full_name']}</option>";
    }
}
?>
