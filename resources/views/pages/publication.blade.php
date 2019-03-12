@extends('layouts.master')
<?php $title = "Mochila perdida en la macroplaza"; ?>
@section('title', $title)
@section('content')
<div class ="row"><h3 class="col s12 flow-text center">{{$title}}</h3></div>
   
<div class="row card-panel">
    <div class="col l6">
    <img class="col l12 s12 materialboxed" data-caption='{{$title}}' src="http://wallpapers.ae/wp-content/uploads/2015/01/Pier-Night-HD-Picture.jpg">
     <div class="col s12 m8 offset-m2 l12">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="img/profile.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <div  class="black-text">
                Nombre de usuario
              </div>
              <div>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                </div>
            </div>
          </div>
        </div>
      </div>
      </div>
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
        <a class="col l12 m12 s12 waves-effect waves-light btn orange" href="/reclam">Reclamar objeto</a>
    </div>
</div>
<div class="row card-panel z-depth-1">
    <div class="col s12">
        <div class="card-panel z-depth-0">
            <div class="row valign-wrapper">
                <div class="col s2">
                    <img src="img/profile.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
                <div class="col s10">
                    <div  class="black-text">
                    Nombre de usuario
                    </div>
                    <div>
                        <div class="input-field col l12 s12">
                            <input id="pubComentario" type="text" class="validate" required>
                            <label for="pubComentario">Comentario</label>
                            <p>
                                <a class="col offset-s10 s2 waves-effect waves-light btn orange">
                                    <i class="material-icons">send</i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@for($i = 0; $i < 10; $i++)
<div class="row card-panel z-depth-1">
    <div class="col s12">
        <div class="card-panel z-depth-0">
            <div class="row valign-wrapper">
                <div class="col s2">
                    <img src="img/profile.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
                <div class="col s10">
                    <div  class="black-text">
                    Nombre de usuario
                    </div>
                    <div>
                        <div class="input-field col l12 s12">
                            Esto es un comentario :v
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endfor
       
 <script>
$(document).ready(function(){
    $('.materialboxed').materialbox();
  });
  </script>
@stop

