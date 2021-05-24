<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="VNI">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/app-assets/images/ico/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('themes/app-assets/images/ico/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('themes/app-assets/images/ico/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('themes/app-assets/images/ico/site.webmanifest') }}">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <!-- core stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/app-assets/fonts/iconmoon/iconmoon.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('themes/app-assets/fonts/font-awesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/app-assets/vendors/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/app-assets/css/bootstrap_custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/app-assets/css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/app-assets/css/colors.css') }}">
    <!-- core stylesheet -->

    <!-- custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/app-assets/vendors/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/app-assets/vendors/css/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/app-assets/css/style_custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/app-assets/css/responsive.css') }}">
    <!-- /custom stylesheet -->

</head>


<body>
    <div class="page-content home-page">

        @include('frontend.layouts.partials.sidebar')

        <div class="content-wrapper">

            <div class="content">

                @include('frontend.layouts.partials.mobile-bottom')
                
                @include('frontend.layouts.partials.header')

                @yield('content')

                @include('frontend.layouts.partials.footer')
            </div>

        </div>

    </div>

</body>

<!-- Footer -->

<!-- CORE JS-->
<script defer src="{{ asset('themes/app-assets/vendors/js/jquery-3.3.1.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/jquery-ui.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/bootstrap/bootstrap.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/moment/moment-with-locales.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/jquery.tipsy.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/sweetalert2.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/jquery.sticky-sidebar.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/isotope.pkgd.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/jquery.fancybox.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/jQuery.print.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/hc-offcanvas-nav.js') }}"></script>
<!-- /CORE JS-->

<!-- JS Trang-->
<script defer src="{{ asset('themes/app-assets/vendors/js/select2.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/cleave.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/jquery.repeater.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/jquery.cloner.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/form/jquery.validate.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/datatable/datatables.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/datatable/dataTables.responsive.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/datatable/dataTables.buttons.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/datatable/buttons.flash.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/datatable/jszip.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/datatable/pdfmake.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/datatable/vfs_fonts.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/datatable/buttons.html5.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/datatable/buttons.print.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/chart/d3.min.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/chart/d3_tooltip.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/vendors/js/chart/c3.min.js') }}"></script>
<!-- /JS Trang-->

<script defer src="{{ asset('themes/app-assets/js/i18n.js') }}"></script>

@yield('javascript')

<!-- Custom JS-->
<script defer src="{{ asset('themes/app-assets/js/app.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/js/acts.js') }}"></script>
<script defer src="{{ asset('themes/app-assets/js/script_custom.js') }}"></script>
<!-- /Custom JS-->


<!-- /Footer -->

</html>