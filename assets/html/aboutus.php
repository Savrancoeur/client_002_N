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
  <link rel="stylesheet" type="text/css" href="../css/aboutus.css" />
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
            <a class="nav-link btn-login" href="#login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-register" href="#register">Register</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle profile-dropdown" href="#" id="profileMenu" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../../dist/img/profile.png" alt="Profile" class="rounded-circle profile-pic" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileMenu">
              <li><a class="dropdown-item" href="#profile">Profile</a></li>
              <li><a class="dropdown-item" href="#settings">Settings</a></li>
              <li><a class="dropdown-item" href="#logout">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- NavBar Section -->

  <!-- About Us Section -->
  <section id="about-us" class="py-5">
    <div class="container">
      <!-- Heading Section -->
      <div class="text-center mb-5" data-aos="fade-up">
        <h2>About Us</h2>
        <p class="lead">
          Discover our story, meet our team, and explore the values that drive
          our sports club.
        </p>
      </div>

      <!-- Story Section -->
      <div class="row align-items-center mb-5">
        <div class="col-md-6 mb-5" data-aos="fade-right">
          <img src="../../dist/img/aboutus/img1.png" class="img-fluid rounded shadow" alt="Our Story" />
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <h3>Our Journey</h3>
          <p>
            Since our founding in 2020, our sports club has been a beacon for
            fitness enthusiasts, aspiring athletes, and families alike. Our
            mission is to empower individuals to achieve their best selves,
            both physically and mentally.
          </p>
          <p>
            From state-of-the-art facilities to a welcoming community
            atmosphere, we’re dedicated to making fitness accessible for
            everyone.
          </p>
          <a href="#contact" class="btn button-1 mt-3">Contact Us</a>
        </div>
      </div>

      <!-- Vision, Mission, and Values -->
      <div class="row text-center">
        <div class="col-md-4 mb-4" data-aos="zoom-in">
          <div class="card border-0 shadow-sm h-100 bg-dark text-light">
            <div class="card-body">
              <i class="fas fa-lightbulb fa-3x text-primary mb-3"></i>
              <h4>Our Vision</h4>
              <p>
                To inspire a healthy and active lifestyle for people of all
                ages through engaging sports programs and fitness activities.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="card border-0 shadow-sm h-100 bg-dark text-light">
            <div class="card-body">
              <i class="fas fa-heartbeat fa-3x text-danger mb-3"></i>
              <h4>Our Mission</h4>
              <p>
                To foster community wellness by providing top-tier facilities,
                expert guidance, and a welcoming environment.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="card border-0 shadow-sm h-100 bg-dark text-light">
            <div class="card-body">
              <i class="fas fa-star fa-3x text-warning mb-3"></i>
              <h4>Our Values</h4>
              <p>
                We believe in teamwork, integrity, and continuous improvement
                as the foundation for personal and community success.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Meet Our Team -->
      <div class="text-center mt-5 mb-5" data-aos="fade-up">
        <h2>Meet Our Team</h2>
        <p class="lead">
          A group of passionate and experienced professionals dedicated to
          your success.
        </p>
      </div>
      <div class="row text-center">
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member">
            <img src="../../dist/img/aboutus/trainer1.png" class="img-fluid rounded-circle shadow-sm"
              alt="Alex Johnson" style="width: 180px; height: 180px; object-fit: cover" />
            <h5 class="mt-3">Alex Johnson</h5>
            <p>Head Coach</p>
            <p class="text-muted">
              A seasoned coach with over 15 years of experience in training
              athletes across multiple disciplines.
            </p>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="team-member">
            <img src="../../dist/img/aboutus/trainer2.png" class="img-fluid rounded-circle shadow-sm"
              alt="Sarah Williams" style="width: 180px; height: 180px; object-fit: cover" />
            <h5 class="mt-3">Sarah Williams</h5>
            <p>Fitness Trainer</p>
            <p class="text-muted">
              Specializes in personalized fitness programs and nutrition
              guidance for a balanced lifestyle.
            </p>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
          <div class="team-member">
            <img src="../../dist/img/aboutus/trainer3.png" class="img-fluid rounded-circle shadow-sm"
              alt="Michael Lee" style="width: 180px; height: 180px; object-fit: cover" />
            <h5 class="mt-3">Michael Lee</h5>
            <p>Yoga Instructor</p>
            <p class="text-muted">
              A certified yoga instructor with expertise in mindfulness and
              flexibility training.
            </p>
          </div>
        </div>
      </div>

      <!-- Call to Action -->
      <div class="text-center mt-5" data-aos="fade-up">
        <h3>Join Us Today!</h3>
        <p class="lead">
          Be part of our thriving community and take the first step toward
          your fitness goals.
        </p>
        <a href="#membership" class="btn button-2 btn-lg">Get Started</a>
      </div>
    </div>
  </section>

  <!-- About Us Section -->

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