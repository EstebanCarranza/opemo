@extends('layouts.master')
@section('title', $publicacionData->getTitulo())
@section('content')
<div class ="row"><h3 class="col s12 flow-text center">{{$publicacionData->getTitulo()}}</h3></div>
   
<div class="row card-panel">
    <div class="col l6">
    <img class="col l12 s12 materialboxed" data-caption='{{$publicacionData->getTitulo()}}' src="{{url('/image/publication?mode=1&id='.$publicacionData->getIdPublicacion())}}">
    
     <div class="col s12 l12">
     <a href="{{url('/profile/'.$publicacionData->getIdUsuario())}}">
        <div class="card-panel z-depth-1 report-size ">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="{{url('/image/profile/avatar?id='.$publicacionData->getIdUsuario())}}" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <div  class="black-text">
                {{$publicacionData->getNombreUsuario()}}
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
        </a>
      </div>
      </div>
    <div class="col l6 s12 ">
        <h5 class='card-title flex-content'>Fecha y hora</h5>
            <p class='cart-text flex-content'>{{$publicacionData->getFecha()}}&nbsp;{{$publicacionData->getHora()}}</p>
        <h5 class='card-title flex-content'>Ubicación</h5>
            <p class='card-text flex-content'>{{$publicacionData->getTituloUbicacion()}}</p>
        <h5 class='card-title flex-content'>Municipio</h5>
            <p class='card-text flex-content'>{{$publicacionData->getTituloCiudadCompleta()}}</p>
        <h5 class='card-title flex-content'>Descripción larga</h5>
            <p class='cart-text flex-content'>
                {{$publicacionData->getDescripcion()}}
            </p>
    </div>
    <div class="col l6 offset-l6 s12 row">
        <a class="col l12 m12 s12 waves-effect waves-light btn orange" href="/reclam">Reclamar objeto</a>
    </div>
    <div class="col l6 offset-l6 s12 row">
        <a class="col l12 m12 s12 waves-effect waves-light btn orange modal-trigger" href="#reportar">Reportar publicación</a>
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
        <!-- Modal Structure -->
  <div id="reportar" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Razón del reporte</h4>
        <p>Especifica la razón por la cual estás haciendo el reporte, recuerda ser claro y conciso</p>
        <div class="input-field col s12">
            <textarea id="txtRazonReporte" class="materialize-textarea" data-length="120"></textarea>
            <label for="txtRazonReporte">Escribe tu razón de bloqueo</label>
        </div>

    </div>
    <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar ventana</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Reportar publicación</a>
    </div>
  </div>

 <script>
$(document).ready(function(){
    $('.materialboxed').materialbox();
    $('.modal').modal();
    $('input#input_text, textarea#txtRazonReporte').characterCounter();
  });
  
  </script>
  
@stop

