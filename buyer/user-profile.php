<?php
session_start();
include "../includes/db.inc.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>myAuction - Admin</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="../seller/assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="../seller/assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="../seller/assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet" />
  <link href="../seller/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="../seller/assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="../seller/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="../seller/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />



</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">

  <div class="mobile-sticky-body-overlay"></div>

  <div class="wrapper">

    <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
    <aside class="left-sidebar bg-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="../index.php">
            <span class="brand-name">myAuction</span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">
            <li class="has-sub">
              <a class="sidenav-item-link" href="index.php">
                <span class="nav-text">Dashboard</span>

              </a>
            </li>
            <li class="has-sub active">
              <a class="sidenav-item-link" href="user-profile.php">
                <span class="nav-text">User Profile</span>

              </a>
            </li>
          </ul>

        </div>

      </div>
    </aside>



    <div class="page-wrapper">
      <!-- Header -->
      <?php include "./includes/dheader.inc.php"; ?>


      <div class="content-wrapper">
        <div class="content">
          <div class="bg-white border rounded">
            <div class="row no-gutters">
              <div class="col-lg-12 col-xl-12">
                <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                  <div class="card text-center widget-profile px-0 border-0">
                    <div class="card-img mx-auto rounded-circle">
                      <img src="assets/img/user/u6.jpg" alt="user image">
                    </div>
                    <div class="card-body">
                      <h4 class="py-2 text-dark"><?php
                                                  $email = $_SESSION['email'];
                                                  $getProducts = "SELECT * FROM seller WHERE seller_email='$email'";
                                                  $runProducts = mysqli_query($conn, $getProducts);

                                                  while ($rowProduct = mysqli_fetch_array($runProducts)) {
                                                    $storename = $rowProduct['storename'];
                                                    echo $storename;
                                                  }
                                                  ?></h4>
                    </div>
                  </div>
                  <hr class="w-100">
                  <hr class="w-100">
                  <div class="contact-info pt-4">
                    <h5 class="text-dark mb-1">Contact Information</h5>
                    <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                    <p><?php echo $_SESSION['email']; ?></p>
                    <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                    <p>
                      <?php
                      $email = $_SESSION['email'];
                      $getUser = "SELECT * FROM seller WHERE seller_email='$email'";
                      $runUser = mysqli_query($conn, $getUser);

                      while ($rowUser = mysqli_fetch_array($runUser)) {
                        $phone = $rowUser['seller_phone'];
                        echo $phone;
                      }
                      ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>



  <script src="../seller/assets/plugins/jquery/jquery.min.js"></script>
  <script src="../seller/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../seller/assets/plugins/toaster/toastr.min.js"></script>
  <script src="../seller/assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
  <script src="../seller/assets/plugins/charts/Chart.min.js"></script>
  <script src="../seller/assets/plugins/ladda/spin.min.js"></script>
  <script src="../seller/assets/plugins/ladda/ladda.min.js"></script>
  <script src="../seller/assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
  <script src="../seller/assets/plugins/select2/js/select2.min.js"></script>
  <script src="../seller/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="../seller/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <script src="../seller/assets/plugins/daterangepicker/moment.min.js"></script>
  <script src="../seller/assets/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="../seller/assets/plugins/jekyll-search.min.js"></script>
  <script src="../seller/assets/js/sleek.js"></script>
  <script src="../seller/assets/js/chart.js"></script>
  <script src="../seller/assets/js/date-range.js"></script>
  <script src="../seller/assets/js/map.js"></script>
  <script src="../seller/assets/js/custom.js"></script>




</body>

</html>