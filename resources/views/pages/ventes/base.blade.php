<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Autres balises meta, liens CSS, etc. -->

    <!-- Définition de l'icône au niveau du titre de la page (favicon) -->
   {{-- <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">--}}
    
   <title>NHK networking</title>

   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
   <link rel="stylesheet" href=" {{ asset('style.css') }}">
   <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
   <link rel="stylesheet" href="{{ asset('css/versions.css')}}">
   <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
   <link rel="shortcut icon" href="{{ asset('images/logo1_nhknetworking.jpeg') }}" type="image/
   x-icon" />
   <link rel="apple-touch-icon" href="{{ asset('images/logo1_nhknetworking.jpeg') }}">
</head>
<body>

    {{--@include("layout.loader")--}}
    @include("pages.ventes.header")
    @yield('content')
    @include("layout.footer")
    <!-- Contenu de la page -->

    <!--files javascript -->
    @stack('js')

</body>
</html>
