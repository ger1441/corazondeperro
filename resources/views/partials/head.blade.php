<head>
    <title>@if(isset($title)){{$title}}@else Calpulalpan Corazón de Perro @endif</title>
    <meta name="description" content="@if(isset($metaDescription)){{$metaDescription}}@else Somos la materialización de la conciencia que se tiene del abandono, de la injusticia y del sufrimiento. Somos el espacio físico real de la esperanza. @endif">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="Content-Language" content="es-mx" />
    <!-- Open Graph -->
    <meta property="og:title" content="@if(isset($openGraph['title'])){{$openGraph['title']}}@else Calpulalpan Corazon de Perro @endif">
    <meta property="og:type" content="@if(isset($openGraph['type'])){{$openGraph['type']}}@else website @endif">
    <meta property="og:image" content="@if(isset($openGraph['image'])){{$openGraph['image']}}@else https://www.calpuscorazondeperro.com/images/logo_open_graph.png @endif">
    <meta property="og:url" content="@if(isset($openGraph['url'])){{$openGraph['url']}}@else https://www.calpuscorazondeperro.com/ @endif">
    <meta property="og:description" content="@if(isset($openGraph['description'])){{$openGraph['description']}}@else Ayudamos a animalitos con alguna discapacidad, atropellados, o enfermos (NO SOMOS UNA FUNDACIÓN NI ASOCIACIÓN). @endif">

    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/styles.css?v=1.0.2">
    <!-- Add Styles -->
    @stack('styles')
</head>
