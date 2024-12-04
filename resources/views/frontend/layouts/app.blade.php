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
        <form action="{{ route('logout') }}" method="POST" id="logout-form">@csrf</form>
    </div>
    @include('frontend.layouts.partials.footer')
    @include('frontend.layouts.partials.script')
    @stack('script')
</body>

</html>
