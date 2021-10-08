<?php
session_start();
include("../includes/db.inc.php");
// include("../includes/addproducts.inc.php");
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
            <li class="has-sub">
              <a class="sidenav-item-link" href="./index.php">
                <span class="nav-text">Dashboard</span>

              </a>
            </li>
            <li class="has-sub active">
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
      <?php include "./includes/dheader.inc.php"; ?>


      <div class="content-wrapper">
        <div class="content">
          <div class="row">
            <div class="col-lg-12">
              <?php
              if (isset($_SESSION['success'])) {
                echo "<div class='alert alert-success text-center' role='alert'>" . $_SESSION['success'] . "</div>";
                unset($_SESSION['success']);
              }
              if (isset($_SESSION['error'])) {
                echo "<div class='alert alert-danger text-center' role='alert'>" . $_SESSION['error'] . "</div>";
                unset($_SESSION['error']);
              }
              ?>
              <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                  <h2>Add Product</h2>
                </div>
                <div class="card-body">
                  <form action="./includes/addproduct.inc.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Product Name</label>
                      <input type="text" name="productname" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product name">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Product Image</label>
                      <input type="file" name="productimage" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlPassword">Price</label>
                      <input type="text" name="productprice" class="form-control" id="" placeholder="Price">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect12">Product Category</label>
                      <select class="form-control" name="productcategory" id="exampleFormControlSelect12">
                        <option disabled selected>Select Category</option>
                        <?php
                        $getCategories = "SELECT * FROM categories";
                        $runCategories = mysqli_query($conn, $getCategories);
                        while ($rowCategories = mysqli_fetch_array($runCategories)) {
                          // $categoryId = $rowCategories['categoryId'];
                          $categoryName = $rowCategories['categoryname'];
                          echo "
						        				<option value='$categoryName'>$categoryName</option>
						        			";
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Product Description</label>
                      <textarea class="form-control" name="productdescription" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-row">
                      <div class="col form-group">
                        <label for="exampleFormControlPassword">Bid Start</label>
                        <input type="datetime-local" name="bidstart" class="form-control" id="" placeholder="Price">
                      </div>
                      <div class="col form-group">
                        <label for="exampleFormControlPassword">Bid End</label>
                        <input type="datetime-local" name="bidend" class="form-control" id="" placeholder="Price">
                      </div>
                    </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                      <button type="submit" name="addProductBtn" class="btn btn-primary btn-default">Add</button>
                    </div>
                  </form>
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