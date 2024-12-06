<?php

// to show error codes
ini_set("display_errors", 1);

// call dbconnection file to use
require_once("databaseconnection.php");

// creat session if not created
if(!isset($_SESSION)){
    session_start();
}


if(isset($_SESSION['email'])){
  echo $_SESSION['email'];
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AUS Sport Club</title>

  <!-- AOS Library CSS Link -->
  <link rel="stylesheet" href="../../dist/libraries/aos/aos.css" />

  <!-- Bootstrap Library CSS Link -->
  <link rel="stylesheet" href="../../dist/libraries/bootstrap-5.0.2/css/bootstrap.min.css" />

  <!-- Font Awesome CSS Link -->
  <link rel="stylesheet" href="../../dist/libraries/fontawesome-free-6.7.1-web/css/all.min.css" />

  <!-- j-Query Ui CSS Link -->
  <link rel="stylesheet" href="../../dist/libraries/jquery-ui/jquery-ui.css" />

  <!-- Custom CSS Link -->
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" type="text/css" href="../css/navbar.css" />
  <link rel="stylesheet" type="text/css" href="../css/footer.css" />
  <link rel="stylesheet" type="text/css" href="../css/index.css" />
</head>

<body>
  <!-- NavBar Section -->
  <nav class="navbar navbar-expand-lg navbar-dark cstm-navbar">
    <div class="container-fluid">
      <!-- Brand Name -->
      <a class="navbar-brand text-uppercase fw-bold" href="#">
        <span class="brand-highlight">AUS</span> Sport Club
      </a>
      <!-- Mobile Toggle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navigation Menu -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mx-auto d-flex align-items-center">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./events.php">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./news.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./aboutus.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contactus.php">Contact</a>
          </li>
        </ul>
        <!-- Login/Register/Profile -->
        <ul class="navbar-nav ms-auto d-flex align-items-center">
          <li class="nav-item">
            <a class="nav-link btn-login" href="auth.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-register" href="auth.php">Register</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle profile-dropdown" href="#" id="profileMenu" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../../dist/img/profile.png" alt="Profile" class="rounded-circle profile-pic" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileMenu">
              <li><a class="dropdown-item" href="#profile">Profile</a></li>
              <li><a class="dropdown-item" href="#settings">Settings</a></li>
              <li><a class="dropdown-item" href="exit.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- NavBar Section -->

  <!-- BG Overlay Section -->
  <section id="hero" class="hero-section position-relative text-light">
    <div class="bg-overlay"></div>
    <div class="container h-100 d-flex align-items-center">
      <div class="row w-100">
        <div class="col-md-7" data-aos="fade-right">
          <h1 class="hero-title display-4">
            Welcome to<br />
            AUS<b class="text-light"> Sport Club</b>
          </h1>
          <p class="hero-text">
            Join us for a journey of fitness, teamwork, and sportsmanship.
          </p>
        </div>
        <div class="col-md-5 text-md-right d-flex flex-column justify-content-center" data-aos="fade-left">
          <a href="#get-started" class="btn button-2 btn-lg mb-3">
            Get Started
          </a>
          <a href="#about" class="btn button-1 btn-lg"> Learn More </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Filter Events Section -->
  <section id="filter-events" class="filter-section bg-dark py-5 text-light">
    <div class="container">
      <!-- Section Header -->
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title">Filter Events</h2>
        <p class="section-description">
          Find the events that match your interests and schedule.
        </p>
      </div>

      <!-- Filter Form -->
      <form class="filter-form p-4 rounded shadow-lg bg-black" data-aos="fade-up" data-aos-delay="300">
        <div class="row g-4">
          <!-- Date Filter -->
          <div class="col-md-6">
            <label for="filter-date" class="form-label">Date</label>
            <input type="date" id="filter-date"
              class="form-control bg-dark text-light border-primary shadow" placeholder="Select Date" />
          </div>

          <!-- Sport Filter -->
          <div class="col-md-6">
            <label for="filter-sport" class="form-label">Sport</label>
            <select id="filter-sport" class="form-select bg-dark text-light border-primary shadow">
              <option value="" disabled selected>Select Sport</option>
              <option value="soccer">Soccer</option>
              <option value="basketball">Basketball</option>
              <option value="tennis">Tennis</option>
              <option value="marathon">Marathon</option>
            </select>
          </div>

          <!-- Location Filter -->
          <div class="col-md-6">
            <label for="filter-location" class="form-label">Location</label>
            <input type="text" id="filter-location"
              class="form-control bg-dark text-light border-primary shadow"
              placeholder="Enter Location" />
          </div>

          <!-- Age Group Filter -->
          <div class="col-md-6">
            <label for="filter-age" class="form-label">Age Group</label>
            <select id="filter-age" class="form-select bg-dark text-light border-primary shadow">
              <option value="" disabled selected>Select Age Group</option>
              <option value="all">All Ages</option>
              <option value="kids">Kids (5-12)</option>
              <option value="teens">Teens (13-17)</option>
              <option value="adults">Adults (18+)</option>
            </select>
          </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="400">
          <button type="submit" class="btn button-4 btn-lg shadow">
            Search Events
          </button>
        </div>
      </form>
    </div>
  </section>
  <!-- BG Overlay Section -->

  <!-- Join Our Community Section -->
  <section id="join-community" class="join-section bg-dark py-5 text-light">
    <div class="container">
      <!-- Section Header -->
      <div class="text-center mb-5" data-aos="fade-down" data-aos-delay="200">
        <h2 class="section-title text-uppercase">Join Our Community</h2>
        <p class="section-description">
          Be part of the AUS Sport Club family and experience the thrill of
          sports and friendship.
        </p>
      </div>

      <!-- Community Highlights -->
      <div class="row align-items-center">
        <!-- Left Content -->
        <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-delay="300">
          <h3 class="highlight-title">Why Join Us?</h3>
          <ul class="highlight-list">
            <li data-aos="zoom-in" data-aos-delay="400">
              <i class="fas fa-check-circle text-primary"></i> Access to
              exclusive events
            </li>
            <li data-aos="zoom-in" data-aos-delay="500">
              <i class="fas fa-check-circle text-primary"></i> Opportunities
              to grow your skills
            </li>
            <li data-aos="zoom-in" data-aos-delay="600">
              <i class="fas fa-check-circle text-primary"></i> A supportive
              and inclusive community
            </li>
          </ul>
        </div>

        <!-- Right Content -->
        <div class="col-md-6 text-center" data-aos="fade-left" data-aos-delay="400">
          <img src="../../dist/img/community.png" alt="Join Community" class="img-fluid rounded shadow-lg"
            data-aos="zoom-in" data-aos-delay="500" />
        </div>
      </div>

      <!-- Call to Action -->
      <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="600">
        <a href="#contact-us" class="btn button-5 btn-lg shadow">
          Get Started
        </a>
      </div>
    </div>
  </section>

  <!-- Join our Community Section -->

  <!-- Footer Section -->
  <footer class="footer">
    <div class="footer-container">
      <!-- Footer Navigation -->
      <div class="footer-nav">
        <h5 class="footer-title">Quick Links</h5>
        <ul class="footer-links">
          <li><a href="./index.php">Home</a></li>
          <li><a href="./events.php">Events</a></li>
          <li><a href="./news.php">News</a></li>
          <li><a href="./aboutus.php">About Us</a></li>
          <li><a href="./contactus.php">Contact</a></li>
        </ul>
      </div>

      <!-- Contact Information -->
      <div class="footer-contact">
        <h5 class="footer-title">Contact Us</h5>
        <p>Email: <a href="mailto:info@example.com">aus@sportclub.com</a></p>
        <p>Phone: +95 999 888 777</p>
        <p>Address: Mandalay, Myanmar</p>
      </div>

      <!-- Social Media Links -->
      <div class="footer-social">
        <h5 class="footer-title">Follow Us</h5>
        <ul class="social-icons">
          <li>
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Copyright Notice -->
    <div class="footer-bottom">
      <p>&copy; 2024 Your Sports Club. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- Footer Section -->

  <!-- AOS Library JS Link -->
  <script src="../../dist/libraries/aos/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Font Awesome Library JS Link -->
  <script src="../../dist/libraries/fontawesome-free-6.7.1-web/js/all.min.js"></script>

  <!-- Bootstrap Library JS Link -->
  <script src="../../dist/libraries/bootstrap-5.0.2/js/bootstrap.min.js"></script>

  <!-- j-Query Ui JS Link -->
  <script src="../../dist/libraries/jquery-ui/jquery-ui.js"></script>

  <!-- jQuery JS Link -->
  <script src="../../dist/libraries/jquery/jquery-3.7.1.min.js"></script>

  <!-- Custom JS Link -->
  <script src="../js/app.js"></script>
</body>

</html>