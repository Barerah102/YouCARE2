<?php include("header.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Medic | Medical HTML Template</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->
<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>appointment</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>appointment</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->
<section class="blog-section section style-three pb-0">
  <div class="container">
    <div class="row">

      <!-- 🟢 LEFT SIDE: Appointment Form -->
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="contact-area style-two">
          <div class="section-title">
            <h3>Request <span>Appointment</span></h3>
          </div>
          <form name="contact_form" class="default-form contact-form" action="submit_appointment.php" method="POST">
            <div class="row">

              <!-- 👤 Patient Info -->
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <input type="text" name="patient_name" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                  <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="tel" name="phone" placeholder="Phone" required>
                </div>
              </div>

              <!-- 📅 Date, City, Doctor -->
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <input type="date" name="appointment_date" placeholder="Date" required>
                </div>

                <!-- 🌆 City Dropdown -->
                <div class="form-group">
                  <select name="city" required>
                    <option value="">Select City</option>
                    <?php
                    include "db.php";
                    $cities = mysqli_query($conn, "SELECT * FROM Cities");
                    while ($row = mysqli_fetch_assoc($cities)) {
                      echo "<option value='{$row['city_id']}'>{$row['city_name']}</option>";
                    }
                    ?>
                  </select>
                </div>

                <!-- 👨‍⚕️ Doctor Dropdown -->
                <div class="form-group">
                  <select name="doctor_id" required>
                    <option value="">Select Doctor</option>
                    <?php
                    $doctors = mysqli_query($conn, "SELECT * FROM Doctors");
                    while ($doc = mysqli_fetch_assoc($doctors)) {
                      echo "<option value='{$doc['doctor_id']}'>{$doc['doctor_name']}</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>

              <!-- 🕐 Time Slot & Message -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <select name="time_slot" required>
                    <option value="">Select Time Slot</option>
                    <?php
                    $slots = mysqli_query($conn, "SELECT DISTINCT time_slot FROM DoctorAvailability");
                    while ($slot = mysqli_fetch_assoc($slots)) {
                      echo "<option value='{$slot['time_slot']}'>{$slot['time_slot']}</option>";
                    }
                    ?>
                  </select>
                </div>

                <div class="form-group">
                  <textarea name="message" placeholder="Your Message" required></textarea>
                </div>

                <div class="form-group text-center">
                  <button type="submit" name="submitbtn" class="btn-style-one">Submit Now</button>
                </div>
              </div>

            </div>
          </form>
        </div>
      </div>

      <!-- 🟡 RIGHT SIDE: Image -->
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="appointment-image-holder">
          <figure>
            <img src="images/background/appoinment.jpg" alt="Appointment">
          </figure>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- End Contact Section -->

<section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Meet Our Trusted
                <span>Specialists</span>
            </h3>
            <p>Our team of certified and compassionate doctors is here to provide quality care, <br> ensuring your health is always the top priority.</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="images/team/doctor-1.jpg" alt="doctor" class="img-responsive" style="height: 360px;">
                    <div class="contents text-center">
                        <h4>Dr. Jonathan Blake</h4>
                        <p>Expert in General Medicine with over 10 years of patient-centered care experience.</p>
                        <a href="#" class="btn btn-main">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="images/team/doctor-2.jpg" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Sophia Lawson</h4>
                        <p>Orthopedic specialist helping patients recover from bone and joint disorders effectively.</p>
                        <a href="#" class="btn btn-main">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="images/team/doctor-3.jpg" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Micheal Scott</h4>
                        <p>Licensed psychologist focused on mental wellness through therapy and counseling.</p>
                        <a href="#" class="btn btn-main">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End team section-->
<?php include ("footer.php");?>

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js"></script>

<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="plugins/timePicker.js"></script>
<script src="js/script.js"></script>
</body>

</html>
