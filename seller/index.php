<?php
session_start();
include "../includes/db.inc.php";
include "./includes/dfunctions.inc.php";
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
  <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet" />
  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

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
            <li class="has-sub active">
              <a class="sidenav-item-link" href="./index.php">
                <span class="nav-text">Dashboard</span>

              </a>
            </li>
            <li class="has-sub">
              <a class="sidenav-item-link" href="./add-product.php">
                <span class="nav-text">Add Products</span>

              </a>
            </li>
            <li class="has-sub">
              <a class="sidenav-item-link" href="./user-profile.php">
                <span class="nav-text">User Profile</span>

              </a>
            </li>
          </ul>

        </div>

      </div>
    </aside>



    <div class="page-wrapper">
      <!-- Header -->
      <?php include "./includes/dheader.inc.php";
      ?>


      <div class="content-wrapper">
        <div class="content">
          <div class="row">
            <div class="col-xl-12">
              <?php
              if (isset($_SESSION['success'])) {
                echo "<div class='alert alert-success text-center' role='alert'>" . $_SESSION['success'] . "</div>";
                unset($_SESSION['success']);
              }
              ?>
              <!-- Top Products -->
              <div class="card card-default" data-scroll-height="580">
                <div class="card-header justify-content-between mb-4">
                  <h2>Your Products</h2>
                  <a href="./add-product.php"><button class="btn btn-primary">Add Product</button></a>
                </div>
                <div class="card-body py-0">
                  <!-- <div class="media d-flex mb-5">
                    <div class="media-image align-self-center mr-3 rounded">
                      <a href="#"><img src="assets/img/products/p1.jpg" alt="customer image"></a>
                    </div>
                    <div class="media-body align-self-center">
                      <a href="#">
                        <h6 class="mb-3 text-dark font-weight-medium"> Coach Swagger</h6>
                      </a>
                      <p class="float-md-right"><span class="text-dark mr-2">20</span>Bids</p>
                      <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a
                        simple.</p>
                      <p class="mb-0">
                        <del>$300</del>
                        <span class="text-dark ml-3">$250</span>
                      </p>
                    </div>
                  </div>

                  <div class="media d-flex mb-5">
                    <div class="media-image align-self-center mr-3 rounded">
                      <a href="#"><img src="assets/img/products/p2.jpg" alt="customer image"></a>
                    </div>
                    <div class="media-body align-self-center">
                      <a href="#">
                        <h6 class="mb-3 text-dark font-weight-medium"> Coach Swagger</h6>
                      </a>
                      <p class="float-md-right"><span class="text-dark mr-2">20</span>Bids</p>
                      <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a
                        simple.</p>
                      <p class="mb-0">
                        <del>$300</del>
                        <span class="text-dark ml-3">$250</span>
                      </p>
                    </div>
                  </div>

                  <div class="media d-flex mb-5">
                    <div class="media-image align-self-center mr-3 rounded">
                      <a href="#"><img src="assets/img/products/p3.jpg" alt="customer image"></a>
                    </div>
                    <div class="media-body align-self-center">
                      <a href="#">
                        <h6 class="mb-3 text-dark font-weight-medium"> Gucci Watch</h6>
                      </a>
                      <p class="float-md-right"><span class="text-dark mr-2">10</span>Bids</p>
                      <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a
                        simple.</p>
                      <p class="mb-0">
                        <del>$300</del>
                        <span class="text-dark ml-3">$50</span>
                      </p>
                    </div>
                  </div> -->

                  <?php sellerProductFunction(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/plugins/toaster/toastr.min.js"></script>
  <script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
  <script src="assets/plugins/charts/Chart.min.js"></script>
  <script src="assets/plugins/ladda/spin.min.js"></script>
  <script src="assets/plugins/ladda/ladda.min.js"></script>
  <script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
  <script src="assets/plugins/select2/js/select2.min.js"></script>
  <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <script src="assets/plugins/daterangepicker/moment.min.js"></script>
  <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="assets/plugins/jekyll-search.min.js"></script>
  <script src="assets/js/sleek.js"></script>
  <script src="assets/js/chart.js"></script>
  <script src="assets/js/date-range.js"></script>
  <script src="assets/js/map.js"></script>
  <script src="assets/js/custom.js"></script>




</body>

</html>