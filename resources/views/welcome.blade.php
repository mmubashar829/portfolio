 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Favicons -->
        <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
        <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    </head>
    <body>
        <div id="header_section">
        </div>
        <div id="about_section" style="padding-left:300px">
        </div>
        <div id="facts_section" style="padding-left:300px">
        </div>
        <div id="skills_section" style="padding-left:300px">
        </div>
        <div id="resume_section" style="padding-left:300px">
        </div>
        <div id="portfolio_section" style="padding-left:300px">
        </div>
        <div id="services_section" style="padding-left:300px">
        </div>
        <div id="testimonials_section" style="padding-left:300px">
        </div>
        <div id="contact_section" style="padding-left:300px">
        </div>
        <div id="footer_section">
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Vendor JS Files -->
    <script type="application/javascript" src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script type="application/javascript" src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script type="application/javascript" src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('assets/vendor/typed.js/typed.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script type="application/javascript" src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script type="application/javascript" src="{{asset('assets/js/main.js')}}"></script>
</html>
