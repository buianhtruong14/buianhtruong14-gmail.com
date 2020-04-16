<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cái Chiên Island</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <LINK REL="SHORTCUT ICON" HREF="./public/images/caichien.ico">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="./public/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="./public/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="./public/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="./public/css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="./public/css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="./public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="./public/css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="./public/fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="./public/css/style.css">

    <!-- Modernizr JS -->
    <script src="./public/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="colorlib-logo"><a href="index.html">Tour</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li><a href="<?php URL.'index'?>">Home</a></li>
<!--                            <li class="has-dropdown">-->
<!--                                <a href="tours.html">Tours</a>-->
<!--                                <ul class="dropdown">-->
<!--                                    <li><a href="#">Destination</a></li>-->
<!--                                    <li><a href="#">Cruises</a></li>-->
<!--                                    <li><a href="#">Hotels</a></li>-->
<!--                                    <li><a href="#">Booking</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
                            <li class="active"><a href="<?= URL.'hotels'?>">Hotels</a></li>
                            <li><a href="<?= URL.'services'?>">Services</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <?php
                foreach ($data['slide'] as $key) {

                    ?>
                    <li style="background-image: url(./public/images/<?php echo $key->image; ?>">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2></h2>
                                        <h1>
                                            <?php
                                            echo $key->title;
                                            ?>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </aside>
    <?php require_once('views/'.$data['page'].'.php');?>
</div>
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="./public/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="./public/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="./public/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="./public/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="./public/js/jquery.flexslider-min.js"></script>
<!-- Owl carousel -->
<script src="./public/js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="./public/js/jquery.magnific-popup.min.js"></script>
<script src="./public/js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="./public/js/bootstrap-datepicker.js"></script>
<!-- Stellar Parallax -->
<script src="./public/js/jquery.stellar.min.js"></script>
<!-- Main -->
<script src="./public/js/main.js"></script>

</body>

</html>

