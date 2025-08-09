<?php include "db.php" ?>
<?php include("header.php"); ?> 
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


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
<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
    <!-- Slider Item -->
    <div class="slider-item slide1" style="background-image:url(images/slider/surgeon.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content style text-center">
                        <h2 class="text-white text-bold mb-2">Our Best Doctors</h2>
                        <p class="tag-text mb-5">Trusted hands for critical care. Book with our expert Doctors across cities!</p>
                        <a href="index.php#doctors" class="btn btn-main btn-white">explore</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(images/slider/m.avif);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start-->
                    <div class="content style text-right">
                        <h2 class="text-white">We Care About <br>Your Health</h2>
                        <p class="tag-text">Expert care, from people who care. </p>
                        <a href="about.php" class="btn btn-main btn-white">about us</a>
                    </div>
                    <!-- Slide Content End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(images/slider/care.avif)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content text-center style">
                        <h2 class="text-white text-bold mb-2">Best Medical Services</h2>
                        <p class="tag-text mb-5">From trusted doctors to advanced care <br> your health is in good hands.</p>
                        <a href="signup.php" class="btn btn-main btn-white">Take Appoinment</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
</div>

<!--====  End of Page Slider  ====-->

<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-block" style="flex: 1; padding: 20px; border-right: 1px solid white;">
                    <div class="emmergency item" style="flex: 1; padding: 20px; border-right: 1px solid white;">
                        <i class="fa fa-phone"></i>
                        <h2>Emegency Cases</h2>
                        <a href="#">1-800-700-6200</a>
                        <p>Call anytime for urgent care.<br> we're always ready.</p>
                    </div>
                    <div class="top-doctor item" style="flex: 1; padding: 20px; border-right: 1px solid white;">
                        <i class="fa fa-stethoscope"></i>
                        <h2>24 Hour Service</h2>
                        <p>Available round the clock for your urgent medical needs. Just a call away anytime, anywhere.</p>
                    </div>
                    <div class="working-time item">
                        <i class="fa fa-hourglass-o"></i>
                        <h2>Working Hours</h2>
                        <ul class="w-hours">
                            <li>Mon - Fri  - <span>8:00 - 17:00</span></li>
                            <li>Mon - Fri  - <span>8:00 - 17:00</span></li>
                            <li>Mon - Fri  - <span>8:00 - 17:00</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--about section-->
<section class="feature-section section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="image-content">
					<div class="section-title text-center">
						<h3>Best Features
							<span>of YouCARE</span>
						</h3>
						<p>Seamless doctor booking, expert care, and trusted service — all in one place.</p>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
											<img src="images/resource/1.png" alt="">
										</a>
									</figure>
								</div>
								<h6>Orthopedics</h6>
								<p>We provide expert care for bones, joints, and spine conditions.
                                   Whether it's a fracture, arthritis, or a sports injury, our specialists
                                   use advanced techniques to ensure faster recovery.
                                    Live pain-free and move with confidence again.

                                 </p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
											<img src="images/resource/2.png" alt="">
										</a>
									</figure>
								</div>
								<h6>Diaginostic</h6>
								<p>Our diagnostic center offers reliable and quick results.
                                   From blood tests to full-body scans, we ensure accuracy at every step.
                                   Early detection plays a vital role in treatment success.
                                   Trust us for clear answers to your health concerns.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
											<img src="images/resource/3.png" alt="">
										</a>
									</figure>
								</div>
								<h6>Psycology</h6>
								<p>Your mental well-being is just as important as your physical health.
                                   Our psychology experts provide a safe space to talk and heal.
                                   Whether you're facing anxiety, stress, or trauma, we’re here.
                                   Let's work together to bring peace to your mind.

                                 </p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
											<img src="images/resource/4.png" alt="">
										</a>
									</figure>
								</div>
								<h6>General Treatment</h6>
								<p>We offer comprehensive care for everyday health concerns.
                                   From seasonal flu to long-term conditions, our doctors are ready.
                                    With proper diagnosis and medication, we help you feel better fast.
                                    Stay healthy with our trusted general treatment services.

                                   </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End about section-->

<!--Start about us area-->
<section class="service-tab-section section">
    <div class="outer-box clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <div class="tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#cardiology"  data-toggle="tab">Cardiology</a>
                            </li>
                            <li role="presentation">
                                <a href="#orthopedic" data-toggle="tab">orthopedic</a>
                            </li>
                            <li role="presentation">
                                <a href="#sonogram" data-toggle="tab">sonogram</a>
                            </li>
                            <li role="presentation">
                                <a href="#x-ray" data-toggle="tab">x-ray</a>
                            </li>
                            <li role="presentation">
                                <a href="#diagnostic" data-toggle="tab">diagnostic</a>
                            </li>
                        </ul>
                    </div>
                 <!--Start single tab content-->
<div class="tab-content">
    <div class="service-box tab-pane fade in active row" id="cardiology">
        <div class="col-md-6">
            <img class="img-responsive service-img" src="images/services/cardiology.jpg" alt="cardiology-service-image">
        </div>
        <div class="col-md-6">
            <div class="contents">
                <div class="section-title">
                    <h3>Cardiology</h3>
                </div>
                <div class="text">
                    <p>Our cardiology department specializes in diagnosing and treating heart-related conditions with modern techniques and care plans tailored to each patient’s needs.</p>
                    <p>We focus on early detection, advanced procedures, and continuous monitoring to ensure your heart health remains strong and steady.</p>
                </div>
                <ul class="content-list">
                    <li>
                        <i class="fa fa-dot-circle-o"></i>ECG and stress tests for accurate diagnosis</li>
                    <li>
                        <i class="fa fa-dot-circle-o"></i>Personalized treatment for heart conditions</li>
                    <li>
                        <i class="fa fa-dot-circle-o"></i>Preventive heart care and lifestyle guidance</li>
                </ul>
               
            </div>
        </div>
    </div>
<!--End single tab content-->

                        <!--Start single tab content-->
<div class="service-box tab-pane fade in" id="orthopedic">
  <div class="col-md-6">
    <img class="img-responsive service-img" src="images/services/ortho.jpg" alt="service-image">
  </div>
  <div class="col-md-6">
    <div class="contents">
      <div class="section-title">
        <h3>Orthopedic</h3>
      </div>
      <div class="text">
        <p>Our orthopedic department provides expert care for bone, joint, and spine conditions using the latest techniques in diagnostics and surgery.</p>
        <p>We specialize in fracture treatment, joint replacements, and sports injury recovery for all age groups.</p>
      </div>
      <ul class="content-list">
        <li><i class="fa fa-dot-circle-o"></i>Joint replacement and fracture repair</li>
        <li><i class="fa fa-dot-circle-o"></i>Arthritis management and physiotherapy</li>
        <li><i class="fa fa-dot-circle-o"></i>Advanced orthopedic diagnostics</li>
      </ul>
      
    </div>
  </div>
</div>
<!--End single tab content-->

                        <!--Start single tab content-->
<div class="service-box tab-pane fade in" id="sonogram">
  <div class="col-md-6">
    <img class="img-responsive service-img" src="images/services/sonogram.jpg" alt="service-image">
  </div>
  <div class="col-md-6">
    <div class="contents">
      <div class="section-title">
        <h3>Sonogram</h3>
      </div>
      <div class="text">
        <p>We offer high-quality sonography services to help diagnose internal conditions using real-time imaging.</p>
        <p>Our skilled technicians ensure safe, accurate results for pregnancy care, abdominal scans, and more.</p>
      </div>
      <ul class="content-list">
        <li><i class="fa fa-dot-circle-o"></i>Pregnancy and fetal scans</li>
        <li><i class="fa fa-dot-circle-o"></i>Abdominal and pelvic ultrasounds</li>
        <li><i class="fa fa-dot-circle-o"></i>Non-invasive and radiation-free imaging</li>
      </ul>
     
    </div>
  </div>
</div>
<!--End single tab content-->

                        <!--Start single tab content-->
<div class="service-box tab-pane fade in" id="x-ray">
    <div class="col-md-6">
        <img class="img-responsive service-img" src="images/services/xray.jpg" alt="service-image">
    </div>
    <div class="col-md-6">
        <div class="contents">
            <div class="section-title">
                <h3>X-Ray</h3>
            </div>
            <div class="text">
                <p>Our X-ray services offer fast and accurate imaging to detect fractures, joint issues, chest infections, and other bone-related concerns.</p>
                <p>We use advanced digital radiography for quicker results and improved patient safety through minimal radiation exposure.</p>
            </div>
            <ul class="content-list">
                <li>
                    <i class="fa fa-dot-circle-o"></i>Digital X-rays for clear and detailed imaging</li>
                <li>
                    <i class="fa fa-dot-circle-o"></i>Quick diagnostics for bone and chest issues</li>
                <li>
                    <i class="fa fa-dot-circle-o"></i>Safe and efficient with low radiation dose</li>
            </ul>
         
        </div>
    </div>
</div>
<!--End single tab content-->

                        <!--Start single tab content-->
<div class="service-box tab-pane fade in" id="diagnostic">
    <div class="col-md-6">
        <img class="img-responsive service-img" src="images/services/dig.jpg" alt="service-image">
    </div>
    <div class="col-md-6">
        <div class="contents">
            <div class="section-title">
                <h3>Diagnostic</h3>
            </div>
            <div class="text">
                <p>Our diagnostic services provide accurate and early detection of diseases through advanced lab testing and imaging technologies.</p>
                <p>We ensure timely results and comprehensive reports to support doctors in planning effective treatments for patients.</p>
            </div>
            <ul class="content-list">
                <li>
                    <i class="fa fa-dot-circle-o"></i>Blood tests, urine tests, and pathology reports</li>
                <li>
                    <i class="fa fa-dot-circle-o"></i>Advanced imaging like ultrasound & CT scan</li>
                <li>
                    <i class="fa fa-dot-circle-o"></i>Reliable results for fast and accurate diagnosis</li>
            </ul>
        </div>
    </div>
</div>
<!--End single tab content-->


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End about us area-->

<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our <span>Services</span></h3>
            <p>We offer a wide range of medical services to ensure your health is always in safe hands. <br>
            From diagnostics to specialized treatments—your care is our top priority.</p>
        </div>
        <div class="row items-container clearfix">
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.php">
                            <img src="images/gallery/1.jpg" alt="Cardiology" class="img-responsive uniform-service-img">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Expert Heart Care</span>
                        <a href="service.php">
                            <h6>Cardiology</h6>
                        </a>
                        <p>Advanced diagnostics and personalized heart treatment from experienced cardiologists for better outcomes and care.</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.php">
                            <img src="images/gallery/2.jpg" alt="Orthopedics" class="img-responsive uniform-service-img">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Bone & Joint Care</span>
                        <a href="service.php">
                            <h6>Orthopedics</h6>
                        </a>
                        <p>Comprehensive treatment for bone, joint, and spine conditions to keep you moving pain-free.</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.php">
                            <img src="images/gallery/3.jpg" alt="Psychology" class="img-responsive uniform-service-img">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Mental Health Support</span>
                        <a href="service.php">
                            <h6>Psychology</h6>
                        </a>
                        <p>Confidential counseling and therapy sessions for emotional and mental well-being, stress management, and personal growth support..</p>
                    </div>
                </div>
            </div>

            <div class="item">
    <div class="inner-box">
        <div class="img_holder">
            <a href="service.php">
                <img src="images/gallery/9.jpg" alt="Pediatrics" class="img-responsive uniform-service-img">
            </a>
        </div>
        <div class="image-content text-center">
            <span>Caring for Little Ones</span>
            <a href="service.php">
                <h6>Pediatrics</h6>
            </a>
            <p>Dedicated care for infants, children, and teens to support their healthy growth and development.</p>
        </div>
    </div>
</div>


            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.php">
                            <img src="images/gallery/4.jpg" alt="X-Ray" class="img-responsive uniform-service-img">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Clear Results</span>
                        <a href="service.php">
                            <h6>X-Ray</h6>
                        </a>
                        <p>Quick and safe imaging to detect bone fractures, chest issues, and internal conditions.</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.php">
                            <img src="images/gallery/6.jpg" alt="General Treatment" class="img-responsive uniform-service-img">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Primary Care</span>
                        <a href="service.php">
                            <h6>General Treatment</h6>
                        </a>
                        <p>From common illnesses to seasonal care—your first step to better health starts here with trusted doctors and timely support.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service Section-->


<!--team section-->
<section class="team-section section">
    <div class="container" id="doctors">
        <div class="section-title text-center">
            <h3>Meet Our Trusted
                <span>Specialists</span>
            </h3>
            <p>Our team of certified and compassionate doctors is here to provide quality care, <br> ensuring your health is always the top priority.</p>
        </div>
        <div class="row">
<div class="col-md-4 col-sm-6">
                <div class="team-member">
                    <img src="images/team/doctor-1.jpg" alt="doctor" class="img-responsive" style="height: 320px;">
                    <div class="contents text-center">
                        <h4>Dr. Jonathan Blake</h4>
                        <p>Expert in General Medicine with over 10 years of patient-centered care experience. He is best in his work .</p>
                    </div>
                </div>
            </div>
<div class="col-md-4 col-sm-6">
                <div class="team-member">
                    <img src="images/team/doctor-2.jpg" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Sophia Lawson</h4>
                        <p>Orthopedic specialist helping patients recover from bone and joint disorders effectively.</p>
                    </div>
                </div>
            </div>
<div class="col-md-4 col-sm-6">
                <div class="team-member">
                    <img src="images/team/doctor-3.jpg" alt="doctor" class="img-responsive" height="350px">
                    <div class="contents text-center">
                        <h4>Dr. Micheal Scott</h4>
                        <p>Licensed psychologist expert and focused on mental wellness through therapy and counseling.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End team section-->


<!--testimonial-section-->
<section class="testimonial-section" style="background: url(images/testimonials/1.jpg);">
    <div class="container">
        <div class="section-title text-center">
            <h3>What Our
                <span>Patients Says</span>
            </h3>
        </div>
        <div class="testimonial-carousel">
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/2.jpg" alt="">
                        </figure>
                    </div>
                    <h6>Olivia Turner</h6>
                    <p>YouCARE made my appointment easy, fast, and stress-free. The doctors explained everything clearly. I feel healthier and confident now.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/4.jpg" alt="">
                        </figure>
                    </div>
                    <h6>David Warner</h6>
                    <p>The staff at YouCARE is friendly, kind, and professional. My diagnosis was quick and accurate. I truly felt cared for here.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/6.jpg" alt="">
                        </figure>
                    </div>
                    <h6>James Carter</h6>
                    <p>Booking online was quick, and I didn’t have to wait long. The place is clean, and the doctors are really good at listening.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/7.jpg" alt="">
                        </figure>
                    </div>
                    <h6>Adam Rose</h6>
                    <p>I was nervous visiting a new clinic, but YouCARE changed that. Everything was well-organized, and the service was excellent throughout.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/5.jpg" alt="">
                        </figure>
                    </div>
                    <h6>Noah Walker</h6>
                    <p>From check-in to check-out, everything was smooth. The doctor explained my X-ray results in detail. I highly recommend YouCARE!</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/3.jpg" alt="">
                        </figure>
                    </div>
                    <h6>Emma Collins</h6>
                    <p>My child was treated gently during the pediatric checkup. The doctor was patient and made her smile. We’ll definitely come again.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/1.png" alt="">
                        </figure>
                    </div>
                    <h6>Adam Rose</h6>
                     <p>Very clean, modern clinic with helpful staff. My diagnostic test results came fast. YouCARE made the whole process feel comfortable.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/2.png" alt="">
                        </figure>
                    </div>
                    <h6>Liam Parker</h6>
                    <p>The psychologist here really helped me feel supported. I’ve been feeling more positive and calm. Therapy made a big difference.</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/3.png" alt="">
                        </figure>
                    </div>
                    <h6>Emily Carter</h6>
                    <p>I had a joint issue and the orthopedic doctor helped so much. After just a few visits, I was walking without pain again.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End testimonial-section-->

<!-- Contact Section -->
<section class="appoinment-section section">
  <div class="container" id="contact">
    <div class="row">
      
      <!-- FAQ Column -->
      <div class="col-md-6 col-sm-12 col-xs-12" id="faq">
        <div class="accordion-section">
          <div class="section-title">
            <h3>FAQ</h3>
          </div>
          <div class="accordion-holder">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                      aria-expanded="true" aria-controls="collapseOne">
                      Why should I choose YouCARE?
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    YouCARE connects you with certified doctors and specialists through a seamless booking system. Our platform ensures fast access to appointments, lab services, and digital health records—making your care personalized, timely, and secure.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                      href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      What are the center’s visiting hours?
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    Visiting hours at YouCARE partner clinics and hospitals usually run between 8:00 AM to 17:00 PM, Monday to Saturday. Some specialists may have extended hours or weekend availability, which will be shown during appointment booking.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                      href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How many visitors are allowed?
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    For most outpatient visits, only one attendant is allowed. In inpatient or diagnostic areas, hospital-specific policies may apply. Please confirm with the clinic for any restrictions.
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Contact Form Column -->
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="contact-area">
          <section class="section contact">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <!-- Address Info -->
                  <div class="address-block">
                    <div class="media">
                      <i class="fa fa-map-o"></i>
                      <div class="media-body">
                        <h3>Location</h3>
                        <p><a href="branches.php">View All Branches Locations</a></p>
                      </div>
                    </div>
                    <div class="media">
                      <i class="fa fa-phone"></i>
                      <div class="media-body">
                        <h3>Phone</h3>
                        <p>(202) 555-0104<br>(305) 555-0101</p>
                      </div>
                    </div>
                    <div class="media">
                      <i class="fa fa-envelope-o"></i>
                      <div class="media-body">
                        <h3>Email</h3>
                        <p>YouCare12@Gmail.com<br>info@cleanxer.com</p>
                      </div>
                    </div>
                  </div>
                </div>



              </div>
            </div>
          </section>
        </div>
      </div>

    </div>
  </div>
</section>



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

<?php include "footer.php"; ?>
</body>

</html>

