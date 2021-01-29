<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Samuel Kinuthia">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Software Engineer | Samuel Kinuthia') }}</title>

        <meta name="description" content="I design and develop elegant and robust web applications for individuals and companies that want an online presence. My Technology stack include HTML, CSS, JAVASCRIPT and LARAVEL. Reach me on +254 797 741 435">
        <meta name="keywords" content="Samuel Kinuthia, Web Designer, Website Designer, Web Developer, Website Developer, Software Developer, Front-end Developer, Server-side Developer, Back-end Developer, Full-stack Developer, Software Engineer, Laravel Developer, Website Developer in Kenya, Technical Lead, PHP Developer">
        <meta name="robots" content="index, follow">

        <meta property="og:type" content="portfolio website">
        <meta property="og:title" content="Software Developer">
        <meta property="og:site_name" content="Samuel Kinuthia">
        <meta property="og:description" content="I design and develop elegant and robust web applications for individuals and companies that desire an online presence in the digital space. My core technology stack include HTML, CSS, JAVASCRIPT and LARAVEL. Reach me on +254 797 741 435">

        <meta property="og:image" content="https://samuelkinuthia.com/images/samuelkk.jpg">
        <meta property="og:url" content="https://samuelkinuthia.com">
        <meta property="article:author" content="Samuel Kinuthia"/>
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">

        <meta name="twitter:title" content="Software Developer">
        <meta name="twitter:description" content="I design and develop elegant and robust web applications for individuals and companies that desire an online presence in the digital space. My core technology stack include HTML, CSS, JAVASCRIPT and LARAVEL. Reach me on +254 797 741 435">
        <meta name="twitter:image" content="https://samuelkinuthia.com/images/samuelkk.jpg">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@SamuelKinuthiaK">
        <meta name="twitter:creator" content="@SamuelKinuthiaK">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{asset('splidejs/dist/css/themes/splide-default.min.css')}}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{asset('splidejs/dist/js/splide.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    </head>
    <body class="font-ubuntu antialiased" x-data="{open: false}">
        <div class="min-h-screen bg-gray-50">
            <!-- Page Heading -->
            <header class="shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script>
            document.addEventListener( 'DOMContentLoaded', function () {
                var options = {
                    autoplay: true,
                    type: 'loop',
                    interval: 6000,
                    easing: 'cubic-bezier(.42,.65,.27,.99)',
                };
                new Splide( '.splide', options ).mount();
            } );
        </script>
    </body>
</html>
