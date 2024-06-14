

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pusat Kebudayaan Jambi</title>

    <!-- banner -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css" />
    <link rel="stylesheet" href="/front/assets/banner/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/front/assets/banner/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css" />
    <link rel="stylesheet" href="/front/assets/banner/css/style.css" />

    <!-- favicon -->
    <link rel="icon" href="favicon.png" sizes="16x16" type="icon/png" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="/front/assets/css/bootstrap.min.css" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="/front/assets/css/line-awesome.min.css" />
    <!-- Animate Css -->
    <link rel="stylesheet" href="/front/assets/css/animate.css" />
    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="/front/assets/css/slick.css" />
    <!-- Magnific Popup Css -->
    <link rel="stylesheet" href="/front/assets/css/magnific-popup.css" />
    <!-- Flat Picker Css -->
    <link rel="stylesheet" href="/front/assets/css/flatpicker.css" />
    <!-- TellInput Css -->
    <link rel="stylesheet" href="/front/assets/css/intlTelInput.css" />
    <!-- Nice Select Css -->
    <link rel="stylesheet" href="/front/assets/css/nice-select.css" />
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/front/assets/css/style.css" />
    <style>
        @media (min-width: 768px) {
            .img-berita-custom {
                height: 220px;
                width: 471px;
                object-fit: cover;
            }
        }
    </style>
</head>

<body>


    @yield('content')

    <!-- footer area start -->
    <footer class="footer-area footer-area-two footer-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-wrapper">
                        <div class="footer-wrapper-flex">
                            <div class="footer-wrapper-single">
                                <div class="footer-widget widget">
                                    <div class="footer-widget-contents">
                                        <div class="footer-widget-logo">
                                            <a href="index.html">
                                                <img src="/front/assets/img/02_logo.png" alt="logo" />
                                            </a>
                                        </div>
                                        <div class="footer-widget-inner mt-4">
                                            <p class="footer-widget-contents-para">
                                                Official Website Yayasan Pusat Kebudayaan Jambi
                                            </p>
                                            <div class="copyright-contents-items mt-5">
                                                <!-- <div class="copyright-contents-single">
                                                    <div class="copyright-contents-single-flex">
                                                        <div class="copyright-contents-single-icon">
                                                            <i class="las la-phone"></i>
                                                        </div>
                                                        <div class="copyright-contents-single-details">
                                                            <span class="copyright-contents-single-details-title"> Nomor Telepon/WhatsApp </span>
                                                            <a href="tel:3104372766" class="copyright-contents-single-details-link"> +62 899-9999-9999 </a>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="copyright-contents-single">
                                                    <div class="copyright-contents-single-flex">
                                                        <div class="copyright-contents-single-icon">
                                                            <i class="las la-envelope"></i>
                                                        </div>
                                                        <div class="copyright-contents-single-details">
                                                            <span class="copyright-contents-single-details-title">
                                                                Email
                                                            </span>
                                                            <a href="mailto:pusatkebudayaanjambi@gmail.com"
                                                                class="copyright-contents-single-details-link">
                                                                pusatkebudayaanjambi@gmail.com
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-wrapper-single">
                                <div class="footer-widget widget">
                                    <h3 class="footer-widget-title text-white">
                                        Alamat Kantor
                                    </h3>
                                    <div class="footer-widget-inner mt-4">
                                        <p class="footer-widget-para">
                                            Jl. Kapten Abdulhasan, No.38A, Kec. Telanaipura, Kota
                                            Jambi. Telp. 082374662791 - 082175235229 Kode Pos. 36136
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-area footer-padding copyright-bg-1">
            <div class="container">
                <div class="copyright-contents">
                    <div class="copyright-contents-flex">
                        <div class="footer-widget-social">
                            <ul class="footer-widget-social-list list-style-none justify-content-center">
                                <!-- <li class="footer-widget-social-list-item">
                                    <a class="footer-widget-social-list-link" href="javascript:void(0)"> <i class="lab la-facebook-f"></i> </a>
                                </li>
                                <li class="footer-widget-social-list-item">
                                    <a class="footer-widget-social-list-link" href="javascript:void(0)"> <i class="lab la-twitter"></i> </a>
                                </li> -->
                                <li class="footer-widget-social-list-item">
                                    <a class="footer-widget-social-list-link"
                                        href="https://www.instagram.com/pusatkebudayaanjambi/?hl=id">
                                        <i class="lab la-instagram"></i>
                                    </a>
                                </li>
                                <li class="footer-widget-social-list-item">
                                    <a class="footer-widget-social-list-link"
                                        href="https://www.youtube.com/@PusatKebudayaanJambi">
                                        <i class="lab la-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <span class="copyright-contents-main">
                            © 2023 | All Rights Reserved by
                            <a href="index.html"> Pusat Kebudayaan Jambi </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->
    <!-- back to top area start -->
    <div class="back-to-top bg-color-two">
        <span class="back-top"> <i class="las la-angle-up"></i> </span>
    </div>
    <!-- back to top area end -->

    <!-- Mouse Cursor start -->
    <div class="mouse-cursor-two">
        <div class="mouse-move mouse-outer bg-color-two"></div>
        <div class="mouse-move mouse-inner bg-color-two"></div>
    </div>
    <!-- Mouse Cursor Ends -->

    <!-- jquery -->
    <script src="/front/assets/js/jquery-3.6.0.min.js"></script>
    <!-- jquery Migrate -->
    <script src="/front/assets/js/jquery-migrate.min.js"></script>
    <!-- bootstrap -->
    <script src="/front/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Wow Js -->
    <script src="/front/assets/js/wow.js"></script>
    <!-- Slick Js -->
    <script src="/front/assets/js/slick.js"></script>
    <!-- ImageLoaded Js -->
    <script src="/front/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope Js -->
    <script src="/front/assets/js/isotope.pkgd.min.js"></script>
    <!-- Magnific Popup Js -->
    <script src="/front/assets/js/jquery.magnific-popup.js"></script>
    <!-- Nice Select Js -->
    <script src="/front/assets/js/jquery.nice-select.js"></script>
    <!-- Flat Picker Js -->
    <script src="/front/assets/js/flatpicker.js"></script>
    <!-- Range Slider Js -->
    <script src="/front/assets/js/nouislider-8.5.1.min.js"></script>
    <!-- TellInput Js -->
    <script src="/front/assets/js/intlTelInput.js"></script>
    <!-- main js -->
    <script src="/front/assets/js/main.js"></script>

    <!-- banner  -->
    <script src="/front/assets/bannerjs/jquery.min.js"></script>
    <script src="/front/assets/bannerjs/popper.js"></script>
    <script src="/front/assets/banner/js/bootstrap.min.js"></script>
    <script src="/front/assets/banner/js/owl.carousel.min.js"></script>
    <script src="/front/assets/banner/js/main.js"></script>
</body>

</html>
