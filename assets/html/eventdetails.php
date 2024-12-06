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
    <link rel="stylesheet" type="text/css" href="../css/eventdetails.css" />
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

    <!-- Event Detail Section -->
    <section id="event-details" class="event-section bg-dark py-5 text-light">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5" data-aos="fade-down" data-aos-delay="200">
                <h2 class="section-title text-uppercase">Event Details</h2>
                <p class="section-description">
                    Discover everything about the upcoming event and how to participate!
                </p>
            </div>

            <!-- Event Content -->
            <div class="row align-items-center">
                <!-- Event Details -->
                <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-delay="300">
                    <h3 class="event-title">Annual Sports Day 2024</h3>
                    <ul class="event-details">
                        <li data-aos="zoom-in" data-aos-delay="400">
                            <i class="fas fa-calendar-alt text-primary"></i>
                            <strong>Date:</strong> January 15, 2024
                        </li>
                        <li data-aos="zoom-in" data-aos-delay="500">
                            <i class="fas fa-clock text-primary"></i>
                            <strong>Time:</strong> 10:00 AM - 4:00 PM
                        </li>
                        <li data-aos="zoom-in" data-aos-delay="600">
                            <i class="fas fa-user-clock text-primary"></i>
                            <strong>Due Registration:</strong> January 10, 2024
                        </li>
                        <li data-aos="zoom-in" data-aos-delay="700">
                            <i class="fas fa-users text-primary"></i>
                            <strong>Participant Limit:</strong> 200 participants
                        </li>
                        <li data-aos="zoom-in" data-aos-delay="800">
                            <i class="fas fa-child text-primary"></i>
                            <strong>Age Limit:</strong> 12-50 years
                        </li>
                    </ul>
                </div>

                <!-- Event Image -->
                <div class="col-md-6 text-center" data-aos="fade-left" data-aos-delay="400">
                    <img src="../../dist/img/community.png" alt="Event Details" class="img-fluid rounded shadow-lg"
                        data-aos="zoom-in" data-aos-delay="500" />
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="600">
                <a href="#register-now" class="btn button-5 btn-lg shadow">
                    Register Now
                </a>
            </div>
        </div>
    </section>

    <!-- Event Detail Section -->

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