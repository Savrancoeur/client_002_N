<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>AUS Sport Club - Admin Dashboard</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="../../../dist/img/admin/admin_icon.png" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="../../../dist/libraries/webfont/js/webfont.min.js"></script>
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
  <link rel="stylesheet" href="../../../dist/libraries/bootstrap-5.0.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../../dist/libraries/jquery-ui/jquery-ui.css" />
  <link rel="stylesheet" href="../../../dist/libraries/fontawesome-free-6.7.1-web/css/all.min.css" />
  <link rel="stylesheet" href="../../css/admin.min.css" />
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">
      <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
          <a href="index.php" class="logo">
            <h4 class="text-light">AUS Sport Club</h4>
          </a>
          <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
              <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
              <i class="gg-menu-left"></i>
            </button>
          </div>
          <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
          </button>
        </div>
        <!-- End Logo Header -->
      </div>
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <ul class="nav nav-secondary">
            <li class="nav-item active">
              <a href="./index.php">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="./events.phpindex.php">
                <i class="fas fa-calendar-alt"></i>
                <p>Events</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="./members.phpindex.php">
                <i class="fas fa-users"></i>
                <p>Members</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="./messages.phpindex.php">
                <i class="fas fa-envelope"></i>
                <p>Messages</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Sidebar -->

    <div class="main-panel">
      <div class="main-header">
        <div class="main-header-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.php" class="logo">
              <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                height="20" />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
          <div class="container-fluid">
            <nav
              class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search pe-1">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>
                <input type="text" placeholder="Search ..." class="form-control" />
              </div>
            </nav>

            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
              <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                  aria-expanded="false" aria-haspopup="true">
                  <i class="fa fa-search"></i>
                </a>
                <ul class="dropdown-menu dropdown-search animated fadeIn">
                  <form class="navbar-left navbar-form nav-search">
                    <div class="input-group">
                      <input type="text" placeholder="Search ..." class="form-control" />
                    </div>
                  </form>
                </ul>
              </li>
              <li class="nav-item topbar-icon dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-envelope"></i>
                </a>
                <ul class="dropdown-menu messages-notif-box animated fadeIn"
                  aria-labelledby="messageDropdown">
                  <li>
                    <div class="dropdown-title d-flex justify-content-between align-items-center">
                      Messages
                      <a href="#" class="small">Mark all as read</a>
                    </div>
                  </li>
                  <li>
                    <div class="message-notif-scroll scrollbar-outer">
                      <div class="notif-center">
                        <a href="#">
                          <div class="notif-img">
                            <img src="assets/img/jm_denis.jpg" alt="Img Profile" />
                          </div>
                          <div class="notif-content">
                            <span class="subject">Jimmy Denis</span>
                            <span class="block"> How are you ? </span>
                            <span class="time">5 minutes ago</span>
                          </div>
                        </a>
                        <a href="#">
                          <div class="notif-img">
                            <img src="assets/img/chadengle.jpg" alt="Img Profile" />
                          </div>
                          <div class="notif-content">
                            <span class="subject">Chad</span>
                            <span class="block"> Ok, Thanks ! </span>
                            <span class="time">12 minutes ago</span>
                          </div>
                        </a>
                        <a href="#">
                          <div class="notif-img">
                            <img src="assets/img/mlane.jpg" alt="Img Profile" />
                          </div>
                          <div class="notif-content">
                            <span class="subject">Jhon Doe</span>
                            <span class="block">
                              Ready for the meeting today...
                            </span>
                            <span class="time">12 minutes ago</span>
                          </div>
                        </a>
                        <a href="#">
                          <div class="notif-img">
                            <img src="assets/img/talha.jpg" alt="Img Profile" />
                          </div>
                          <div class="notif-content">
                            <span class="subject">Talha</span>
                            <span class="block"> Hi, Apa Kabar ? </span>
                            <span class="time">17 minutes ago</span>
                          </div>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a class="see-all" href="javascript:void(0);">See all messages<i
                        class="fa fa-angle-right"></i>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item topbar-icon dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-bell"></i>
                  <span class="notification">4</span>
                </a>
                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                  <li>
                    <div class="dropdown-title">
                      You have 4 new notification
                    </div>
                  </li>
                  <li>
                    <div class="notif-scroll scrollbar-outer">
                      <div class="notif-center">
                        <a href="#">
                          <div class="notif-icon notif-primary">
                            <i class="fa fa-user-plus"></i>
                          </div>
                          <div class="notif-content">
                            <span class="block"> New user registered </span>
                            <span class="time">5 minutes ago</span>
                          </div>
                        </a>
                        <a href="#">
                          <div class="notif-icon notif-success">
                            <i class="fa fa-comment"></i>
                          </div>
                          <div class="notif-content">
                            <span class="block">
                              Rahmad commented on Admin
                            </span>
                            <span class="time">12 minutes ago</span>
                          </div>
                        </a>
                        <a href="#">
                          <div class="notif-img">
                            <img src="assets/img/profile2.jpg" alt="Img Profile" />
                          </div>
                          <div class="notif-content">
                            <span class="block">
                              Reza send messages to you
                            </span>
                            <span class="time">12 minutes ago</span>
                          </div>
                        </a>
                        <a href="#">
                          <div class="notif-icon notif-danger">
                            <i class="fa fa-heart"></i>
                          </div>
                          <div class="notif-content">
                            <span class="block"> Farrah liked Admin </span>
                            <span class="time">17 minutes ago</span>
                          </div>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a class="see-all" href="javascript:void(0);">See all notifications<i
                        class="fa fa-angle-right"></i>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item topbar-user dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                  aria-expanded="false">
                  <div class="avatar-sm">
                    <img src="../../../dist/img/admin/profile.jpg" alt="..."
                      class="avatar-img rounded-circle" />
                  </div>
                  <span class="profile-username">
                    <span class="op-7">Hi,</span>
                    <span class="fw-bold">Admin</span>
                  </span>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                  <div class="dropdown-user-scroll scrollbar-outer">
                    <li>
                      <div class="user-box">
                        <div class="avatar-lg">
                          <img src="../../../dist/img/admin/profile.jpg" alt="image profile"
                            class="avatar-img rounded" />
                        </div>
                        <div class="u-text">
                          <h4>Admin</h4>
                          <p class="text-muted">hello@example.com</p>
                          <a href="../../../dist/img/admin/profile.jpg"
                            class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">My Profile</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Logout</a>
                    </li>
                  </div>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>

      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Messages</h4>
          </div>
          <div class="page-category">
            <div class="row mb-5">
              <div class="card-body">
                <table class="table table-bordered table-hover table-head-bg-primary">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Message</th>
                      <th scope="col">Status</th>
                      <th scope="col">Date</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>
                        <p>Hello</p>
                      </td>
                      <td>
                        <button class="btn btn-disabled btn-success">
                          Read
                        </button>
                      </td>
                      <td>2025-2-12</td>
                    </tr>

                    <tr>
                      <td>1</td>
                      <td>
                        <p>Hello</p>
                      </td>
                      <td>
                        <button class="btn btn-disabled btn-warning">
                          Pending
                        </button>
                      </td>
                      <td>2025-2-12</td>
                    </tr>

                    <tr>
                      <td>1</td>
                      <td>
                        <p>Hello</p>
                      </td>
                      <td>
                        <button class="btn btn-disabled btn-success">
                          Read
                        </button>
                      </td>
                      <td>2025-2-12</td>
                    </tr>

                    <tr>
                      <td>1</td>
                      <td>
                        <p>Hello</p>
                      </td>
                      <td>
                        <button class="btn btn-disabled btn-warning">
                          Pending
                        </button>
                      </td>
                      <td>2025-2-12</td>
                    </tr>

                    <tr>
                      <td>1</td>
                      <td>
                        <p>Hello</p>
                      </td>
                      <td>
                        <button class="btn btn-disabled btn-success">
                          Read
                        </button>
                      </td>
                      <td>2025-2-12</td>
                    </tr>

                    <tr>
                      <td>1</td>
                      <td>
                        <p>Hello</p>
                      </td>
                      <td>
                        <button class="btn btn-disabled btn-warning">
                          Pending
                        </button>
                      </td>
                      <td>2025-2-12</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
          <div class="copyright">
            2024, made with <i class="fa fa-heart heart text-danger"></i> by
            <a href="javascript:void(0);">AUS Sport Club</a>
          </div>
          <div>
            Distributed by
            <a target="_blank" href="javascript:void(0);">AUS Sport Club</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../../../dist/libraries/jquery/jquery-3.7.1.min.js"></script>
  <script src="../../../dist/libraries/bootstrap-5.0.2/js/popper.min.js"></script>
  <script src="../../../dist/libraries/bootstrap-5.0.2/js/bootstrap.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="../../../dist/libraries/jquery-scrollbar/js/jquery.scrollbar.min.js"></script>

  <!-- Chart JS -->
  <script src="../../../dist/libraries/chart.js/js/chart.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="../../../dist/libraries/jquery-sparkline/js/jquery.sparkline.min.js"></script>

  <!-- Chart Circle -->
  <script src="../../../dist/libraries/chart-circle/js/circles.min.js"></script>

  <!-- Datatables -->
  <script src="../../../dist/libraries/datatables/js/datatables.min.js"></script>

  <!-- Bootstrap Notify -->
  <script src="../../../dist/libraries/bootstrap-notify/js/bootstrap-notify.min.js"></script>

  <!-- Sweet Alert -->
  <script src="../../../dist/libraries/sweetalert/js/sweetalert.min.js"></script>

  <!-- Kaiadmin JS -->
  <script src="../../js/admin.min.js"></script>
</body>

</html>