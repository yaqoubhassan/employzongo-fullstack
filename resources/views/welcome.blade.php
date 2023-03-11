<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    {{-- <link href="assets/css/stylecd4e.css?version=4.1" rel="stylesheet"> --}}
    @vite('resources/css/stylecd4e.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>
    <div id="app"></div>


    @vite('resources/js/app.js')
    @vite('resources/js/assets/vendor/modernizr-3.6.0.min.js')
    @vite('resources/js/assets/vendor/jquery-3.6.0.min.js')
    @vite('resources/js/assets/vendor/jquery-migrate-3.3.0.min.js')
    @vite('resources/js/assets/vendor/bootstrap.bundle.min.js')
    {{-- @vite('resources/js/plugins/wow.js') --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="">
        $(document).ready(function () {
        new WOW().init()
    });
    </script>
    @vite('resources/js/assets/plugins/magnific-popup.js')
    @vite('resources/js/assets/plugins/perfect-scrollbar.min.js')
    @vite('resources/js/assets/plugins/select2.min.js')
    @vite('resources/js/assets/plugins/isotope.js')
    @vite('resources/js/assets/plugins/scrollup.js')
    @vite('resources/js/assets/plugins/swiper-bundle.min.js')
    {{-- @vite('resources/js/plugins/counterup.js') --}}
    @vite('resources/js/main8c94.js?v=4.1')
</body>

</html>
