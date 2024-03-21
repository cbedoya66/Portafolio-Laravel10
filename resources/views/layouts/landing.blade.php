<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons/font/bootstrap-icons.css') }}">


</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

</body>

<!--ENCABEZADO -->
@include('encabezado')

<!-- SECCION INICIO -->
@include('inicio')

<!--PERFIL -->
@include('perfil')

<!-- SECCION CURRICULUM -->
@include('curriculum')

<!-- SECCION PORTFOLIO -->
@include('portafolio')

<!-- SECCION SKILLS -->
@include('skills')

<!-- SECCION CONTACTO -->
@include('contacto')

<script type="text/javascript" src="{{ asset('assets/js/portafolio.js') }}"></script>

</html>
