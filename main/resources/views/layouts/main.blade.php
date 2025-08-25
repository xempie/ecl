<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'Empathic Computing Research Lab')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@yield('description', 'Advancing Human-Computer Interaction Research through empathetic and intuitive computing systems')">
        <meta name="keywords" content="@yield('keywords', 'empathic computing, human-computer interaction, HCI, research, technology, emotion recognition')">
        <meta name="author" content="Empathic Computing Research Lab">
        <meta name="website" content="https://empathinccomputing.org">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/favicon.svg') }}">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.svg') }}">

        <!-- CSS -->
        @stack('styles')
        <link href="{{ asset('assets/libs/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/js-datepicker/datepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">
        <!-- Custom Navbar Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
        <!-- Typography - Raleway Font -->
        <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">

    </head>
    
    <body class="dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->

        @include('components.navbar')

        @yield('content')

        @include('components.footer')

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-blue-600 text-white justify-center items-center"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
        <script src="{{ asset('assets/libs/jarallax/jarallax.min.js') }}"></script>
        <script src="{{ asset('assets/libs/particles.js/particles.js') }}"></script>
        <script src="{{ asset('assets/libs/wow.js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/libs/tobii/js/tobii.min.js') }}"></script>
        <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/easy_background.js') }}"></script>
        <script src="{{ asset('assets/libs/shufflejs/shuffle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/js-datepicker/datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
        <script src="{{ asset('assets/libs/gumshoejs/gumshoe.min.js') }}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        
        @stack('scripts')

        <script>
            // Initialize Feather Icons
            if (typeof feather !== 'undefined') {
                feather.replace();
            }
        </script>

    </body>
</html>