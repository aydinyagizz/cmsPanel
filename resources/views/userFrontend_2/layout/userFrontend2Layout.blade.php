<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gp Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title")</title>

    <!-- Favicons -->
    <link href="{{ asset('public/userFrontend_2/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('public/userFrontend_2/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/userFrontend_2/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('public/userFrontend_2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/userFrontend_2/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/userFrontend_2/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/userFrontend_2/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/userFrontend_2/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/userFrontend_2/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('public/userFrontend_2/assets/css/style.css') }}" rel="stylesheet">






    @yield('css')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script data-search-pseudo-elements defer
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
            crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha512-I5TkutApDjnWuX+smLIPZNhw+LhTd8WrQhdCKsxCFRSvhFx2km8ZfEpNIhF9nq04msHhOkE8BMOBj5QE07yhMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




    <style>
        .pricing-content{position:relative;}
        .pricing_design{
            position: relative;
            margin: 0px 15px;
        }
        .pricing_design .single-pricing{
            background:#554c86;
            padding: 60px 40px;
            border-radius:30px;
            box-shadow: 0 10px 40px -10px rgba(0,64,128,.2);
            position: relative;
            z-index: 1;
        }
        .pricing_design .single-pricing:before{
            content: "";
            background-color: #fff;
            width: 100%;
            height: 100%;
            border-radius: 18px 18px 190px 18px;
            border: 1px solid #eee;
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: -1;
        }
        .price-head{}
        .price-head h2 {
            margin-bottom: 20px;
            font-size: 26px;
            font-weight: 600;
        }
        .price-head h1 {
            font-weight: 600;
            margin-top: 30px;
            margin-bottom: 5px;
        }
        .price-head span{}

        .single-pricing ul{list-style:none;margin-top: 30px;}
        .single-pricing ul li {
            line-height: 36px;
        }
        .single-pricing ul li i {
            background: #554c86;
            color: #fff;
            width: 20px;
            height: 20px;
            border-radius: 30px;
            font-size: 11px;
            text-align: center;
            line-height: 20px;
            margin-right: 6px;
        }
        .pricing-price{}

        .price_btn {
            background: #554c86;
            padding: 10px 30px;
            color: #fff;
            display: inline-block;
            margin-top: 20px;
            border-radius: 2px;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }
        .price_btn:hover{background:#0aa1d6;}
        a{
            text-decoration:none;
        }

        .section-title {
            margin-bottom: 60px;
        }
        .text-center {
            text-align: center!important;
        }

        .section-title h2 {
            font-size: 45px;
            font-weight: 600;
            margin-top: 0;
            position: relative;
            text-transform: capitalize;
        }
    </style>



    {{--    style faq start--}}
    <style>
        .section_padding_130 {
            /*padding-top: 130px;*/
            /*padding-bottom: 130px;*/
        }
        .faq_area {
            position: relative;
            z-index: 1;
            /*background-color: #f5f5ff;*/
        }

        .faq-accordian {
            position: relative;
            z-index: 1;
        }
        .faq-accordian .card {
            position: relative;
            z-index: 1;
            margin-bottom: 1.5rem;
        }
        .faq-accordian .card:last-child {
            margin-bottom: 0;
        }
        .faq-accordian .card .card-header {
            background-color: #f5f5ff;
            padding: 0;
            border-bottom-color: #ebebeb;
        }
        .faq-accordian .card .card-header h6 {
            cursor: pointer;
            padding: 1.75rem 2rem;
            color: #3f43fd;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-grid-row-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
        .faq-accordian .card .card-header h6 span {
            font-size: 1.5rem;
        }
        .faq-accordian .card .card-header h6.collapsed {
            color: #070a57;
        }
        .faq-accordian .card .card-header h6.collapsed span {
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }
        .faq-accordian .card .card-body {
            padding: 1.75rem 2rem;
        }
        .faq-accordian .card .card-body p:last-child {
            margin-bottom: 0;
        }

        @media only screen and (max-width: 575px) {
            .support-button p {
                font-size: 14px;
            }
        }

        .support-button i {
            color: #3f43fd;
            font-size: 1.25rem;
        }
        @media only screen and (max-width: 575px) {
            .support-button i {
                font-size: 1rem;
            }
        }

        .support-button a {
            text-transform: capitalize;
            color: #2ecc71;
        }
        @media only screen and (max-width: 575px) {
            .support-button a {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto " href="#pricing">Pricing</a></li>
                <li><a class="nav-link scrollto " href="#faq">FAQ</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>





</header><!-- End Header -->


@yield('content')



<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>Gp<span>.</span></h3>
                        <p>
                            A108 Adam Street <br>
                            NY 535022, USA<br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('public/userFrontend_2/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('public/userFrontend_2/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('public/userFrontend_2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/userFrontend_2/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('public/userFrontend_2/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('public/userFrontend_2/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('public/userFrontend_2/assets/vendor/php-email-form/validate.js') }}"></script>



<!-- Template Main JS File -->
<script src="{{ asset('public/userFrontend_2/assets/js/main.js') }}"></script>

@yield('js')
</body>

</html>
