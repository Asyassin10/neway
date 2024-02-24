<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NEWAY E-SOFT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/newaylogo.ico') }}" rel="icon">
    <link href="{{ asset('assets/img/newaylogo.ico') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    @friendlyCaptchaRenderWidgetScripts()
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        .card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            transition: transform 0.3s ease;
            width: 100%;
            height: 100%;

            background-size: cover;
            border: none;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

        }

        .card:hover {
            transform: scale(1.1);
            /* Zoom in effect on hover */
            cursor: pointer;
        }

        .card-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 20px;
            margin-top: 30%;
        }

        .card-content h4 a {
            font-size: 24px;
            margin-bottom: 10px;
            color: #212529 !important;
            /* Set text color to black */
            text-align: center;
        }

        .card-content h4 a:hover {
            font-size: 24px;
            margin-bottom: 10px;
            color: rgb(71, 178, 228) !important;
            /* Set text color to black */
            text-align: center;
        }


        @media (max-width: 768px) {
            #clients img {
                display: block;
                /* Display each image on its own line */
                margin: 0 auto;
                /* Center each image horizontally */
                max-width: 100%;
                /* Limit maximum width of images */
                height: auto;
                /* Auto height */
                margin-bottom: 10px;
                /* Adjust as needed */
            }

            .nav-link {
                color: rgb(71, 178, 228) !important;
            }

            .mobile-nav-toggle {
                color: black;
            }
        }

        @media only screen and (max-width: 800px) {

            /* Styles for devices with a maximum width of 800px (e.g., Galaxy Tab 7) */
            #clients img {
                display: block;
                margin: 0 auto;
                max-width: 100%;
                height: auto;
                margin-bottom: 10px;
            }

            .nav-link {
                color: rgb(71, 178, 228) !important;
            }

            .mobile-nav-toggle {
                color: black;
            }
        }
    </style>
</head>

<body>


    @yield('main')
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <img src="{{ asset('assets/img/newaylogo.jpg') }}" alt="" height="110" width="180"
                            class="mb-3">
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Liens utiles</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Qui sommes nous</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Nos référence</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Nos expertises</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Blog</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Contactez-nous</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Development It</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Cloud</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">DevOps</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nos réseaux sociaux</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; 2024 Neway E-soft.
            </div>
        </div>
    </footer><!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
