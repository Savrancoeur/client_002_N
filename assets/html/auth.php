<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AUS Sport Club</title>

  <!-- Libraries CSS Links -->
  <link rel="stylesheet" href="../../dist/libraries/aos/aos.css" />
  <link rel="stylesheet" href="../../dist/libraries/bootstrap-5.0.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../dist/libraries/fontawesome-free-6.7.1-web/css/all.min.css" />
  <link rel="stylesheet" href="../../dist/libraries/jquery-ui/jquery-ui.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="../css/auth.css" />
</head>

<body>
  <!-- Authentication Section -->
  <div class="auth-container">
    <!-- Background Image with Overlay -->
    <div class="auth-overlay">
      <div class="overlay-content">
        <h1>AUS Sport Club</h1>
        <p>Join the best sports community today!</p>
      </div>
    </div>

    <!-- Sign In Form -->
    <form id="signInForm" class="auth-form active" method="POST" action="#">
      <h2>Welcome Back!</h2>
      <label>
        <span>Email</span>
        <input type="email" name="email" required />
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" required />
      </label>
      <p class="forgot-pass">Forgot password?</p>
      <button type="submit" class="btn btn-primary">Sign In</button>
      <p class="switch-form">
        Don't have an account? <a href="#" id="showSignUp">Sign Up</a>
      </p>
    </form>

    <!-- Sign Up Form -->
    <form id="signUpForm" class="auth-form" method="POST" action="#">
      <h2>Join Us!</h2>
      <label>
        <span>Name</span>
        <input type="text" name="name" required />
      </label>
      <label>
        <span>Email</span>
        <input type="email" name="email" required />
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" required />
      </label>
      <button type="submit" class="btn btn-success">Sign Up</button>
      <p class="switch-form">
        Already have an account? <a href="#" id="showSignIn">Sign In</a>
      </p>
    </form>
  </div>

  <!-- AOS Library JS -->
  <script src="../../dist/libraries/aos/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Libraries JS Links -->
  <script src="../../dist/libraries/bootstrap-5.0.2/js/bootstrap.min.js"></script>
  <script src="../../dist/libraries/jquery-ui/jquery-ui.js"></script>
  <script src="../../dist/libraries/jquery/jquery-3.7.1.min.js"></script>

  <!-- Toggle Forms -->
  <script>
    document.getElementById("showSignUp").addEventListener("click", function(e) {
      e.preventDefault();
      document.getElementById("signInForm").classList.remove("active");
      document.getElementById("signUpForm").classList.add("active");
    });

    document.getElementById("showSignIn").addEventListener("click", function(e) {
      e.preventDefault();
      document.getElementById("signUpForm").classList.remove("active");
      document.getElementById("signInForm").classList.add("active");
    });
  </script>
</body>

</html>