<?php
include 'auth-check.php'; // run auth check FIRST, before any HTML or header
include 'header.php';     // now safe to include header
?>


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
                    <a href="index.php">home &nbsp;/</a>
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
          <div style="background-color: #e6f4ea; border-left: 5px solid #28a745; padding: 10px 15px; margin-bottom: 15px; font-size: 14px;">
  <strong>🔔 YouCare currently has branches in:</strong> Los Angeles, Miami,<br> New York, Seattle, and Washington.
</div>

          <form name="contact_form" class="default-form contact-form" action="submit_appointment.php" method="POST">
            <div class="row">

              <!-- 👤 Patient Info -->
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <input type="text" name="patient_name" placeholder="Full Name" required pattern="^[A-Za-z][A-Za-z\s]{1,49}$" title="Must start with a letter, only letters and spaces allowed, 2-50 characters.">
                </div>
                <div class="form-group">
                <input type="email" name="email" placeholder="Email" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Enter a valid email (e.g., example@mail.com)">
                </div>
                <div class="form-group">
                <input type="tel" name="phone" placeholder="Phone" required pattern="^\d{10,15}$" title="Enter 10 to 15 digit phone number">
                </div>
              </div>
              

                <!-- 🌆 City Dropdown -->
                <div class="form-group">
                  
                  <select name="city" id="citySelect" required>
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
                <!-- 👨‍⚕️ Doctor Dropdown -->

<script>
document.getElementById("citySelect").addEventListener("change", function () {
    var cityId = this.value;

    // Reset doctor & time dropdowns
    document.getElementById("doctorSelect").innerHTML = "<option value=''>Loading doctors...</option>";
    document.getElementById("timeSlot").innerHTML = "<option value=''>Select Time Slot</option>";

    // AJAX request to get doctors by city
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "get_doctors.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onload = function () {
        if (this.status == 200) {
            document.getElementById("doctorSelect").innerHTML = this.responseText;
        }
    };

    xhr.send("city_id=" + cityId);
});
</script>

<!-- DOCTOR DROPDOWN -->
<div class="form-group">
  <select name="doctor_id" id="doctorSelect" required>
    <option value="">Select Doctor</option>
  </select>
</div>


              <!-- 🕐 Time Slot & Message -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- 🕐 Time Slot Dropdown -->
<div class="form-group">
  <select name="time_slot" id="timeSlot" required>
    <option value="">Select Time Slot</option>
    <!-- Will be filled by JS -->
  </select>
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
            <img src="images/app.jpg" alt="Appointment" height="500px">
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



</div>
<script>
document.getElementById("doctorSelect").addEventListener("change", function() {
    var doctorId = this.value;

    // Clear existing options
    document.getElementById("timeSlot").innerHTML = "<option value=''>Loading...</option>";

    // Send AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "get_slots.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onload = function () {
        if (this.status == 200) {
            document.getElementById("timeSlot").innerHTML = this.responseText;
        }
    };

    xhr.send("doctor_id=" + doctorId);
});
</script>
<!-- Your form HTML here -->

<script>
document.querySelector("form[name='contact_form']").addEventListener("submit", function (e) {
    const name = this.patient_name.value.trim();
    const email = this.email.value.trim();
    const phone = this.phone.value.trim();

    const nameRegex = /^[A-Za-z][A-Za-z\s]{1,49}$/;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const phoneRegex = /^\d{10,15}$/;

    let errors = [];

    if (!nameRegex.test(name)) {
        errors.push("Name must start with a letter, only letters and spaces allowed (2–50 characters).");
    }

    if (!emailRegex.test(email)) {
        errors.push("Enter a valid email (e.g., example@mail.com).");
    }

    if (!phoneRegex.test(phone)) {
        errors.push("Phone number must be 10 to 15 digits.");
    }

    if (errors.length > 0) {
        alert(errors.join("\n"));
        e.preventDefault(); // prevent form submission
    }
});
</script>


<!--End pagewrapper-->

<?php include "footer.php"; 
?>
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>
<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>
<script src="plugins/bootstrap.min.js"></script>
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
