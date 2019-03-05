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
        
       
    @include('inc.navbar')
    
    @if(isset($showCarousel))
        @if($showCarousel)
            @include('inc.carousel')
        @endif
    @endif
    
    <section class="container md-padding row container-landingpage">
        @yield('content')
        @yield('pagination')
    </section>
    <span class="ir-arriba material-icons">arrow_upward</span>
    @include('inc.footer')

     <script>
            $(document).ready(function()
            {
                $('.ir-arriba').click(function(){
                    $('body, html').animate({
                        scrollTop: '0px'
                    }, 300);
                });
                    
                $(window).scroll(function(){
                    if( $(this).scrollTop() > 0 ){
                        $('.ir-arriba').slideDown(300);
                    } else {
                        $('.ir-arriba').slideUp(300);
                    }
                });
            });
        </script>
    </body>
</html>
