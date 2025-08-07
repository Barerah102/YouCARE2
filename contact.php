<?php
include "header.php";
include "db_connect.php";

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    if (empty($name) || empty($email) || empty($message)) {
        $error = "Please fill in all required fields.";
    } else if (strpos($name, '#') !== false) {
        $error = "Name cannot contain the '#' character.";
    } else {
        $stmt = $conn->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            $success = "Message sent successfully!";
        } else {
            $error = "Failed to send message.";
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - YouCare</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fff;
      color: #333;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 50px auto;
      padding: 20px;
      gap: 40px;
    }

    .contact-form {
      flex: 2;
    }

    .contact-form h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-bottom: 50px;
    }

    .field {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 6px;
      font-weight: 600;
      font-size: 15px;
    }

    input, textarea {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    textarea {
      min-height: 120px;
      resize: vertical;
    }

    .send-btn {
      background: #0c4f21;
      color: #ffffff;
      border: none;
      padding: 10px 25px;
      border-radius: 30px;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .send-btn:hover {
      background-color: #2c643e;
      text-decoration: none;
      color: #f8c301;
      transform: scale(1.03);
    }

    .contact-info {
      flex: 1;
      border-left: 1px solid #eee;
      padding-left: 30px;
    }

    .contact-info h3 {
      margin-top: 0;
    }

    .contact-item {
      margin-bottom: 20px;
    }

    .contact-item p {
      margin: 0;
      font-size: 15px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .contact-item hr {
      border: 0;
      border-bottom: 1px solid #ccc;
      margin-top: 10px;
    }

    .contact-info a {
      color: #298646;
      text-decoration: none;
    }

    .contact-info a:hover {
      text-decoration: underline;
    }

    .contact-info i {
      color: #1c2a4d;
    }

    .icon-box {
      display: flex;
      align-items: center;
      background-color: #f1f1f1;
      margin-bottom: 10px;
      border-radius: 4px;
      overflow: hidden;
    }

    .icon-square {
      background-color: #0c4f21;
      color: white;
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
    }

    .icon-text {
      padding: 10px 15px;
      font-size: 15px;
      color: #333;
    }

    .icon-text a {
      color: #298646;
      text-decoration: none;
    }

    .icon-text a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .contact-info {
        border-left: none;
        padding-left: 0;
      }
    }
.page-title {
  position: relative;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  padding: 60px 0;
  color: #fff;
  text-align: center;
}

.page-title::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* dark overlay */
  z-index: 1;
}

.page-title .container {
  position: relative;
  z-index: 2;
}

.page-title .title-text h1 {
  font-size: 40px;
  font-weight: 700;
  margin-bottom: 15px;
  text-transform: uppercase;
  

}

.title-menu {
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 16px;
  display: flex;
  justify-content: center;
  gap: 8px;
  color: #fff;
}

.title-menu li {
  display: inline;
}

.title-menu a {
  color: #f8c301; /* Highlight color */
  text-decoration: none;
}

.title-menu a:hover {
  text-decoration: none;
}


  </style>
</head>
<body>

<section class="page-title text-center" style="background-image: url('images/image5.jpg'); margin-bottom: 40px;">
    <div class="container">
        <div class="title-text">
            <h1>Contact</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
  <div class="container">
    <!-- Contact Form -->
    <div class="contact-form">
      <h2>Give us a Message</h2>
      <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
      <?php if (!empty($success)) echo "<p style='color:green;'>$success</p>"; ?>
     <form method="POST" action="">
        <div class="row">
          <div class="field">
            <label for="name">Your Name (required)</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="field">
            <label for="email">Your Email (required)</label>
            <input type="email" id="email" name="email" required>
          </div>
        </div>

        <div class="row">
          <div class="field" style="width: 100%;">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject">
          </div>
        </div>

        <div class="row">
          <div class="field" style="width: 100%;">
            <label for="message">Your Message (required)</label>
            <textarea id="message" name="message" required></textarea>
          </div>
        </div>

        <button type="submit" class="send-btn">SEND</button>
      </form>
    </div>

    <!-- Contact Info -->
    <div class="contact-info">
      <h3>Contact Info</h3>

      <div class="contact-item">
        <p><i class="icon">📍</i> No: 58 A, East Madison St Baltimore, MD, USA</p>
        <hr>
      </div>

      <div class="contact-item">
        <p><i class="icon">📞</i> Phone: 03412675598</p>
        <hr>
      </div>

      <div class="contact-item">
        <p><i class="icon">✉️</i> Email: YouCare@somemail.com
        </p>
        <hr>
      </div>

      <h3 style="margin-top: 30px;">APPOINTMENT</h3>
      <p>Fox that is her thing smaoasa lase lemedds laasd pamade eleifend sapien. Lase lemedds laasd pamade eleifend sapien.</p>

      <div class="icon-box">
        <div class="icon-square">
          <i class="icon">📞</i>
        </div>
        <div class="icon-text">
          <strong>Phone :</strong> 03412675598
        </div>
      </div>

      <div class="icon-box">
        <div class="icon-square">
          <i class="icon">✉️</i>
        </div>
        <div class="icon-text">
          <strong>Email :</strong> YouCare@somemail.com
        </div>
      </div>

      <div class="icon-box">
        <div class="icon-square">
          <i class="icon">📝</i>
        </div>
        <div class="icon-text">
          <strong>Online Form :</strong>
          <a href="#">Fill out this form</a>
        </div>
      </div>
    </div>
  </div>

<?php include "footer.php" ?>
</body>
</html>
