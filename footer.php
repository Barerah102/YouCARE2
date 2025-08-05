<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CARE Group Footer</title>
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
     html {
  scroll-behavior: smooth;
}

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
      background-color: #f4f4f4;
    }

    /* Footer Main */
    .footer-main {
      background-color: #0c4f21;
      color: #ffffff;
      padding-top: 50px;
      font-size: 15px;
    }

    .footer-main a {
      color: #ccc;
      text-decoration: none;
    }

    .footer-main a:hover {
      color: #ffffff;
    }

    .footer-top {
      padding-bottom: 40px;
      padding-left: 20px;
      padding-right: 20px;
    }

    .footer-logo img {
      max-width: 180px;
      margin-bottom: 20px;
    }

    .about-widget p {
      margin-bottom: 20px;
      color: #ccc;
    }

    .location-link .item {
      margin-bottom: 10px;
      display: flex;
      align-items: flex-start;
    }

    .location-link .item i {
      margin-right: 10px;
      font-size: 18px;
      color: #f8c301;
    }

    .list-inline.social-icons {
      margin-top: 20px;
      padding-left: 0;
      list-style: none;
    }

    .social-icons li {
      display: inline-block;
      margin-right: 10px;
    }

    .social-icons li a i {
      font-size: 18px;
      color: #ccc;
      transition: 0.3s;
    }

    .social-icons li a:hover i {
      color: #f8c301;
    }

    .menu-link {
      list-style: none;
      padding-left: 0;
    }

    .menu-link li {
      margin-bottom: 10px;
    }

    .menu-link li i {
      margin-right: 8px;
      color: #f8c301;
    }

    .social-links ul {
      list-style: none;
      padding-left: 0;
    }

    .social-links .media {
      display: flex;
      margin-bottom: 15px;
      background: transparent;
      padding: 0;
      border-radius: 0;
}

.social-links .media-body {
      background: transparent; 
      padding: 0;
}

.social-links .media-body h4 a {
     color: #ffffff;
     text-decoration: none;
     font-weight: bold;
}

.social-links .media-body p {
     color: #ccc;
     font-size: 14px;
}

.social-links .media img {
     width: 64px;
     height: 64px;
     object-fit: cover;
     margin-right: 10px;
     border-radius: 4px;
}


    .social-links .media-body h4 {
      font-size: 16px;
      margin-bottom: 5px;
      font-weight: 600;
    }

    .social-links .media-body p {
      font-size: 14px;
      color: #bbb;
    }

    .footer-bottom {
      background-color: #2c643eff;
      padding: 20px 20px;
      border-top: 1px solid #76da87ff;
    }

    .footer-bottom .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
    }

    .footer-bottom-link {
      list-style: none;
      display: flex;
      flex-wrap: wrap;
      padding-left: 0;
    }

    .footer-bottom-link li {
      margin-left: 15px;
    }

    .footer-bottom-link a {
      color: #ccc;
      transition: color 0.3s;
    }

    .footer-bottom-link a:hover {
      color: #f8c301;
    }

    @media (max-width: 768px) {
      .footer-bottom .container {
        flex-direction: column;
        align-items: flex-start;
      }

      .footer-bottom-link {
        margin-top: 10px;
        flex-direction: column;
        gap: 5px;
      }

      .footer-bottom-link li {
        margin-left: 0;
      }
    }

    /* Grid Layout */
    .row {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
    }

    .col-md-4, .col-sm-6, .col-xs-12 {
      flex: 1;
      min-width: 250px;
    }

    .container {
      max-width: 1200px;
      margin: auto;
    }
  </style>
</head>
<body>

<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <!-- About Section -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <img src="logo.png" alt="" height="50px">
                </a>
              </figure>
            </div>
            <p>Medical Appointment Booking System by CARE Group — simplifying access to quality healthcare for all.</p>
            <ul class="location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p>CARE Group HQ, Modamba, NY 80021, United States</p>
              </li>
              <li class="item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="mailto:support@caregroup.com">
                  <p>support@caregroup.com</p>
                </a>
              </li>
              <li class="item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>(88017) +123 4567</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- Services Section -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h6>Our Services</h6>
          <ul class="menu-link">
            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Online Appointment Booking</a></li>
            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Telemedicine Consultation</a></li>
            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Diagnostic Services</a></li>
            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Specialist Referrals</a></li>
            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Patient Records Management</a></li>
          </ul>
        </div>
        <!-- Recent Posts Section -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="social-links">
            <h6>Health Updates</h6>
            <ul>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#"><img class="media-object" src="images/image1.jpg" alt="post-thumb"></a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Benefits of Early Diagnosis</a></h4>
                    <p>Early detection can improve treatment outcomes significantly.</p>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#"><img class="media-object" src="images/image2.jpg" alt="post-thumb"></a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Using Our Booking App</a></h4>
                    <p>A step-by-step guide to scheduling your appointment online.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; 2025 Medical Appointment Booking System — All Rights Reserved by <a href="#">CARE Group</a></p>
      </div>
      <ul class="footer-bottom-link">
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">FAQ</a></li>
      </ul>
    </div>
  </div>
</footer>
