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
                        <div id="colorlib-logo"><a href="index.html">Cái Chiên</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="<?php if($data['page']=='front/index/index') echo 'active'  ; ?> "><a href="<?= URL.'index'?>">Trang Chủ</a></li>
<!--                            <li class="has-dropdown">-->
<!--                                <a href="tours.html">Tours</a>-->
<!--                                <ul class="dropdown">-->
<!--                                    <li><a href="#">Destination</a></li>-->
<!--                                    <li><a href="#">Cruises</a></li>-->
<!--                                    <li><a href="#">Hotels</a></li>-->
<!--                                    <li><a href="#">Booking</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
                            <li class="<?php if($data['page']=='front/holtels/index') echo 'active'  ; ?>"><a href="<?= URL.'hotels'?>">Hotels</a></li>
                            <li class="<?php if($data['page']=='front/services/index') echo 'active'  ; ?>"><a href="<?= URL.'services'?>">Dịch Vụ</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Liên Hệ</a></li>
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
                    <li style="background-image: url(./public/uploads/<?php echo $key->image; ?>">
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
<footer id="colorlib-footer" role="contentinfo">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-3 colorlib-widget">
                <h4>Đảo Cái Chiên</h4>
                <p>Là một hòn đảo hoang sơ mới được khai thác du lịch mấy năm gần đây. Nằm trong đại phận tỉnh Quảng Ninh, tại huyện Hải Hà.</p>
                <p>
                <ul class="colorlib-social-icons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                </ul>
                </p>
            </div>
            <div class="col-md-2 colorlib-widget">
                <h4>Đặt Ngay</h4>
                <p>
                <ul class="colorlib-footer-links">
                    <!-- <li><a href="#">Flight</a></li> -->
                    <li><a href="#">Hotels</a></li>
                    <!-- <li><a href="#">Tour</a></li> -->
                    <!-- <li><a href="#">Car Rent</a></li>
                    <li><a href="#">Beach &amp; Resorts</a></li>
                    <li><a href="#">Cruises</a></li> -->
                </ul>
                </p>
            </div>
            <div class="col-md-2 colorlib-widget">
                <h4>Dịch Vụ</h4>
                <p>
                <ul class="colorlib-footer-links">
                    <li><a href="#">Cho Thuê Lều Bạt</a></li>
                    <li><a href="#">Cho Thuê Xe Máy</a></li>
                    <li><a href="#">Cho Thuê Võng</a></li>
                    <li><a href="#">Cho Thuê Chỗ Nấu Ăn</a></li>
                    <!-- <li><a href="#">Hotel Epikk</a></li> -->
                </ul>
                </p>
            </div>
            <div class="col-md-2">
                <h4>Blog</h4>
                <ul class="colorlib-footer-links">
                    <li><a href="#">Một Ngày Trải Nghiệm Ở Cái Chiên!</a></li>
                    <li><a href="#">Chuyến đi câu mực tuyệt vời.</a></li>
                    <li><a href="#">Cái Chiên Bãi Biển Thơ Mộng.</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-md-push-1">
                <h4>Thông Tin Liên Hệ</h4>
                <ul class="colorlib-footer-links">
                    <!-- <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li> -->
                    <li><a href="tel://+84936912883">+ 84936912883</a></li>
                    <li><a href="mailto:buianhtruong14@gmail.com">buianhtruong14@gmail.com</a></li>
                    <li><a href="#">caichienisland.com</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    <span class="block">Demo Images: <a href="httl://Unsplash.co" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
                </p>
            </div>
        </div>
    </div>
</footer>

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

