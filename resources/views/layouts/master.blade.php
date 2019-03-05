<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        @include('libraries.font')
        @include('libraries.style')
        @include('libraries.javascript')
    </head>
    <body>
    <div class="navbar-fixed">
        @include('inc.navbar')
    </div>
    @if(isset($showCarousel))
        @if($showCarousel)
            @include('inc.carousel')
        @endif
    @endif
    <section class="container md-padding row">
        @yield('content')
        @yield('pagination')
    </section>
    @include('inc.footer')
    </body>
</html>
