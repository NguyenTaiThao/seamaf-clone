<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SeaMaf</title>

    <!-- inlude resource  -->
    <base href="{{asset('')}}">
    <link menu-item rel="preconnect" href="https://fonts.gstatic.com">
    <link menu-item href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link menu-item rel="stylesheet" href="assets/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <link menu-item rel="stylesheet" href="assets/fontawesome-pro-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    <link menu-item rel="stylesheet" href="css/app.css">
    <link menu-item rel="stylesheet" href="css/homepage.css">
    <link menu-item rel="stylesheet" href="css/productDetail.css">
    <link menu-item rel="stylesheet" href="css/authentication.css">
    <link menu-item rel="stylesheet" href="css/cart.css">
    <link menu-item rel="stylesheet" href="css/category.css">


    <!-- include javascript  -->
    <script src="assets/bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>
    {!! Toastr::message() !!}

    <!-- start header -->
    @include("layouts.header")
    <!-- end header -->


    <!-- start nav -->
    @include("layouts.nav")
    <!-- end nav  -->

    <!-- start content -->
    <main class="container-fluid">
        @yield("content")
    </main>
    <!-- end content -->


    <!-- start footer  -->
    <footer class="footer">
        <div class="col-md-10 offset-md-1">
            <div class="info row">
                <div class="col-md-4 about-us-box">
                    <span class="title">ABOUT</span>
                    <p class="content">Online & physical bead shop with the best beads and beading supplies in Zimbabwe ✓ Over 9000 beads for jewelry making ✓ Glass beads ✓ Beading supplies and much more!</p>
                </div>
                <div class="col-md-4 useful-link-box">
                    <span class="title">USEFUL LINK</span>
                    <div class="row content">
                        <div class="col-6 half-content">
                            <ul>
                                <li>About Us</li>
                                <li>Track Order</li>
                                <li>Shipping</li>
                                <li>Contact</li>
                                <li>My Order</li>
                            </ul>
                        </div>
                        <div class="col-6 half-content">
                            <ul>
                                <li>Support</li>
                                <li>Terms Of Use</li>
                                <li>Privacy Policy</li>
                                <li>Our Services</li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 contact-box">
                    <span class="title">CONTACT</span>
                    <div class="content">
                        <p>
                            <span class="icon-char">C.</span>
                            RVM SeaMaf
                        </p>
                        <p>
                            <span class="icon-char">B.</span>
                            19 Caithness Road Eastlea, Harare
                        </p>
                        <p>
                            <span class="icon-char">T.</span>
                            +263782149840
                        </p>
                        <p>
                            <span class="icon-char">E.</span>
                            rvmseamaf@gmail.com
                        </p>
                    </div>
                </div>
            </div>

            <hr class="divider">
            </hr>

            <div class="contact">
                <div class="social-media">
                    <div class="media">
                        <i class="media-icon fab fa-instagram"></i>
                        <span class="media-name">INSTAGRAM</span>
                    </div>
                    <div class="media">
                        <i class="media-icon fab fa-pinterest"></i>
                        <span class="media-name">PINTEREST</span>
                    </div>
                    <div class="media">
                        <i class="media-icon fab fa-facebook-square"></i>
                        <span class="media-name">FACEBOOK</span>
                    </div>
                    <div class="media">
                        <i class="media-icon fab fa-twitter"></i>
                        <span class="media-name">TWITTER</span>
                    </div>
                    <div class="media">
                        <i class="media-icon fab fa-youtube"></i>
                        <span class="media-name">YOUTUBE</span>
                    </div>
                    <div class="media">
                        <i class="media-icon fab fa-linkedin"></i>
                        <span class="media-name">LINKEDIN</span>
                    </div>
                </div>
                <div class="copyright">
                    <span class="copyright-text">Copyright ©2021 All rights reserved | Developed By Eloquent Geeks</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer  -->

</body>

</html>