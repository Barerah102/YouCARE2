<?php
include 'db.php';
function insertDoctor($conn, $sql) {
    if (mysqli_query($conn, $sql)) {
        echo "✅ Doctor inserted successfully<br>";
    } else {
        echo "❌ Error inserting doctor: " . mysqli_error($conn) . "<br>";
    }
}


// --------------------
// Doctors for Washington (city_id = 1)
// --------------------
insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. Sarah Bennett', 'Cardiologist', '03001234567', 'sarah.bennett@example.com', 'Washington', 1, 'Experienced heart specialist')");

insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. Robert Hayes', 'Orthopedic Surgeon', '03111230000', 'robert.hayes@example.com', 'Washington', 1, 'Expert in bone and joint surgery')");

insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. Jennifer Clark', 'ENT Specialist', '03221234567', 'jennifer.clark@example.com', 'Washington', 1, 'Ear, Nose, and Throat care')");

// --------------------
// Doctors for New York (city_id = 2)
// --------------------
insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. Michael Lee', 'Dermatologist', '03007654321', 'michael.lee@example.com', 'New York', 2, 'Skin care and treatment expert')");

insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. Olivia Harris', 'Psychiatrist', '03456781234', 'olivia.harris@example.com', 'New York', 2, 'Mental health and counseling')");

insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. Daniel Moore', 'Gastroenterologist', '03334567890', 'daniel.moore@example.com', 'New York', 2, 'Digestive system specialist')");

// --------------------
// Doctors for Los Angeles (city_id = 3)
// --------------------
insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. David Kim', 'Neurologist', '03451239876', 'david.kim@example.com', 'Los Angeles', 3, 'Brain and nervous system specialist')");

insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. Ashley Rogers', 'Dentist', '03881234567', 'ashley.rogers@example.com', 'Los Angeles', 3, 'Dental and oral care')");

insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. Kevin Brooks', 'Urologist', '03991234567', 'kevin.brooks@example.com', 'Los Angeles', 3, 'Kidney and urinary specialist')");

// --------------------
// Doctors for Miami (city_id = 4)
// --------------------
insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. Anna Mitchell', 'Endocrinologist', '03561234567', 'anna.mitchell@example.com', 'Miami', 4, 'Hormone and metabolism specialist')");

insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. Charles Evans', 'Hematologist', '03112233445', 'charles.evans@example.com', 'Miami', 4, 'Blood disorder expert')");

insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. Natalie Perez', 'Allergist', '03777889900', 'natalie.perez@example.com', 'Miami', 4, 'Allergy and immune system expert')");

// --------------------
// Doctors for Seattle (city_id = 5)
// --------------------
insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. Laura Wilson', 'General Physician', '03111239876', 'laura.wilson@example.com', 'Seattle', 5, 'General health consultant')");

insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. Brian Murphy', 'Pulmonologist', '03177889900', 'brian.murphy@example.com', 'Seattle', 5, 'Lung and respiratory care')");

insertDoctor($conn, "INSERT INTO Doctors (user_id, full_name, specialization, phone, email, address, city_id, profile_details) VALUES 
(0, 'Dr. Sophia Green', 'Rheumatologist', '03155667788', 'sophia.green@example.com', 'Seattle', 5, 'Joint and autoimmune care')");

echo "<br>✅ All doctor insert queries processed.";
?>
