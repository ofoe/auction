<?php
// include "../../includes/db.inc.php";

/*****************************************************
	UPDATE PRODUCT FUNCTION
 *****************************************************/
function sellerProductFunction()
{
  global $conn;
  $getSellerInfo = "SELECT * FROM seller";
  $runSellerInfo = mysqli_query($conn, $getSellerInfo);
  $rowSellerInfo = mysqli_fetch_array($runSellerInfo);
  $email = $_SESSION['email'];

  $getProducts = "SELECT * FROM products WHERE seller_email='$email'";
  $runProducts = mysqli_query($conn, $getProducts);

  while ($rowProduct = mysqli_fetch_array($runProducts)) {
    $productName = $rowProduct['product_name'];
    // $productCategory = $rowProduct['product_category'];
    $productPrice = $rowProduct['product_price'];
    $productImage = $rowProduct['product_image'];
    $productDescription = $rowProduct['product_description'];

    echo "
        <div class='media d-flex mb-5'>
                    <div class='media-image align-self-center mr-3 rounded'>
                      <a href='#'><img src='./$productImage' alt='customer image'></a>
                    </div>
                    <div class='media-body align-self-center'>
                      <a href='#'>
                        <h6 class='mb-3 text-dark font-weight-medium'> $productName</h6>
                      </a>
                      <p class='float-md-right'><span class='text-dark mr-2'>20</span>Bids</p>
                      <p class='d-none d-md-block'>$productDescription</p>
                      <p class='mb-0'>
                        <span class='text-dark ml-3'>GHS$productPrice</span>
                      </p>
                    </div>
                  </div>
		";
  }
}

/*****************************************************
	Random String FUNCTION
 *****************************************************/
function randomString($n)
{
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $str = '';
  for ($i = 0; $i < $n; $i++) {
    $index = rand(0, strlen($characters) - 1);
    $str .= $characters[$index];
  }

  return $str;
}
