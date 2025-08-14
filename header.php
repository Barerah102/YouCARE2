<!DOCTYPE html>
<html>
<style>
/* 🛠️ Make Bootstrap 3 navbar-default work in Bootstrap 4 */
.navbar-default {
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 0;
  margin-bottom: 0;
  min-height: 60px;
}

.navbar-default .navbar-nav > li > a {
  color: #333;
  padding: 15px 20px;
  display: block;
}

.navbar-default .navbar-brand {
  padding: 10px 15px;
  height: auto;
}

.navbar-toggle {
  border: none;
  background: transparent;
  margin-top: 12px;
}

.icon-bar {
  background-color: #333;
}

.navbar-collapse {
  border-top: 1px solid #ddd;
  box-shadow: none;
}

@media (min-width: 768px) {
  .navbar-collapse {
    display: flex !important;
    justify-content: flex-end;
  }

  .navbar-nav {
    flex-direction: row;
  }

  .navbar-nav > li {
    margin-left: 15px;
  }
}

</style>

<head>
  <meta charset="utf-8">
  <title>YouCare | Your Trusted Medical & Health Care Partner</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
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




<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <a class="navbar-brand" href="index.php">
    <img src="logo.png" alt="YouCARE Logo" style="height: 50px;">
  </a>
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
          </div>
            <!-- Collect the na links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active">
    <a href="index.php">Home</a>
</li>
<li>
    <a href="about.php">About</a>
</li>
<li>
    <a href="precautions.php">Precautions</a>
</li>
<li>
    <a href="signup.php">Appointment</a>
</li>
<li>
        <a href="view_appointment.php">View Appointments</a>
    </li>
<li>
    <a href="contact.php">Contact</a>
</li>
<li>
    <a href="service.php">Services</a>
</li>

                        <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a href="#">Action</a>
                                    </li>
                                    <li>
                                          <a href="#">Another action</a>
                                    </li>
                                    <li>
                                          <a href="#">Something else here</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">Separated link</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                          <a href="#">One more separated link</a>
                                    </li>
                              </ul>
                        </li> -->
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->
