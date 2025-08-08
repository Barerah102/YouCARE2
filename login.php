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

    .login-wrapper {
        width: 700px;
        background: white;
        display: flex;
        border-radius: 12px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    .login-banner {
        background: #0c4f21;
        color: white;
        width: 40%;
        padding: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .login-banner h1 {
        font-size: 32px;
        margin: 0;
    }

    .login-form {
        width: 60%;
        padding: 50px 40px;
    }

    .login-form h2 {
        margin-bottom: 30px;
        color: #0c4f21;
    }

    .login-form input {
        width: 100%;
        padding: 14px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
    }

    .login-form button {
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

    .login-form button:hover {
        background: #093d19;
    }

    .login-form a {
        display: block;
        margin-top: 15px;
        color: #0c4f21;
        text-decoration: none;
        font-size: 15px;
        text-align: center;
    }

    .login-form a:hover {
        text-decoration: underline;
    }

    .error {
        color: red;
        margin-top: 15px;
        text-align: center;
    }

    @media (max-width: 768px) {
        .login-wrapper {
            flex-direction: column;
            width: 90%;
        }

        .login-banner, .login-form {
            width: 100%;
            text-align: center;
        }

        .login-banner {
            padding: 30px;
        }

        .login-form {
            padding: 30px 20px;
        }
    }
</style>



<?php
session_start();
include "config.php";

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $q = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    $user = mysqli_fetch_assoc($q);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // Show success alert and redirect using JavaScript
        echo "<script>
            alert('Login successful!');

            setTimeout(function() {";

        if ($user['role'] === 'admin') {
            echo "window.location.href = '../youcare-admin/html/ltr/index.php';";
        }elseif ($user['role'] === 'patient') {
            echo "window.location.href = 'appointment.php';";
        } else {
            echo "alert('Unknown role.');";
        }

        echo "}, 500);
        </script>";
    } else {
        echo "<script>alert('Invalid login credentials.'); window.history.back();</script>";
    }
}
?>


<!-- HTML Login Form -->
<div class="login-wrapper">
    <div class="login-banner">
        <h1>YouCare</h1>
        <p>Welcome Back!</p>
    </div>
    <div class="login-form">
        <h2>Login</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <a href="signup.php">Don't have an account? Sign up here</a>
    </div>
</div>

