<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,600" rel="stylesheet" type="text/css">
        
        
        <!-- Materialized CSS -->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/carousel.css" rel="stylesheet">
        <link href="css/helpers.css" rel="stylesheet">
        <!-- Materialized JS -->
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    </head>
    <body>
        @include('inc.navbar')
    @if(isset($showCarousel))
        @if($showCarousel)
            @include('inc.carousel')
        @endif
    @endif
    <section class="container md-padding">
        @yield('content')
       
        @yield('pagination')
       
    </section>
    
    @include('inc.footer')
    </body>
</html>
