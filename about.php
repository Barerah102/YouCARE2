<?php include 'header.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>About Us | YouCare Medical Services</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
<style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Helvetica Neue', sans-serif;
      background-color: #fff;
      color: #222;
       
  
    }
.hero {
      background: url('images/doc1.PNG') no-repeat center center/cover;
      height: 500px;
      display: flex;
      align-items: flex-end;
      padding: 20px 150px;
      color: #111;
    }

    .hero .hero-text {
  margin-bottom: 150px; /* move it upward by increasing bottom margin */
}
 .hero h1 {
      font-size: 90px;
      font-weight: 800;
      color:  #022c00f1;
      text-decoration: underline;
      font-family: 'Playfair Display', serif;
    
    }

    .breadcrumb {
      font-size: 25px;
      color: black;
      margin-left: 90px;
    }

    .content-section {
      display: flex;
      justify-content: center;
      align-items: stretch;
      padding: 80px 80px;
      flex-wrap: wrap;
    background-color: #f9f9f9;
    gap:60px;
    }

    .content-section.reverse {
      flex-direction: row-reverse;
    }

    .content-text{
   flex: 1;
  min-width: 300px;
  max-width: 600px;
  padding: 30px;
  min-height: 550px; 
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.content-image {
  flex: 1;
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.image-wrapper {
  width: 100%;
  max-width: 600px;
  aspect-ratio: 4 / 3; 
  overflow: hidden;
  border-radius: 8px;
}

.image-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  border-radius: 8px;
}


    .content-text h2 {
      font-size: 40px;
      margin-bottom: 20px; 
  color: #024d01f1;
  text-decoration: underline;
  text-align:center;
    }

    .content-text p {
      margin: 0 auto;
    font-size: 16px;
      line-height: 1.8;
      color: #555;
      text-align: center;
    
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      color:white;
      background-color: #036f01f1;
      text-decoration: none;
      border-radius: 4px;
      font-size: 14px;
    }
    .content-image {
      flex: 1;
      padding: 20px;
    }

    .content-image img {
     width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 8px;
  display:block;
}
    @media (max-width: 768px) {
      .content-section {
        flex-direction: column;
        padding: 30px 20px;
      }

      .content-section.reverse {
        flex-direction: column;
      }

      .content-text,
      .content-image {
        padding: 10px 0;
      }
    }
.content-section.reverse .content-image{
width: 100%;
max-width: 800px;
border-radius: 8px;
height:auto;
position: relative;
}

.content-section.reverse .content-text {
}
.content-section.reverse .content-text h2 {
}
.gallery.bg-gray {
  padding: 100px 20px;
  background: linear-gradient(to right, #f2f6f9, #e4ecef); /* soft medical gradient */
  font-family: 'Quicksand', 'Helvetica Neue', sans-serif;
}

.section-title {
  max-width: 700px;
  margin: 0 auto 60px;
  text-align: center;
  position: relative;
}

.section-title h3 {
  font-size: 40px;
  font-weight: 700;
  color: #024d01f1; /* rich green tone for medical branding */
  margin-bottom: 10px;
  text-transform: uppercase;
  letter-spacing: 1px;
  position: relative;
  display: inline-block;
  font-family: 'Playfair Display', serif;
}

.section-title h3 span {
  display: block;
  font-weight: 400;
  font-size: 22px;
  color: #444;
  text-transform: none;
  letter-spacing: normal;
  margin-top: 8px;
  font-family: 'Quicksand', sans-serif;
}

.section-title p {
  font-size: 16px;
  line-height: 1.8;
  color: #666;
  max-width: 600px;
  margin: 15px auto 0;
  font-family: 'Roboto', sans-serif;
}

/* Decorative line under the title */
.section-title h3::after {
  content: '';
  width: 60px;
  height: 3px;
  background-color: #57b8b9; /* soft blue-green for accent */
  display: block;
  margin: 20px auto 0;
  border-radius: 3px;
}
.image-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
  max-width: 1100px;
  margin: 0 auto;
}

.image-grid img {
  width: 100%;
  height: 240px;
  object-fit: cover;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  transition: transform 0.3s ease;
}

.image-grid img:hover {
  transform: scale(1.03);
}
/* === Why Choose Us Section === */
    .why-choose {
      background: #ffffff;
      padding: 80px 20px;
      text-align: center;
    }

    .why-choose h2 {
      font-size: 36px;
      color: #024d01f1;
      margin-bottom: 30px;
      font-family: 'Playfair Display', serif;
    }

    .features {
      max-width: 1100px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
    }

    .feature-box {
      background: #f0f7f4;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.06);
      transition: 0.3s ease;
    }

    .feature-box:hover {
      transform: translateY(-5px);
    }

    .feature-box h4 {
      font-size: 20px;
      margin-bottom: 12px;
      color: #036f01f1;
    }

    .feature-box p {
      font-size: 15px;
      color: #555;
      line-height: 1.6;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 38px;
      }
    }
   


   
  </style>
</head>
<body>
  <!-- Hero Section -->
 <section class="hero">
    <div class="hero-text">
        <h1>About Us</h1>
      <div class="breadcrumb">Home / <span style="color: #036602f1;">About Us</span></div>
    </div>
  </section>

  <!-- Section 1 -->
  <section class="content-section">
    <div class="content-image">
     <div class="image-wrapper">
      <img src="images/pic2.png" alt="Model Face">
    </div>
    </div>
    <div class="content-text">
      <h2>Our Story</h2>
<p>Our departments work diligently to ensure the best possible care for our patients, offering expertise and compassion to address their unique medical needs and promote their health and well-being.<br>
At YouCare, our mission is to restore health through compassionate, cutting‑edge care, delivered with dignity and respect.<br>
We envision a community where every patient feels seen, heard, and cared for. Our values—Empathy, Excellence, Holistic Healing, Innovation, and Community Connection—guide every moment of every day.<br>
A suite of services founded on expertise and empathy:<br>
    * Emergency, Inpatient & Outpatient Care <br>
    *Specialized centers: Cardiology, Oncology, Maternity, Pediatrics <br>
    *Community wellness initiatives & Virtual Health Programs.</p>
    </div>
  </section>

  <!-- Section 2 -->
  <section class="content-section reverse">
    <div class="content-image">
    <div class="image-wrapper">
      <img src="images/pic1.PNG" alt="Products on table">
    </div>
    </div>
    <div class="content-text">
      <h2>Healing Hearts, Joints, and Lungs with Precision Care</h2>
      <p>
        Our hospital provides leading-edge medical services across several departments to ensure holistic healing. Our experienced staff work compassionately to deliver personalized treatments tailored to your unique needs.<br><br>
        <strong>Cardiology:</strong> Non-invasive diagnostics, interventional care, and preventive heart wellness programs.<br>
        <strong>Dentistry:</strong> Advanced dental care, from routine checkups to cosmetic and surgical procedures.<br>
        <strong>Orthopedics:</strong> Expert orthopedic surgery, joint replacement, and sports injury rehab.<br>
        <strong>Respiratory Care:</strong> Pulmonology services for asthma, COPD, sleep apnea, and advanced lung function testing.
      </p> 
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="why-choose">
    <h2>Why Choose Us?</h2>
    <div class="features">
      <div class="feature-box">
        <h4>Modern Facilities</h4>
        <p>Equipped with cutting-edge technology to ensure the best diagnosis and care across all departments.</p>
      </div>
      <div class="feature-box">
        <h4>Expert Doctors</h4>
        <p>Our specialists are leaders in their fields, committed to continuous education and clinical excellence.</p>
      </div>
      <div class="feature-box">
        <h4>Patient-Centered Care</h4>
        <p>We prioritize empathy, transparency, and respect — every patient is treated with dignity and clarity.</p>
      </div>
      <div class="feature-box">
        <h4>Holistic Healing</h4>
        <p>Beyond treatment, we focus on wellness, nutrition, and mental health support for full recovery.</p>
      </div>
    </div>
  </section>

<!------Gallery Section------->
<section class="gallery bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Collected Shots
                        <span>of Our Hospital</span>
                    </h3>
                    <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
                        <br>iews. Iterative approaches to corporate strategy...</p>
                
<div class="image-grid">
  <img src="https://plus.unsplash.com/premium_photo-1661506746999-fff3a24b48e4?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDI4fHx8ZW58MHx8fHx8" alt="Image 1">
  <img src="https://plus.unsplash.com/premium_photo-1661698586549-00580fb09a6b?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDczfHx8ZW58MHx8fHx8" alt="Image 2">
  <img src="https://plus.unsplash.com/premium_photo-1661779739047-c5c27cf8ebac?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDUwfHx8ZW58MHx8fHx8" alt="Image 3">
  <img src="https://plus.unsplash.com/premium_photo-1661600513061-80f4a662375d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image 4">
  <img src="https://plus.unsplash.com/premium_photo-1661729571651-bbf946a93147?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDY2fHx8ZW58MHx8fHx8" alt="Image 5">
  <img src="https://plus.unsplash.com/premium_photo-1661458147252-85d21d903fe3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image 6">
</div>
 </div>
</div>
</section>

</body>

</html>
<?php include 'footer.php';
?>