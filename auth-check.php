<?php
session_start();

// Check if user is logged in and role is set
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'patient') {
    // Optional: uncomment below line to debug what's missing
    // echo "Not logged in or wrong role."; print_r($_SESSION); exit;
    header("Location: login.php");
    exit;
}
