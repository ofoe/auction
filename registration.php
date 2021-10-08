<?php
include "./includes/db.inc.php";
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
    <!-- <link rel="stylesheet" href="css/login.css"> -->
</head>

<body>
    <!-- ---------------------------------------------------------- 
        NAVIGATION
    ------------------------------------------------------------ -->
    <?php include "./includes/header.inc.php" ?>

    <!-- Register -->
    <section class="registration">
        <div class="left">
            <div class="image">
                <img src="images/huawei_p20_lite_-_small.jpg" alt="">
            </div>
        </div>
        <div class="right">
            <div>
                <h2>Register</h2>
            </div>
            <div class="accounttype">
                <div id="tab-1" class="tab-item tab-border">
                    Buyer account
                </div>
                <div id="tab-2" class="tab-item">
                    Seller account
                </div>
            </div>
            <div class="tab-content">
                <!-- buyer account tab -->
                <div id="tab-1-content" class="tab-content-item shows">
                    <form action="./includes/registerbuyer.inc.php" method="post">
                        <input type="text" name="username" placeholder="Username" required="required">
                        <input type="email" name="email" placeholder="Email" required="required" />
                        <input type="text" name="phone" required="required" placeholder="Phone Number">
                        <input type="password" name="password" placeholder="Password" required="required" />
                        <input type="password" name="repeatpassword" placeholder="Re-enter Password" required="required" />
                        <button type="submit" name="buyerBtn" class="btn btn-primary btn-block btn-large">Register</button>
                    </form>

                </div>

                <!-- seller account tab -->
                <div id="tab-2-content" class="tab-content-item">
                    <form method="post" action="./includes/registerseller.inc.php">
                        <input type="text" name="username" placeholder="Business Name" required="required">
                        <input type="email" name="email" placeholder="Email" required="required" />
                        <input type="text" name="phone" required="required" placeholder="Phone Number">
                        <input type="password" name="password" placeholder="Password" required="required" />
                        <input type="password" name="repeatpassword" placeholder="Re-enter Password" required="required" />
                        <button type="submit" name="sellerBtn" class="btn btn-primary btn-block btn-large">Register</button>
                    </form>

                </div>
            </div>
            <div>
                <p>Already have an account <a href="login.php">Login</a></p>
            </div>
        </div>
    </section>

    <?php include "./includes/footer.inc.php" ?>


    <!-- <script src="./js/script.js"></script> -->
    <script>
        // DROPDOWN
        var account = document.querySelector('.account');
        var accountList = document.querySelector('.account__list');
        account.addEventListener('click', function() {
            accountList.classList.toggle('show');
        });

        window.onclick = function(event) {
            if (!event.target.matches('.account')) {
                var accountList = document.getElementsByClassName("account__list");
                var i;
                for (i = 0; i < accountList.length; i++) {
                    var openDropdown = accountList[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
    <script>
        // tabs
        var tabItem = document.querySelectorAll('.tab-item');
        var tabContentItems = document.querySelectorAll('.tab-content-item');

        // select Items function
        function selectItem(e) {
            // remove border from all tabs first
            removeBorder();
            // remove shows class
            removeShows();
            // add border
            this.classList.add('tab-border');

            // grab content from DOM
            const tabContentItem = document.querySelector(`#${this.id}-content`);
            // add show class
            tabContentItem.classList.add('shows');
        }

        function removeBorder() {
            tabItem.forEach(item => item.classList.remove('tab-border'));
        }

        function removeShows() {
            tabContentItems.forEach(item => item.classList.remove('shows'));
        }

        tabItem.forEach(item => item.addEventListener('click', selectItem));
    </script>
</body>

</html>