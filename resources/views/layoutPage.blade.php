<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>Calpulalpan Corazón de Perro</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="{{ $bodyClass }}">
    <!-- Header -->
    <header id="header">
        <div class="inner">
            {{--<a href="index.html" class="logo">Theory</a>--}}
            <a href="index.html" class="logo">
                <img src="images/logo.png" alt="Logo">
            </a>
            <nav id="nav" class="{{ $navClass }}">
                <a href="/">Home</a>
                <a href="/adopta">Adopta</a>
                <a href="/apoyanos">Apóyanos</a>
            </nav>
            <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        </div>
    </header>

     @yield('content')

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <div class="flex">
                <div class="copyright">
                    &copy; Calpulalpan Corazón de Perro
                </div>
                <ul class="icons">
                    <li><a href="https://www.facebook.com/calpulalpancorazondeperro/" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
