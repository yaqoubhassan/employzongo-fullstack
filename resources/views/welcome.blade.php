<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EmployZongo</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    @vite('resources/assets/css/stylecd4e.css?version=4.1')
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
    <div id="app"></div>

    @vite('resources/js/app.js')
    @vite('resources/assets/js/vendor/modernizr-3.6.0.min.js')
    @vite('resources/assets/js/vendor/jquery-3.6.0.min.js')
    @vite('resources/assets/js/vendor/jquery-migrate-3.3.0.min.js')
    @vite('resources/assets/js/vendor/bootstrap.bundle.min.js')
    @vite('resources/assets/js/plugins/waypoints.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="">
        $(document).ready(function () {
        new WOW().init()
    });
    </script>
    @vite('resources/assets/js/plugins/magnific-popup.js')
    @vite('resources/assets/js/plugins/perfect-scrollbar.min.js')
    @vite('resources/assets/js/plugins/select2.min.js')
    @vite('resources/assets/js/plugins/isotope.js')
    @vite('resources/assets/js/plugins/scrollup.js')
    @vite('resources/assets/js/plugins/swiper-bundle.min.js')
    @vite('resources/assets/admin/js/plugins/jquery.circliful.js')
    @vite('resources/assets/admin/js/main8c94.js?v=4.1')
</body>

</html>
