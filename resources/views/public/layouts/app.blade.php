<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Gods Magic App</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

{{--    <!-- Favicons -->--}}
{{--    <link href="{{ asset('public_theme/assets/img/favicon.png') }}" rel="icon">--}}
    <link href="{{ asset('public_theme/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('public_theme/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public_theme/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

    <style>
        @font-face
        {
            font-family:'gist_telugu_font';
            font-style:normal;
            font-weight:normal;
            src:url('https://gisttransserver.in/Fonts/SAKALBH.eot?')format('embedded-opentype'),
            url('https://gisttransserver.in/Fonts/SakalBharati_N_Ship.ttf')format( 'truetype' );
        }
    </style>
    <!-- Template Main CSS File -->
    <link href="{{ asset('public_theme/assets/css/style.css') }}" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='https://gisttransserver.in/Fonts/css/cdac-gist-fonts.css'>

</head>

<body>

<!-- ======= Header ======= -->
<header id="header">
    <div class="container-fluid">
        <div class="logo float-left">
            <h1 class="text-light"><a href="index.html"><span>God's Magic App</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="#header">Home</a></li>
                <li><a href="{{ URL::to('/login') }}">Login</a></li>
                <li><a href="#why-us">About Us</a></li>
                <li><a href="#msgfortheday">Message for the Day</a></li>

                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End #header -->

@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>{{date('Y')}}</span></strong>. All Rights Reserved
        </div>
{{--        <div class="credits">--}}
{{--            <!-- All the links in the footer should remain intact. -->--}}
{{--            <!-- You can delete the links only if you purchased the pro version. -->--}}
{{--            <!-- Licensing information: https://bootstrapmade.com/license/ -->--}}
{{--            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-landing-page/ -->--}}
{{--            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>--}}
{{--        </div>--}}
    </div>
</footer><!-- End #footer -->

<!-- Vendor JS Files -->
<script src="{{ asset('public_theme/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public_theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public_theme/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('public_theme/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Template Main JS File -->
<script src="{{ asset('public_theme/assets/js/main.js') }}"></script>
<script src="https://gisttransserver.in/js/CDAC-Typing.js"></script>


@yield('js')

</body>

</html>
