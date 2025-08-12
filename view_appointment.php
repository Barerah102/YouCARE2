<?php
// Connect to DB
include "db_connect.php"; // your DB connection file

// Fetch appointments with doctor & patient names
$sql = "
SELECT 
    a.appointment_id,
    p.full_name AS patient_name,
    d.full_name AS doctor_name,
    a.appointment_datetime,
    a.status,
    a.booked_on
FROM appointments a
JOIN patients p ON a.patient_id = p.patient_id
JOIN doctors d ON a.doctor_id = d.doctor_id
ORDER BY a.appointment_datetime DESC
";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Appointments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .back-btn {
            display: inline-block;
            padding: 8px 15px;
            background: #0c4f21;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 15px;
        }
        .back-btn:hover {
            background: #097233;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #0c4f21;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .status {
            font-weight: bold;
        }
        .status.pending {
            color: orange;
        }
        .status.completed {
            color: green;
        }
        .status.cancelled {
            color: red;
        }
    </style>
</head>
<body>

<a href="index.php" class="back-btn">← Back to Home</a>

<h1>Appointments</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Patient Name</th>
        <th>Doctor Name</th>
        <th>Appointment Date & Time</th>
        <th>Status</th>
        <th>Booked on</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { 
        $status = ucfirst($row['status']);
        if (empty($status)) {
            $status = "Pending";
            $statusClass = "pending";
        } elseif (strtolower($status) === "completed") {
            $statusClass = "completed";
        } elseif (strtolower($status) === "cancelled") {
            $statusClass = "cancelled";
        } else {
            $statusClass = "pending"; // default
        }
    ?>
        <tr>
            <td><?php echo $row['appointment_id']; ?></td>
            <td><?php echo htmlspecialchars($row['patient_name']); ?></td>
            <td><?php echo htmlspecialchars($row['doctor_name']); ?></td>
            <td>
                <?php echo date("d M Y, h:i A", strtotime($row['appointment_datetime'])); ?>
            </td>
            <td class="status <?php echo $statusClass; ?>">
                <?php echo $status; ?>
            </td>
            <td>
                <?php echo date("d M Y, h:i A", strtotime($row['booked_on'])); ?>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
