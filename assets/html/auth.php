<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AUS Sport Club</title>

    <!-- AOS Library CSS Link -->
    <link rel="stylesheet" href="../../dist/libraries/aos/aos.css" />

    <!-- Bootstrap Library CSS Link -->
    <link
      rel="stylesheet"
      href="../../dist/libraries/bootstrap-5.0.2/css/bootstrap.min.css"
    />

    <!-- Font Awesome CSS Link -->
    <link
      rel="stylesheet"
      href="../../dist/libraries/fontawesome-free-6.7.1-web/css/all.min.css"
    />

    <!-- j-Query Ui CSS Link -->
    <link
      rel="stylesheet"
      href="../../dist/libraries/jquery-ui/jquery-ui.css"
    />

    <!-- Custom CSS Link -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/auth.css" />
  </head>
  <body>
    <!-- Sign in/ Sign up Section -->
    <form action="signin.php" method="POST" class="cont">
      <div class="form sign-in">
        <h2>Welcome to AUS Sport Club!</h2>
        <label>
          <span>Email</span>
          <input type="email" name="email" placeholder="Enter your email.."/>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password" placeholder="Enter your password"/>
        </label>
        <p class="forgot-pass">Forgot password?</p>
        <button type="Submit" class="submit">Sign In</button>
      </div>

      <div class="sub-cont">
        <div class="img">
          <div class="img__text m--up">
            <h3>Don't have an account? Please Sign up!</h3>
          </div>
          <div class="img__text m--in">
            <h3>If you already have an account, just sign in.</h3>
          </div>
          <div class="img__btn">
            <span class="m--up">Sign Up</span>
            <span class="m--in">Sign In</span>
          </div>
        </div>

        <div class="form sign-up">
          <h2>Register your Account!</h2>
          <label>
            <span>Name</span>
            <input type="text" />
          </label>
          <label>
            <span>Email</span>
            <input type="email" />
          </label>
          <label>
            <span>Password</span>
            <input type="password" />
          </label>
          <button type="button" class="submit">Sign Up</button>
        </div>
      </div>
    </form>
    <!-- Sign in/ Sign up Section -->

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
