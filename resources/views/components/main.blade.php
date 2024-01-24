<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Abdullajonov's Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Include jQuery 3.6.4 -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <!-- Include counterUp script before main.js -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>


    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
<header id="header">
    <div class="container">
        <h1><a href="/">Abdullajonov Bobur</a></h1>
        <h2>I'm a <span>Web developer</span> from Uzbekistan</h2>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link active" href="#header">Home</a></li>
                <li><a class="nav-link" href="#about">About</a></li>
                <li><a class="nav-link" href="#resume">Resume</a></li>
                <li><a class="nav-link" href="#services">Services</a></li>
                <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="social-links">
            <a href="https://twitter.com/foxdevuz" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://facebook.com/foxdevuz" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/abdullajonov.pro" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://t.me/foxdevuz"><i class="bi bi-telegram"></i></a>
            <a href="https://github.com/foxdevuz"><i class="bi bi-github"></i></a>
        </div>
    </div>
</header>

{{ $slot  }}

<!-- Include main.js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

<!-- Template Main JS File -->

<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
