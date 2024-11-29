<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('frontend.layouts.partials.style')
    @stack('style')
</head>

<body class="font-sans antialiased">
    @include('frontend.layouts.partials.header')
    <div class="">
        @yield('content')
    </div>
    @include('frontend.layouts.partials.footer')
    @include('frontend.layouts.partials.script')
    @stack('script')
</body>

</html>
