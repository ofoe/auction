<?php
include "./includes/db.inc.php";
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
</head>

<body>
    <!-- ---------------------------------------------------------- 
        NAVIGATION
    ------------------------------------------------------------ -->
    <?php include "./includes/header.inc.php"; ?>


    <!-- ---------------------------------------------------------- 
        Details
    ------------------------------------------------------------ -->
    <section class="details">
        <div class="categorybanner">
            <img src="images/1515972045_15159720451006049653.png" alt="">
        </div>
        <div class="productcategory">
            <div class="left">
                <p>Home > <?php productCategory(); ?></p>
            </div>
            <div class="right">
                <ul>
                    <li><a href="#">Sort By</a></li>
                </ul>
            </div>
        </div>
        <div class="productdetails">
            <!-- <div class="left">

            </div> -->
            <div class="right">
                <?php detailsFunction(); ?>
                <div class="others">
                    <div class="timer">
                        <p>Bid Ends in</p>
                        <p id="demo"></p>
                        <div class="safetytips">
                            <h3>Safety Tips</h3>
                            <p>
                                Do not pay in advance even for the delivery
                                Try to meet at a safe, public location
                                Check the item BEFORE you buy it
                                Pay only after collecting the item</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="tabs">
            <div id="tab-1" class="tab-item tab-border">
                Pending
            </div>
            <div id="tab-2" class="tab-item">
                Confirmed
            </div>
            <div id="tab-3" class="tab-item">
                Rejected
            </div>
        </div>
        <hr>
        <div class="bottom">
            <div id="tab-1-content" class="tab-content-item shows">
                <p>ONELorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quam ut modi consectetur
                    soluta
                    ratione at a provident esse repellendus voluptatibus autem rem laborum corrupti amet inventore
                    ducimus et delectus dolore, sit enim! Ratione fuga veniam odit. Doloremque fugiat optio
                    accusantium qui provident ducimus itaque reprehenderit, sequi nobis nesciunt eos sit
                    voluptatibus officiis, obcaecati doloribus placeat, modi animi eaque? Fuga blanditiis aliquam
                    nulla porro neque labore quia ad laboriosam quis. Culpa recusandae doloribus cupiditate
                    voluptates praesentium. Pariatur eum dolores illo voluptatibus quasi. Debitis facere quam
                    necessitatibus numquam, commodi vitae facilis nesciunt rerum enim molestiae assumenda quidem
                    vero, praesentium provident ipsam cupiditate incidunt? Earum ratione commodi cupiditate non
                    pariatur temporibus aperiam tempore nostrum veritatis tempora. Quaerat, mollitia vel totam quasi
                    amet quas libero eligendi fugit aspernatur accusamus tempora officiis, sapiente eum, rem soluta
                    ullam cumque cupiditate repellendus sed. Voluptatem recusandae libero ipsam amet repudiandae
                    eveniet, nam omnis ex dignissimos repellat neque cum asperiores! Error iste nam cum in voluptas
                    neque iusto doloribus dolorem, eveniet et, impedit perspiciatis eius ullam nulla similique, rem
                    consequatur suscipit repellendus distinctio aperiam vero itaque dolores dicta quasi. Mollitia
                    perspiciatis necessitatibus culpa est odit. Corporis odit nobis deserunt iusto corrupti. Iste
                    nobis asperiores doloribus repellat et perferendis?</p>
            </div>
            <div id="tab-2-content" class="tab-content-item">
                <p>ONELorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quam ut modi consectetur
                    soluta
                    ratione at a provident esse repellendus voluptatibus autem rem laborum corrupti amet inventore
                    ducimus et delectus dolore, sit enim! Ratione fuga veniam odit. Doloremque fugiat optio
                    accusantium qui provident ducimus itaque reprehenderit, sequi nobis nesciunt eos sit
                    voluptatibus officiis, obcaecati doloribus placeat, modi animi eaque? Fuga blanditiis aliquam
                    nulla porro neque labore quia ad laboriosam quis. Culpa recusandae doloribus cupiditate
                    voluptates praesentium. Pariatur eum dolores illo voluptatibus quasi. Debitis facere quam
                    necessitatibus numquam, commodi vitae facilis nesciunt rerum enim molestiae assumenda quidem
                    vero, praesentium provident ipsam cupiditate incidunt? Earum ratione commodi cupiditate non
                    pariatur temporibus aperiam tempore nostrum veritatis tempora. Quaerat, mollitia vel totam quasi
                    amet quas libero eligendi fugit aspernatur accusamus tempora officiis, sapiente eum, rem soluta
                    ullam cumque cupiditate repellendus sed. Voluptatem recusandae libero ipsam amet repudiandae
                    eveniet, nam omnis ex dignissimos repellat neque cum asperiores! Error iste nam cum in voluptas
                    neque iusto doloribus dolorem, eveniet et, impedit perspiciatis eius ullam nulla similique, rem
                    consequatur suscipit repellendus distinctio aperiam vero itaque dolores dicta quasi. Mollitia
                    perspiciatis necessitatibus culpa est odit. Corporis odit nobis deserunt iusto corrupti. Iste
                    nobis asperiores doloribus repellat et perferendis?</p>
            </div>
            <div id="tab-3-content" class="tab-content-item">
                <p>ONELorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quam ut modi consectetur
                    soluta
                    ratione at a provident esse repellendus voluptatibus autem rem laborum corrupti amet inventore
                    ducimus et delectus dolore, sit enim! Ratione fuga veniam odit. Doloremque fugiat optio
                    accusantium qui provident ducimus itaque reprehenderit, sequi nobis nesciunt eos sit
                    voluptatibus officiis, obcaecati doloribus placeat, modi animi eaque? Fuga blanditiis aliquam
                    nulla porro neque labore quia ad laboriosam quis. Culpa recusandae doloribus cupiditate
                    voluptates praesentium. Pariatur eum dolores illo voluptatibus quasi. Debitis facere quam
                    necessitatibus numquam, commodi vitae facilis nesciunt rerum enim molestiae assumenda quidem
                    vero, praesentium provident ipsam cupiditate incidunt? Earum ratione commodi cupiditate non
                    pariatur temporibus aperiam tempore nostrum veritatis tempora. Quaerat, mollitia vel totam quasi
                    amet quas libero eligendi fugit aspernatur accusamus tempora officiis, sapiente eum, rem soluta
                    ullam cumque cupiditate repellendus sed. Voluptatem recusandae libero ipsam amet repudiandae
                    eveniet, nam omnis ex dignissimos repellat neque cum asperiores! Error iste nam cum in voluptas
                    neque iusto doloribus dolorem, eveniet et, impedit perspiciatis eius ullam nulla similique, rem
                    consequatur suscipit repellendus distinctio aperiam vero itaque dolores dicta quasi. Mollitia
                    perspiciatis necessitatibus culpa est odit. Corporis odit nobis deserunt iusto corrupti. Iste
                    nobis asperiores doloribus repellat et perferendis?</p>
            </div>

        </div>
    </section>


    <!-- ---------------------------------------------------------- 
            Footer
     ------------------------------------------------------------ -->
    <footer class="footer">
        <div class="overview">
            <h3>Company Overview</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae officia consequatur itaque
                dolore molestias autem, asperiores cum. Cum, autem placeat.</p>
        </div>
        <div class="overview">
            <h3>BUY ON myAuction.COM</h3>
            <ul>
                <li><a href="#">Browse All Categories</a></li>
                <li><a href="#">How to bid on Our website</a></li>
                <li><a href="#">Track your bids</a></li>
                <li><a href="#">Browse Popular shops</a></li>
                <li><a href="#">Customer account</a></li>
            </ul>
        </div>
        <div class="overview">
            <h3>Sell ON myAuction.COM</h3>
            <ul>
                <li><a href="#">Browse All Categories</a></li>
                <li><a href="#">How to bid on Our website</a></li>
                <li><a href="#">Track your bids</a></li>
                <li><a href="#">Browse Popular shops</a></li>
                <li><a href="#">Customer account</a></li>
            </ul>
        </div>
        <div class="overview">
            <h3>CUSTOMER SERVICE</h3>
            <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
            </ul>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
    <p id="demo"></p>

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

    <script>
        // 
        // Set the date we're counting down to
        var countDownDate = new Date("Sep 26, 2021 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
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


</body>

</html>