<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JPExim</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('Frontend/assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('Frontend/assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('Frontend/assets/images/favicons/favicon-16x16.png') }}" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Averia+Sans+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&amp;family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;family=Shadows+Into+Light&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('Frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/icomoon-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/twentytwenty/twentytwenty.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/agriox.css') }}" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>

    <div class="preloader">
        <img class="preloader__image" width="60" src="{{ asset('Frontend/assets/images/loader.png') }}" alt="" />
    </div>

    <!-- /.preloader -->
    <div class="page-wrapper">

        @include('includes.header')

        {{ $slot }}

        @include('includes.footer')

    </div><!-- /.page-wrapper -->
    @include('includes.mobilenav')

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow-2"></i></a>


    <script src="{{ asset('Frontend/assets/vendors/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/twentytwenty/twentytwenty.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/twentytwenty/jquery.event.move.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/tilt.js/tilt.jquery.js') }}"></script>


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>

    <!-- template js -->
    <script src="{{ asset('Frontend/assets/js/agriox.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.product-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            autoplay: true,
            autoplaySpeed: 2000,
            asNavFor: '.product-nav'
        });
        $('.product-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.product-slider',
            centerMode: true,
            focusOnSelect: true

        });
    </script>
</body>


</html>
