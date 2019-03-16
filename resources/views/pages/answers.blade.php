@extends('layouts.master')
@section('content')
<h4 class="center">Respuestas</h4>
@for($i=0; $i<10;$i++)
 <div class="col s12 m8 offset-m2 l6">
        <div class="card-panel z-depth-1 report-size">
          <div class="row">
            <div class="col s12">
              <span class="black-text">
              <b>
                Título de la publicación 
                </b>
              </span>
              <br>
              <span class="black-text">
              <a href="/publication">
                  Mochila perdida en interplaza
                  </a>
              </span>
              
              <br><br>
               <span class="black-text">
              <b>
                Usuario
                </b>
              </span>
              <br>
              <span class="black-text">
                <a href="/profile"> Usuario X</a>
              </span>
              
              <br><br>
               <span class="black-text">
              <b>
                Respuesta
                </b>
              </span>
              <br>
              <span class="black-text">
                Podemos vernos en tal lugar
              </span>
              <br>
            </div>
            <p class="row">
              &nbsp;
            </p>
          </div>
          <div class="col s12 row">
              <span class="black-text col s4 center">
                <a href="#modalResponse" class="modal-trigger">Responder</a>
              </span>
              <span class="black-text col s4 center">
                <a href="/publication">Historial</a>
              </span>
              <span class="black-text col s4 center">
                <a href="/descartar">Borrar</a>
              </span>
            </div>
            <br>
        </div>
      </div>
@endfor

<!-- Modal Structure -->
  <div id="modalResponse" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>
        <div class="input-field col l6 m6 s12">
          <input id="pNombre" type="text" class="validate">
          <label for="pNombre">Nombre</label>
        </div>
      </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
<script>    
    $(document).ready(
        function()
        {
             $('.modal').modal();
        }
    );
    </script>
@stop