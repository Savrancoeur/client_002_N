<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>AUS Sport Club - User Profile</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="../../dist/img/admin/admin_icon.png" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="../../dist/libraries/webfont/js/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Public Sans:300,400,500,600,700"]
      },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["assets/css/fonts.min.css"],
      },
      active: function() {
        sessionStorage.fonts = true;
      },
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="../../dist/libraries/bootstrap-5.0.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../dist/libraries/jquery-ui/jquery-ui.css" />
  <link rel="stylesheet" href="../../dist/libraries/fontawesome-free-6.7.1-web/css/all.min.css" />
  <link rel="stylesheet" href="../css/admin.min.css" />
</head>

<body>
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-4">
                <div class="card-title d-flex justify-content-between">
                  <h2>User Profile</h2>
                  <button class="btn btn-warning">
                    <a href="./index.php">Back to Home</a>
                  </button>
                </div>
              </div>
              <div class="col-md-4 ms-auto">
                <!-- Modern Success Alert -->
                <div class="alert alert-success alert-dismissible fade show d-flex align-items-end ms-auto me-3"
                  role="alert">
                  <i class="fas fa-check-circle fa-2x text-success"></i>
                  <div class="alert-content flex-grow-1 mx-3">
                    You successfully read this important alert message.
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <i class="fas fa-times-circle"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control input-full" name="name" id="name"
                    placeholder="Enter Your Name" />
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control" name="email" id="email"
                    placeholder="Enter Your  Email" />
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password"
                    placeholder="Password" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control input-full" name="phone" id="phone"
                    placeholder="Enter Your Phone Number" />
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="dob">Date of Birth</label>
                  <input type="date" name="dob" class="form-control" id="dob" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="preferedSport">Prefered Sport</label>
                  <select class="form-select form-control" id="preferedSport">
                    <option selected disabled>
                      Select your prefered sports
                    </option>
                    <option>Football</option>
                    <option>Basketball</option>
                    <option>Marathon</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="skillLevel">Skill Level</label>
                  <select class="form-select form-control" id="skillLevel">
                    <option selected disabled>Select your skill level</option>
                    <option>Beginner</option>
                    <option>Amatuer</option>
                    <option>Master</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="card-action">
            <button class="btn btn-success">Submit</button>
            <button class="btn btn-danger">Cancel</button>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-12">
                <h2>Your Participation History</h2>
              </div>
            </div>
          </div>

          <div class="card-body">
            <h4 class="text-muted mb-3">
              You have paricipated the following events since you've become
              our member...
            </h4>

            <ul id="historyList">
              <li>
                <h5 class="text-primary">Annual Sport Day 2024</h5>
              </li>

              <li>
                <h5 class="text-primary">Annual Marathon 2024</h5>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <div class="col-md-12">
              <h2>Register Events</h2>
            </div>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="selectedEvent">Select Event</label>
                  <select class="form-select form-control" id="selectedEvent">
                    <option selected disabled>Select event</option>
                    <option>Football</option>
                    <option>Basketball</option>
                    <option>Marathon</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="participantName">Name</label>
                  <input type="text" class="form-control input-full" name="participantName"
                    id="participantName" placeholder="Enter Your Name" />
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="participantEmail">Email Address</label>
                  <input type="email" class="form-control" name="participantEmail"
                    id="participantEmail" placeholder="Enter Your  Email" />
                </div>
              </div>
            </div>
          </div>

          <div class="card-action">
            <button class="btn btn-info">Register</button>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <div class="col-md-12">
              <h2>Manage Your Registrations</h2>
            </div>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <h4 class="text-muted mb-3">
                  You are currently registered for the following events:
                </h4>

                <ul id="eventList">
                  <li class="d-flex justify-content-between mb-3">
                    <h5 class="text-primary">Annual Sport Day 2024</h5>
                    <button class="btn btn-sm btn-danger cancel-btn">
                      Cancel
                    </button>
                  </li>

                  <li class="d-flex justify-content-between mb-3">
                    <h5 class="text-primary">Annual Marathon 2024</h5>
                    <button class="btn btn-sm btn-danger cancel-btn">
                      Cancel
                    </button>
                  </li>
                </ul>

                <p id="cancelMessage" class="text-danger">
                  To cancel your registrations, click the "Cancel" button next
                  to an event.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="../../dist/libraries/jquery/jquery-3.7.1.min.js"></script>
  <script src="../../dist/libraries/bootstrap-5.0.2/js/popper.min.js"></script>
  <script src="../../dist/libraries/bootstrap-5.0.2/js/bootstrap.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="../../dist/libraries/jquery-scrollbar/js/jquery.scrollbar.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="../../dist/libraries/jquery-sparkline/js/jquery.sparkline.min.js"></script>

  <!-- Datatables -->
  <script src="../../dist/libraries/datatables/js/datatables.min.js"></script>

  <!-- Bootstrap Notify -->
  <script src="../../dist/libraries/bootstrap-notify/js/bootstrap-notify.min.js"></script>

  <!-- Sweet Alert -->
  <script src="../../dist/libraries/sweetalert/js/sweetalert.min.js"></script>

  <!-- Kaiadmin JS -->
  <script src="../js/admin.min.js"></script>

  <script>
    $(document).ready(function() {
      // Handle cancel button click
      $(".cancel-btn").on("click", function() {
        // Find the parent list item and remove it
        const eventItem = $(this).closest("li");
        const eventName = eventItem.find("h5").text(); // Get event name
        eventItem.remove(); // Remove the event from the list

        // Display a confirmation message
        const message = `You have successfully canceled your registration for "${eventName}".`;
        alert(message);

        // If the list is empty, show a fallback message
        if ($("#eventList").children().length === 0) {
          $("#cancelMessage")
            .removeClass("d-none")
            .text("You have no remaining event registrations.");
        }
      });
    });
  </script>
</body>

</html>