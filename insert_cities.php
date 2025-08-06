<?php
include 'db.php';

// U.S. Cities
$cities = [
    'Washington',
    'New York',
    'Los Angeles',
    'Miami',
    'Seattle',
    'Boston',
    'Chicago'
];

foreach ($cities as $city_name) {
    $query = "INSERT INTO cities (city_name) VALUES ('$city_name')";
    if (mysqli_query($conn, $query)) {
        echo "$city_name inserted successfully.<br>";
    } else {
        echo "Error inserting $city_name: " . mysqli_error($conn) . "<br>";
    }
}

mysqli_close($conn);
?>
