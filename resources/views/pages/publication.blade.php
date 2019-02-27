@extends('layouts.master')
<?php $title = "Mochila perdida en la macroplaza"; ?>
@section('content')
<div class="row card-panel">
<div class="col s12">
     <h3 class="flow-text center">{{$title}}</h3>
    </div>
</div>
<div class="row card-panel">
    <img class="col l6 s12 materialboxed" data-caption='{{$title}}' src="http://wallpapers.ae/wp-content/uploads/2015/01/Pier-Night-HD-Picture.jpg">
    <div class="col l6 s12 ">
        <h5 class='card-title flex-content'>Fecha y hora</h5>
            <p class='cart-text flex-content'>17/02/2019 12:52 a. m.</p>
        <h5 class='card-title flex-content'>Ubicación</h5>
            <p class='card-text flex-content'>Macroplaza</p>
        <h5 class='card-title flex-content'>Municipio</h5>
            <p class='card-text flex-content'>Monterrey, N.L., México</p>
        <h5 class='card-title flex-content'>Descripción larga</h5>
            <p class='cart-text flex-content'>
                Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo 'Contenido aquí, contenido aquí'. Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de 'Lorem Ipsum' va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).
            </p>
    </div>
    <div class="col l6 offset-l6 s12 row">
        <a class="col l12 m12 s12 waves-effect waves-light btn" href="/reclam">Reclamar objeto</a>
    </div>
</div>
<div class="row card-panel">
    <img class="col l4 s12" src="http://wallpapers.ae/wp-content/uploads/2015/01/Pier-Night-HD-Picture.jpg">
    <div class="col l8 s12">
        <h3 class="flow-text">Usuario: user</h3>
        <h3 class="flow-text">
            <i class="material-icons">star</i>
            <i class="material-icons">star</i>
            <i class="material-icons">star</i>
            <i class="material-icons">star</i>
            <i class="material-icons">star</i>
        </h3>
    </div>
</div>
 <script>
$(document).ready(function(){
    $('.materialboxed').materialbox();
  });
  </script>
@stop

