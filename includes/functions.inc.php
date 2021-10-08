<?php
// include database connection
include "./includes/db.inc.php";

/*****************************************************
	CATEGORY FUNCTION
 *****************************************************/
function categoryFunction()
{
    global $conn;
    $getCategories = "SELECT * FROM categories";
    $runCategories = mysqli_query($conn, $getCategories);
    while ($rowCategories = mysqli_fetch_array($runCategories)) {
        $categoryid = $rowCategories['categoryid'];
        $categoryname = $rowCategories['categoryname'];
        echo "
            <li><a href='index.php?categoryname=$categoryname'>$categoryname</a></li>
		";
    }
}



/*****************************************************
	PRODUCTS DISPLAY ALL FUNCTION
 *****************************************************/
function productsFunction()
{
    global $conn;
    if (!isset($_GET['categoryname'])) {
        $getProducts = "SELECT * FROM products ORDER BY RAND() LIMIT 12 OFFSET 0";
        $runProducts = mysqli_query($conn, $getProducts);
        // loop and put the products in an array 
        while ($rowProduct = mysqli_fetch_array($runProducts)) {
            // $productId = $rowProduct['product_id'];
            $productName = $rowProduct['product_name'];
            // $productCategory = $rowProduct['product_category'];
            $productPrice = $rowProduct['product_price'];
            $productImage = $rowProduct['product_image'];
            $productDescription = $rowProduct['product_description'];

            // echo the product on the home page
            echo "
            <div class='product'>
                <div class='product__image'>
                    <img src='$productImage' alt=''>
                </div>
                <div class='product__details'>
                    <p class='description' style='text-transform:uppercase; font-size:0.9em'>$productName</p>
                    <p>Price: <span>GH₵ $productPrice</span></p>
                    <a href='details.php?productName=$productName'><button>Place Bid</button></a>
                </div>
            </div>
				
			";
        }
    }
}

/*****************************************************
	DETAILS FUNCTION
 *****************************************************/
function detailsFunction()
{
    global $conn;
    if (isset($_GET['productName'])) {
        $productName = $_GET['productName'];
        $getProducts = "SELECT * FROM products WHERE product_name='$productName'";
        $runProducts = mysqli_query($conn, $getProducts);
        $rowProduct = mysqli_fetch_array($runProducts);
        $productName = $rowProduct['product_name'];
        $productPrice = $rowProduct['product_price'];
        $productImage = $rowProduct['product_image'];
        $storename = $rowProduct['storename'];
        // $dateAdded = $rowProduct['date_added'];
        // $productDescription = $rowProduct['productDescription'];

        // $getUserInfo = "SELECT * FROM users";
        // $runUserinfo = mysqli_query($conn, $getUserInfo);
        // while ($rowUserInfo = mysqli_fetch_array($runUserinfo)) {
        //     $userName = $rowUserInfo['userName'];
        //     $userPhoneNumber = $rowUserInfo['userPhoneNumber'];
        // }

        // echo the product on the details page
        echo "
			<div class='image'>
                    <img src='images/$productImage' alt='$productName'>
                </div>
                <div class='description'>
                    <h3>$productName</h3>
                    <p>Price - GH₵ <span id='something'>$productPrice</span></p>
                    <p>Sold By | <span>$storename</span></p>
                    <input type='text' placeholder='Enter amount to bid' id='bidAmount'>
                    <button id='placeBidBtn'>Place Bid</button>
                </div>
		";
    }
}


function productCategory()
{
    global $conn;
    if (isset($_GET['productName'])) {
        $productName = $_GET['productName'];
        $getProducts = "SELECT product_category FROM products WHERE product_name='$productName'";
        $runProducts = mysqli_query($conn, $getProducts);
        $rowProduct = mysqli_fetch_array($runProducts);
        $productCategory = $rowProduct['product_category'];
        echo "
			<span>$productCategory</span>
		";
    }
}
