<?php
session_start();

// Check if user is logged in and role is set
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    header("Location: login.php");
    exit;
}

// Allow only patients and admins
if ($_SESSION['role'] !== 'patient' && $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;

}
