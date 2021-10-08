<?php
include("../../includes/db.inc.php");
include("./dfunctions.inc.php");
session_start();
/**********************************************************
		INSERT PRODUCT
 **********************************************************/
//if user clicks on addproduct button 
if (isset($_POST['addProductBtn'])) {
    $productName = mysqli_real_escape_string($conn, $_POST['productname']);
    $productPrice = mysqli_real_escape_string($conn, $_POST['productprice']);
    $productCategory = $_POST['productcategory'];
    $productDescription = mysqli_real_escape_string($conn, $_POST['productdescription']);
    $bidstart = mysqli_real_escape_string($conn, $_POST['bidstart']);
    $bidend = mysqli_real_escape_string($conn, $_POST['bidend']);
    $productImage = $_FILES['productimage'];




    // input validation
    // check if product name fields are empty

    if (empty($productName)) {
        $_SESSION['error'] = "Please enter product name";
        header("Location: ../add-product.php?productName=empty");
        exit();
    } else {
        //check if product price field is empty
        if (empty($productPrice)) {
            $_SESSION['error'] = "Please enter product price";
            header("Location: ../add-product.php?productPrice=empty");
            exit();
        } else {
            if (empty($productImage)) {
                $_SESSION['error'] = "Please enter product Image";
                header("Location: ../add-product.php?productImage=empty");
                exit();
            } else {
                if (empty($productDescription)) {
                    $_SESSION['error'] = "Please Describe your product";
                    header("Location: ../add-product.php?productDescription=empty");
                    exit();
                } else {
                    if (empty($productCategory)) {
                        $_SESSION['error'] = "Select product category";
                        header("Location: ../add-product.php?productCategory=empty");
                        exit();
                    } else {
                        if (empty($bidstart)) {
                            $_SESSION['error'] = "Please add a start Date and Time";
                            header("Location: ../add-product.php?bidstart=empty");
                            exit();
                        } else {
                            if (empty($bidend)) {
                                $_SESSION['error'] = "Please add a close Date and Time";
                                header("Location: ../add-product.php?bidstart=empty");
                                exit();
                            }
                            //inserting the inputs into the database
                            $email = $_SESSION['email'];
                            $getUser = "SELECT * FROM seller WHERE seller_email='$email'";
                            $runUser = mysqli_query($conn, $getUser);


                            while ($rowUser = mysqli_fetch_array($runUser)) {
                                $storename = $rowUser['storename'];
                                $email = $rowUser['seller_email'];


                                $imagePath = "";
                                // image upload
                                if (!is_dir('../images')) {
                                    mkdir('../images');
                                }
                                if ($productImage && $productImage['tmp_name']) {
                                    $imagePath = '../images/' . randomString(8) . '/' . $productImage['name'];
                                    // echo "<pre>";
                                    // var_dump($imagePath);
                                    // echo "</pre>";
                                    // exit;
                                    mkdir(dirname($imagePath));
                                    move_uploaded_file($productImage['tmp_name'], $imagePath);
                                }

                                $insertProduct = "INSERT INTO products (product_name,product_price,product_category,product_description,product_image,bid_start,bid_end,storename,seller_email,date_added) VALUES ('$productName' , '$productPrice', '$productCategory' , '$productDescription' , '$productImage' , '$bidstart' , '$bidend' , '$storename' , '$email', NOW());";
                                $runProduct = mysqli_query($conn, $insertProduct);
                                // 

                                $_SESSION['success'] = "Product added succesfully";
                                header('Location: ../add-product.php');
                                exit();
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    $_SESSION['error'] = "Can't add Product";
    header('Location: ../add-product.php');
}
