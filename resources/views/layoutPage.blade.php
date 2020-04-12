<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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
