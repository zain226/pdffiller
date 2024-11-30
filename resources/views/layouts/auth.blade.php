<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Auth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">

    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" class="theme-opt"
        rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('frontend/assets/libs/%40iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/style.min.css') }}" id="color-opt" class="theme-opt" rel="stylesheet"
        type="text/css">
    <style>
        .invalid-feedback {
            display: block
        }
    </style>
    @stack('style')
</head>

<body class="font-sans antialiased">
    <div class="">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('frontend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.init.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
    @stack('script')
</body>

</html>
