<header class="header">
    <div class="top">
        <div class="logo"><a href="./index.php">myAuction</a></div>
        <div class="searchBtn">
            <input type="text" placeholder="search for products">
            <button style="cursor: pointer;" class="searchBtn">Search</button>
        </div>
        <div class="top__right">
            <ul class="top__right__mainList">
                <!-- <li>Wishlist</li> -->
                <li class="account">
                    Account
                    <?php
                    if (isset($_SESSION['email'])) {
                        $email = $_SESSION['email'];
                        $getUser = "SELECT * FROM seller WHERE seller_email='$email'";
                        $runUser = mysqli_query($conn, $getUser);

                        while ($rowUser = mysqli_fetch_array($runUser)) {
                            $storename = $rowUser['storename'];
                            echo "
								<ul class='account__list'>
                                    <li><a href='./seller/index.php'>$storename</a></li>
                                    <li><a href='./includes/logout.inc.php'>Logout</a></li>
                                </ul>
			        		";
                        }
                    }
                    if (!isset($_SESSION['email'])) {
                        echo "
								<ul class='account__list'>
                                    <li><a href='login.php'>Login</a></li>
                                    <li><a href='registration.php'>Register</a></li>
                                </ul>
			        		";
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
    <nav>
        <div>
            <p>FIND POPULAR SHOPS</p>
        </div>
        <!-- <ul>
            <li><a href="#">Flash deals</a></li>
            <li><a href="#">All ads</a></li>
            <li><a href="#">help center</a></li>
        </ul> -->
        <div>
            <p>Ghana's Fastest growing Online Marketplace</p>
        </div>
    </nav>
</header>