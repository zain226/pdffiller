<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<link href="{{ asset('frontend/assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
<!-- Bootstrap Css -->
<link href="{{ asset('frontend/assets/css/bootstrap-dark-yellow.min.css') }}" id="bootstrap-style" class="theme-opt"
    rel="stylesheet" type="text/css">
<!-- Icons Css -->
<link href="{{ asset('frontend/assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ asset('frontend/assets/libs/%40iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
<!-- Style Css-->
<link href="{{ asset('frontend/assets/css/style-dark-yellow.min.css') }}" id="color-opt" class="theme-opt"
    rel="stylesheet" type="text/css">

<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
