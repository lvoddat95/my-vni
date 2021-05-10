<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('themes/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/adminlte/plugins/icon-picker/css/fontawesome-iconpicker.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('themes/adminlte/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('backend.layouts.partials.header')
        @include('backend.layouts.partials.sidebar')

        @yield('content')

        @include('backend.layouts.partials.footer')

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('themes/adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('themes/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('themes/adminlte/plugins/icon-picker/js/fontawesome-iconpicker.min.js') }}"></script>
    <!-- themes/adminlte App -->
    <script src="{{ asset('themes/adminlte/dist/js/adminlte.min.js') }}"></script>

    @yield('js')

</body>

</html>