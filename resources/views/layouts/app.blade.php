<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>QIXER - Service Based Business HTML Template</title>

    <!-- favicon -->
    <link rel=icon href="favicons.ico" sizes="16x16" type="icon/ico">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- slick carousel  -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!-- LineAwesome -->
    <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="loader_bars">
            <span></span>
        </div>
    </div>
</div>
<!-- preloader area end -->
<!-- Header area Starts -->
<header class="header-style-01">
    <!-- Menu area Starts -->
    <nav class="navbar navbar-area navbar-two navbar-expand-lg section-bg-2">
        <div class="container container-two nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="index.html" class="logo">
                        <img src="assets/img/logo-03.png" alt="">
                    </a>
                </div>
                <a href="#0" class="click_show_icon">
                    <i class="las la-ellipsis-v"></i>
                </a>
                <button class="navbar-toggler black-color" type="button" data-toggle="collapse"
                        data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    <li class="menu-item-has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home 01</a></li>
                            <li><a href="02_index.html">Home 02</a></li>
                            <li><a href="03_index.html">Home 03</a></li>
                            <li><a href="04_index.html">Home 04</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="service_list.html">Service List</a></li>
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Others</a>
                        <ul class="sub-menu">
                            <li><a href="service_details.html">Service Details</a></li>
                            <li><a href="02_service_details.html">Service Details Two</a></li>
                            <li><a href="03_service_details.html">Service Details Three</a></li>
                            <li><a href="04_service_details.html">Service Details Four</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="seller_profile.html">Seller Profile</a></li>
                            <li><a href="seller_order_view.html">Seller View</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="signup.html">Signup</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="error.html">404</a></li>
                            <li><a href="multistep_form.html">multistep Form</a></li>
                            <li><a href="02_multistep_form.html">multistep Form Two</a></li>
                            <li><a href="register_step_form.html">RegisterStep Form</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog_details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">contact</a></li>
                </ul>
            </div>
            <div class="nav-right-content">
                <div class="info-bar-item">
                    <div class="notification-icon icon">
                        <a class="single-icon" href="javascript:void(0)"> <i class="las la-bell"></i> </a>
                        <span class="notification-number"> 5 </span>
                        <div class="notification-list-wrapper">
                            <h6 class="notification-title"> Notifications </h6>
                            <ul class="notification-list">
                                <li class="list">
                                    <div class="notification-list-flex">
                                        <div class="item-icon">
                                            <i class="las la-bell"></i>
                                        </div>
                                        <div class="notification-contents">
                                            <a class="list-title" href="javascript:void(0)"> Notification One </a>
                                            <span class="list-sub"> 4 hours ago </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list">
                                    <div class="notification-list-flex">
                                        <div class="item-icon">
                                            <i class="las la-bell"></i>
                                        </div>
                                        <div class="notification-contents">
                                            <a class="list-title" href="javascript:void(0)"> Notification Two </a>
                                            <span class="list-sub"> 8 hours ago </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list">
                                    <div class="notification-list-flex">
                                        <div class="item-icon">
                                            <i class="las la-bell"></i>
                                        </div>
                                        <div class="notification-contents">
                                            <a class="list-title" href="javascript:void(0)"> Notification Three </a>
                                            <span class="list-sub"> 1 day ago </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list">
                                    <div class="notification-list-flex">
                                        <div class="item-icon">
                                            <i class="las la-bell"></i>
                                        </div>
                                        <div class="notification-contents">
                                            <a class="list-title" href="javascript:void(0)"> Notification Four </a>
                                            <span class="list-sub"> 3 day ago </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list">
                                    <div class="notification-list-flex">
                                        <div class="item-icon">
                                            <i class="las la-bell"></i>
                                        </div>
                                        <div class="notification-contents">
                                            <a class="list-title" href="javascript:void(0)"> Notification Five </a>
                                            <span class="list-sub"> 7 day ago </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="javascript:void(0)" class="all-notification"> See All Notification </a>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)" class="info-bar-item-two">
                    <div class="author-thumb">
                        <img src="assets/img/author-nav.jpg" alt="">
                    </div>
                    <div class="author-nav-content">
                        <span class="title"> Alex Jerin </span>
                    </div>
                </a>
            </div>
        </div>
    </nav>
    <!-- Menu area end -->
</header>
<div class="overlays"></div>
<!-- Header area end -->
<!-- Location Overview area starts -->
<section class="location-overview-area padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @yield('contents')
            </div>
        </div>
    </div>
</section>
<!-- Location Overview area end -->
<!-- footer area start -->
<footer class="footer-area section-bg-2">
    <div class="footer-top padding-top-100 padding-bottom-70">
        <div class="container container-two">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget widget ">
                        <div class="about_us_widget">
                            <a href="index.html" class="footer-logo"> <img src="assets/img/logo-footer.png"
                                                                           alt="footer logo"></a>
                        </div>
                        <div class="footer-inner">
                            <p class="footer-para">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                                that it has a more-or-less. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget widget">
                        <h6 class="widget-title">Community</h6>
                        <div class="footer-inner">
                            <ul class="footer-link-list">
                                <li class="list"><a href="#">Forum</a></li>
                                <li class="list"><a href="#">Become a Seller</a></li>
                                <li class="list"><a href="#">Become a Buyer</a></li>
                                <li class="list"><a href="#">Affiliates</a></li>
                                <li class="list"><a href="#">Events</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget widget">
                        <h6 class="widget-title">Category</h6>
                        <div class="footer-inner">
                            <ul class="footer-link-list">
                                <li class="list"><a href="#">Cleaning</a></li>
                                <li class="list"><a href="#">House Move</a></li>
                                <li class="list"><a href="#">Electric</a></li>
                                <li class="list"><a href="#">Painting</a></li>
                                <li class="list"><a href="#">Salon & Spa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget widget">
                        <h6 class="widget-title">Store Info</h6>
                        <div class="footer-inner">
                            <ul class="footer-link-address">
                                <li class="list"><span class="address"> <i class="las la-map-marker-alt"></i> 41/1, Hilton Mall, NY City </span>
                                </li>
                                <li class="list"><span class="address"> <a href="tel:+012-78901234"> <i
                                                class="las la-mobile-alt"></i> +012-78901234</a> </span></li>
                                <li class="list"><span class="address"> <a href="mailto:help@mail.com"> <i
                                                class="las la-envelope"></i> help@mail.com</a> </span></li>
                            </ul>
                            <div class="footer-socials">
                                <ul class="footer-social-list">
                                    <li class="lists">
                                        <a class="facebook" href="#0"> <i class="lab la-facebook-f"></i> </a>
                                    </li>
                                    <li class="lists">
                                        <a class="twitter" href="#0"> <i class="lab la-twitter"></i> </a>
                                    </li>
                                    <li class="lists">
                                        <a class="instagram" href="#0"> <i class="lab la-instagram"></i> </a>
                                    </li>
                                    <li class="lists">
                                        <a class="youtube" href="#0"> <i class="lab la-youtube"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area copyright-border">
        <div class="container container-two">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <ul class="copyright-list">
                        <li class="list">
                            <a href="javascript:void(0)"> Privacy Policy </a>
                        </li>
                        <li class="list">
                            <a href="javascript:void(0)"> Terms & Conditions </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="copyright-contents">
                        <span> All copyright (C) 2021 Reserved </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="copyright-payment">
                        <ul class="payment-list">
                            <li class="list">
                                <a href="javascript:void(0)"> <img src="assets/img/footer/c1.png" alt=""> </a>
                            </li>
                            <li class="list">
                                <a href="javascript:void(0)"> <img src="assets/img/footer/c2.png" alt=""> </a>
                            </li>
                            <li class="list">
                                <a href="javascript:void(0)"> <img src="assets/img/footer/c3.png" alt=""> </a>
                            </li>
                            <li class="list">
                                <a href="javascript:void(0)"> <img src="assets/img/footer/c4.png" alt=""> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="las la-angle-up"></i></span>
</div>
<!-- back to top area end -->


<!-- jquery -->
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<!-- jquery Migrate -->
<script src="{{asset('assets/js/jquery-migrate.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- wow -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset('assets/js/slick.js')}}"></script>
<!-- Nice Select -->
<script src="{{asset('assets/js/jquery.nice-select.js')}}"></script>
<!-- Nice Scroll -->
<script src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/js/main.js')}}"></script>
<!-- Paypal -->
<script src="https://www.paypal.com/sdk/js?client-id=AQXnwkgdwSRKMTdWy0UQwf823C0uoOY3CGxfVPp6qyVJAn9RHdDns9IqempsbaDsEDIDVBiK3Wla6l46&currency=USD"></script>
<!-- custom js -->
<script src="{{asset('assets/js/custom.js')}}"></script>

@yield('scripts')

</body>
</html>
