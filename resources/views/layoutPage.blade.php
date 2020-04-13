<!DOCTYPE HTML>
<html>
<!-- Head -->
@include('partials.head')
<body class="{{ $bodyClass }}">
    <!-- Header -->
    @include('partials.header')

    <!-- Content Page -->
     @yield('content')

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    @include('partials.scripts')
</body>
</html>
