<?php
// include database connection 
include "./includes/db.inc.php";
// include function
include "./includes/functions.inc.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auction</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
</head>

<body>
    <!-- ---------------------------------------------------------- 
        NAVIGATION
    ------------------------------------------------------------ -->
    <?php include "./includes/header.inc.php" ?>
    <!-- ---------------------------------------------------------- 
        Banner
    ------------------------------------------------------------ -->
    <section class="banner">
        <div class="categories">
            <h2>Categories</h2>
            <ul>
                <?php
                categoryFunction();
                ?>
            </ul>
        </div>
        <div class="ads">
            <div class="owl-carousel owl-theme slider">
                <div class="item">
                    <img src="images/slider-4.png" alt="">
                </div>
                <div class="item">
                    <img src="images/slider-1.png" alt="">
                </div>
            </div>
            <div class="tags">
                <div class="tags__offer">
                    <h5>Best Offer <span>(Free Shipping)</span></h5>
                </div>
                <div class="tags__price">
                    <h5>Best Price <span>(unlimited Discount)</span></h5>
                </div>
            </div>
            <div class="imgs">
                <div><img src="images/flasha.png" alt=""></div>
                <div><img src="images/auto-adsa.png" alt=""></div>
            </div>
        </div>
        <div class="account">
            <div class="avatar"></div>
            <p>Create Buyer or Seller account</p>
            <button><a href="registration.php">Buyer Account</a></button>
            <button><a href="registration.php"> Seller Acount <a></button>
        </div>
    </section>

    <!-- ---------------------------------------------------------- 
        cta paragraph
    ------------------------------------------------------------ -->
    <section class="ctaparagraph">
        <p><span>Create Your store on AuctionsGh ,Ghana's, largest auction site</span> <br>
            Have something to sell? Ghana's Biggest online shopping site. Connect with retailers, wholesalers &
            Distributors in
            Ghana.</p>
    </section>
    <!-- ---------------------------------------------------------- 
        Product Display
    ------------------------------------------------------------ -->
    <section class="productdisplay">
        <div class="top">
            <h2>Latest Products</h2>
            <div class="filter">
                <h4>Filter <span>|</span></h4>
                <ul>
                    <li><a href="#">Filter</a></li>
                    <!-- <li><a href="#">Filter</a></li>
                    <li><a href="#">Filter</a></li> -->
                </ul>
            </div>
        </div>
        <hr>
        <br>
        <div class="products">
            <!-- <div class="product">
                <div class="product__image">
                    <img src="images/chair.png" alt="">
                </div>
                <div class="product__details">
                    <p class="description">Lorem ipsum dolor sit amet consectetur.</p>
                    <p>Starting Price: <span>$20.00</span></p>
                    <a href="details.php"><button>Place Bid</button></a>
                </div>
            </div> -->
            <?php productsFunction(); ?>


        </div>
    </section>

    <!-- ---------------------------------------------------------- 
            Product Display (Ending Soon)
        ------------------------------------------------------------ -->
    <!-- <section class="productdisplay">
        <div class="top">
            <h2>Latest Products</h2>
            <div class="filter">
                <h4>Filter <span>|</span></h4>
                <ul>
                    <li><a href="#">Filter</a></li>
                    <li><a href="#">Filter</a></li>
                    <li><a href="#">Filter</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <br>
        <div class="products">
            <div class="product">
                <img src="images/chair.png" alt="">
                <p>Starting Price: $20.00</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <a href="details.html"><button>Place Bid</button></a>
            </div>
            <div class="product">
                <img src="images/ring.jpg" alt="">
                <p>Starting Price: $20.00</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <a href="details.html"><button>Place Bid</button></a>
            </div>
            <div class="product">
                <img src="images/chair.png" alt="">
                <p>Starting Price: $20.00</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <a href="details.html"><button>Place Bid</button></a>
            </div>
            <div class="product">
                <img src="images/chair.png" alt="">
                <p>Starting Price: $20.00</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <a href="details.html"><button>Place Bid</button></a>
            </div>
            <div class="product">
                <img src="images/chair.png" alt="">
                <p>Starting Price: $20.00</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <a href="details.html"><button>Place Bid</button></a>
            </div>
            <div class="product">
                <img src="images/chair.png" alt="">
                <p>Starting Price: $20.00</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <a href="details.html"><button>Place Bid</button></a>
            </div>
            <div class="product">
                <img src="images/chair.png" alt="">
                <p>Starting Price: $20.00</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <a href="details.html"><button>Place Bid</button></a>
            </div>
            <div class="product">
                <img src="images/chair.png" alt="">
                <p>Starting Price: $20.00</p>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <a href="details.html"><button>Place Bid</button></a>
            </div>

        </div>
    </section> -->
    <!-- ---------------------------------------------------------- 
                Flash Deals
            ------------------------------------------------------------ -->

    <!-- <section class="flashdeals">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum at, deserunt reprehenderit numquam quos
            error fugiat sed facilis nihil dignissimos maxime eius quae beatae et, architecto voluptatum sint labore
            vitae!</p>
    </section> -->
    <!-- ---------------------------------------------------------- 
            mailing list
        ------------------------------------------------------------ -->
    <!-- <section class="mailinglist">
    </section> -->
    <!-- ---------------------------------------------------------- 
            Footer
     ------------------------------------------------------------ -->

    <?php include "./includes/footer.inc.php" ?>

    <script src="js/jquery.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>


    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
</body>

</html>