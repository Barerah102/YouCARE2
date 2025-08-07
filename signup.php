<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
        background: #f3f3f3;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .signup-wrapper {
        width: 700px;
        background: white;
        display: flex;
        border-radius: 12px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    .signup-banner {
        background: #0c4f21;
        color: white;
        width: 40%;
        padding: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .signup-banner h1 {
        font-size: 32px;
        margin: 0;
    }

    .signup-form {
        width: 60%;
        padding: 50px 40px;
    }

    .signup-form h2 {
        margin-bottom: 30px;
        color: #0c4f21;
    }

    .signup-form input {
        width: 100%;
        padding: 14px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
    }

    .signup-form button {
        width: 100%;
        background: #0c4f21;
        color: white;
        border: none;
        padding: 14px;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 15px;
    }

    .signup-form button:hover {
        background: #093d19;
    }

    .signup-form a {
        display: block;
        margin-top: 15px;
        color: #0c4f21;
        text-decoration: none;
        font-size: 15px;
        text-align: center;
    }

    .signup-form a:hover {
        text-decoration: underline;
    }

    .error {
        color: red;
        margin-top: 15px;
        text-align: center;
    }

    @media (max-width: 768px) {
        .signup-wrapper {
            flex-direction: column;
            width: 90%;
        }

        .signup-banner, .signup-form {
            width: 100%;
            text-align: center;
        }

        .signup-banner {
            padding: 30px;
        }

        .signup-form {
            padding: 30px 20px;
        }
    }
</style>

<?php
include "config.php";
session_start();

if (isset($_POST['signup'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm = trim($_POST['confirm_password']);
    $role = $_POST['role']; // use selected role

    // Validation
if (!preg_match("/^[A-Za-z0-9_ ]{3,20}$/", $username)) {
        echo "<script>alert('Username must be 3–20 characters without special symbols.'); window.history.back();</script>";
        exit;
    }

    if (strlen($password) < 6) {
        echo "<script>alert('Password must be at least 6 characters.'); window.history.back();</script>";
        exit;
    }

    if ($password !== $confirm) {
        echo "<script>alert('Passwords do not match.'); window.history.back();</script>";
        exit;
    }

    if ($role !== 'patient' && $role !== 'doctor') {
        echo "<script>alert('Invalid role selected.'); window.history.back();</script>";
        exit;
    }

    // Check username exists
    $check = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Username already exists.'); window.history.back();</script>";
        exit;
    }

    // Save
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    $insert = mysqli_query($conn, "INSERT INTO users (username, password, role) VALUES ('$username', '$hashed', '$role')");

    if ($insert) {
        $_SESSION['user_id'] = mysqli_insert_id($conn);
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;

        if ($role === 'patient') {
            header("Location: appointment.php");
        } elseif ($role === 'doctor') {
            header("Location: ../youcare-admin/html/ltr/appointments.php");
        }
        exit;
    } else {
        echo "<script>alert('Signup failed. Try again.'); window.history.back();</script>";
        exit;
    }
}

?>

<!-- Signup Form -->
<div class="signup-wrapper">
    <div class="signup-banner">
        <h1>YouCare</h1>
        <p>Create your account</p>
    </div>
    <div class="signup-form">
        <h2>Sign Up</h2>
       <form method="POST" action="" onsubmit="return validateSignup()">
  <input type="text" name="username" id="username" placeholder="Username" required><br>
  <input type="password" name="password" id="password" placeholder="Password" required><br>
  <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required><br>

  <select name="role" id="role" required>
    <option value="">Select Role</option>
    <option value="patient">Patient</option>
    <option value="doctor">Doctor</option>
  </select><br>

  <button type="submit" name="signup">Sign Up</button>
</form>

        <a href="login.php">Already have an account? Login here</a>
    </div>
</div>

<script>
function validateSignup() {
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value;
    const confirm = document.getElementById("confirm_password").value;

    const usernameRegex = /^[a-zA-Z0-9_]{3,20}$/;

    if (!usernameRegex.test(username)) {
        alert("Username must be 3–20 characters and contain only letters, numbers, or underscores.");
        return false;
    }

    if (password.length < 6) {
        alert("Password must be at least 6 characters.");
        return false;
    }

    if (password !== confirm) {
        alert("Passwords do not match.");
        return false;
    }

    return true;
}
</script>
