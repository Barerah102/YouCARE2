<?php include "header.php"?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Medic | Medical HTML Template</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
<style>
/* ============ General ============ */
body {
  font-family: 'Open Sans', sans-serif;
  color: #333;
  margin: 0;
  padding: 0;
  background: #fff;
}

h1, h2, h3, h4, h5, h6 {
  color: #1c2a4d;
  font-weight: 700;
  margin-bottom:15px;
}

.section {
  padding: 80px 0;
}

.text-center {
  text-align: center;
}

/* ============ Service Box Section (Image + Text Side by Side) ============ */
.service-box {
  background: #ffffff;
  border-radius: 12px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
  padding: 40px;
  margin: 40px 0;
}

.service-box .row {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
}

.col-md-6 {
  flex: 1;
  min-width: 300px;
}

.service-image {
  width: 100%;
  height: auto;
  border-radius: 10px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-image:hover {
  transform: translateY(-20px) scale(1.02);
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.25);
}


.section-title h3 {
  font-size: 30px;
  font-weight: bold;
  color: #0d0d0eff;
  align-items: center;
}

.section-title i {
  color: #007b8f;
  margin-right: 10px;
}

.text p {
  font-size: 16px;
  color: #444;
  line-height: 1.7;
}

.content-list {
  padding-left: 20px;
  margin-top: 20px;
  list-style: none;
}

.content-list li {
  font-size: 16px;
  margin-bottom: 10px;
  position: relative;
  color: #333;
}

.content-list li i {
  color: #1c2a4d;
  margin-right: 10px;
}

.btn-style-one {
  display: inline-block;
  background: #0c4f21;
  color: #ffffff;
  border: none;
  padding: 10px 25px;
  margin-top: 20px;
  border-radius: 30px;
  transition: 0.3s ease;
}

.btn-style-one:hover {
  background-color: #2c643eff;
  text-decoration: none;
  color: #f8c301;
}

.items-container {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
}

.item {
  width: 340px;
  border: 5px solid #eee;
  border-radius: 8px;
  overflow: hidden;
  background: #fff;
  transition: box-shadow 0.3s, transform 0.3s ease; /* Added transform */
}

.item:hover {
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
  transform: translateY(-10px); /* Moves item 10px up */
}
.img_holder {
  width: 100%;
  height: 270px; /* Increased image height */
  overflow: hidden;
  position: relative;
}

.img_holder img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease, filter 0.4s ease;
}

.img_holder:hover img {
  transform: scale(1.1);
  filter: brightness(0.9);
}

.image-content {
  padding: 15px;
}

.image-content h6 {
  font-size: 20px;
  margin: 10px 0;
  color: #1c2a4d;
}

.image-content p {
  font-size: 17px;
  color: #555;
}

.accordion-section .accordion-holder {
  margin-top: 60px;
}

.accordion-section .accordion-holder .panel-default {
  box-shadow: none;
  border-radius: 0;
}

.accordion-section .accordion-holder .panel-default .panel-heading {
  background: #fff;
  padding: 0;
  border-radius: 0;
}

.accordion-section .accordion-holder .panel-default .panel-heading h4 {
  position: relative;
}

.accordion-section .accordion-holder .panel-default .panel-heading h4 a {
  font-weight: bold;
  font-family: "Source Sans Pro", sans-serif;
  font-size: 20px;
  display: block;
  background: #0c4f21;
  color: #fff;
  padding: 20px 30px;
  transition: all .3s ease;
}

.accordion-section .accordion-holder .panel-default .panel-heading h4 a:before {
  content: '\f106';
  position: absolute;
  right: 20px;
  font-family: FontAwesome;
}

.accordion-section .accordion-holder .panel-default .panel-heading h4 a.collapsed {
  background: #fff;
  color: #000;
}

.accordion-section .accordion-holder .panel-default .panel-heading h4 a.collapsed:before {
  content: '\f107';
  position: absolute;
  font-family: FontAwesome;
}

.accordion-section .accordion-holder .panel-default .panel-heading h4 a.collapsed:hover {
  color: #76da87ff;
}

.accordion-section .accordion-holder .panel-default .panel-body {
  padding: 20px 30px;
}
.service-overview .content-block h2::before {
  display: none !important;
  content: none !important;
  width: 0 !important;
  height: 0 !important;
  background: none !important;
}

</style>

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  
<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/image4.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>service</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>service</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="service-overview section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content-block">
                    <h2><i class="fa fa-shield-alt" style="color:#007b8f; margin-right:10px;"></i>Empowering You With Trusted Medical Knowledge<br></h2>
                    <p>At YouCare, we believe better health starts with better understanding.
                       That’s why we provide expert-reviewed, easy-to-follow information to help you make informed decisions about your care.
                    </p>
                    <ul>
                        <li><i class="fa fa-caret-right"></i>Learn about symptoms, conditions, and treatments</li>
                        <li><i class="fa fa-caret-right"></i>Understand procedures before your appointment</li>
                        <li><i class="fa fa-caret-right"></i>Stay updated with wellness tips and guides</li>
                        <li><i class="fa fa-caret-right"></i>Access resources written by medical professionals</li>
                    </ul>
                    <a href="appointment.php" class="btn btn-style-one">Appoint</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion-section">
                    <div class="accordion-holder">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="fa fa-heartbeat" style="color:#1c2a4d; margin-right:8px;"></i>
                                            Why Choose YouCare for Your Medical Needs?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                       At YouCare, we go beyond just appointments — we’re here to transform your healthcare journey.
                                        From instant online bookings to secure access to your medical records, 
                                        our system is designed to make healthcare simple, safe, and stress-free. <br>

                                       ✔️ Trusted by thousands of patients and doctors <br>
                                       ✔️ 24/7 access to telehealth consultations <br>
                                       ✔️ Seamless appointment scheduling <br>
                                       ✔️ Accurate and confidential health record management <br>
                                       ✔️ Fast diagnostic support and specialist referrals <br>

                                       With YouCare, you're not just booking a service — 
                                       you're choosing peace of mind, expert care, and a healthier future.
                                    </div>
                                </div>
                            </div>
                       <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                          aria-controls="collapseTwo">
                                            <i class="fa fa-clock-o" style="color:#1c2a4d; margin-right:8px;"></i>
                                              Visiting Hours at YouCare Wellness Centre
                                          </a>
                                        </h4>
                                </div>
                                       <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                                  We value both your time and your care experience. 
                                                  Our visiting hours are designed to ensure comfort, safety, and respect for every patient.

                                                  <br><br>
                                           - <strong>🕒 Timings:</strong><br>
                                           - <strong>Monday – Friday:</strong> 11:00 AM – 1:00 PM & 5:00 PM – 7:00 PM<br>
                                           - <strong>Weekends & Holidays:</strong> 11:00 AM – 1:00 PM Only<br>
                                           - <strong>Attendants (Family Only):</strong> 24/7 stay allowed with hospital pass<br>

                                           <br>
                                                  <strong>✅ Guidelines:</strong><br>
                                                  - Only one attendant per patient is permitted<br>
                                                    - Children under 12 and sick visitors should avoid visiting<br>
                                                 - ICU/CCU: Visits allowed with doctor’s approval<br>
                                          - Masks and hand sanitizing are required<br>

                                            <br>
                                    <em>For emergency or special permissions, kindly contact our nursing staff.</em>
                             </div>
                         </div>
                     </div>

                    <div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingThree">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <i class="fa fa-users" style="color:#1c2a4d; margin-right:8px;"></i>
        How many visitors are allowed?
      </a>
    </h4>
  </div>
  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
    <div class="panel-body" style="color:#444; font-size:15px; line-height:1.6;">
      <ul style="list-style:none; padding-left:0;">
        <li><i class="fa-solid fa-check" style="color:#1c2a4d; margin-right:8px;"></i><strong>General Wards:</strong> Maximum 2 visitors per patient during visiting hours.</li>
        <li><i class="fa-solid fa-check" style="color:#1c2a4d; margin-right:8px;"></i><strong>General Wards:</strong> Maximum 2 visitors per patient during visiting hours.</li>
        <li><i class="fa-solid fa-check" style="color:#1c2a4d; margin-right:8px;"></i><strong>Private Rooms:</strong> 1-2 visitors allowed, subject to doctor’s approval.</li>
        <li><i class="fa-solid fa-check" style="color:#1c2a4d; margin-right:8px;"></i><strong>ICU / HDU / CCU:</strong> Visits strictly limited; allowed only with prior permission.</li>
        <li><i class="fa-solid fa-triangle-exclamation" style="color:#1c2a4d; margin-right:8px;"></i>Children under 12 years are not allowed to visit for safety reasons.</li>
      </ul>
      <p style="margin-top:15px; font-style:italic; color:#666;">
        Visitors are requested to wear masks, sanitize their hands, and maintain silence to ensure a peaceful environment.<br>
        For emergency visits or special cases, please contact our nursing staff or front desk.
      </p>
    </div>
  </div>
</div>
</section>
<section class="service-section">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Left: Image -->
      <div class="col-md-6">
        <img src="images/image3.jpg" alt="Pulmonary Service" class="img-fluid service-image">
      </div>

      <!-- Right: Text -->
      <div class="col-md-6">
        <div class="contents">
          <div class="section-title">
            <h3><i class="fa-solid fa-heart-pulse"></i> Pulmonary</h3>
          </div>
          <div class="text">
            <p>Our pulmonary unit provides cutting-edge diagnostics and treatment plans for respiratory issues, asthma, and chronic lung conditions.</p>
            <p>Patients are cared for by specialized pulmonologists using modern technology in a safe and compassionate environment.</p>
          </div>
          <ul class="content-list">
            <li><i class="fa fa-check-circle"></i> Whitening is among the most popular dental</li>
            <li><i class="fa fa-check-circle"></i> Teeth cleaning is part of oral hygiene</li>
            <li><i class="fa fa-check-circle"></i> We offer advanced gum treatment</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>


<!--Service Section-->
<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3><i class="fa-solid fa-user-doctor"></i> YOUcare
                <span>Services</span>
            </h3>
            <p>YouCare is committed to providing compassionate, high-quality healthcare services with a focus on patient comfort and convenience. 
              From easy appointment bookings to expert medical consultations, we care for your health—every step of the way.</p>
        </div>
        <div class="row items-container clearfix">
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.php">
                            <img src="images/image5.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <h6>General treament</h6>
                        <a href="service.php">
                        </a>
                        <p>Treats common illnesses like flu, fever, cough
                        Provides basic health checkups and prescriptions.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/image6.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="service.html">
                            <h6>Cardiologist</h6>
                        </a>
                        <p>Treats heart problems (e.g., chest pain, heart attack)
                             Performs ECG, ECHO, and other heart-related tests</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="images/service.html">
                            <img src="images/image7.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="service.html">
                            <h6>Dermatologist</h6>
                        </a>
                        <p>Treats skin, hair, and nail problems
                        Handles acne, eczema, rashes, and skin allergies</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/image8.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="service.html">
                            <h6>Pediatrician</h6>
                        </a>
                        <p>Treats infants, children, and teenagers
                         Manages vaccinations and child growth</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/image9.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="service.html">
                            <h6>orthopedic</h6>
                        </a>
                        <p>Back & joint pain relief
                          Bone fractures treatment
                          Arthritis care

Muscle & sports injury support.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/image11.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="service.html">
                            <h6>Dentist</h6>
                        </a>
                        <p>Treats teeth and gum problems
                         Performs cleaning, fillings, and root canals</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/image12.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="service.html">
                            <h6>Ophthalmologist</h6>
                        </a>
                        <p>Treats eye problems and vision issues
                         Performs eye surgery if needed</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/image13.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="service.html">
                            <h6>Pulmonologist</h6>
                        </a>
                        <p>Treats lung diseases (e.g., asthma, TB, COPD)
                           Conducts breathing tests</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/image10.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="service.html">
                            <h6>Neurologist</h6>
                        </a>
                        <p>Treats brain and nervous system disorders
                           Deals with epilepsy, stroke, headaches</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service Section--> 

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
<?php include "footer.php"?>

</body>

</html>
