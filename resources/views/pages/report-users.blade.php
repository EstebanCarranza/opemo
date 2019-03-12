@extends('layouts.master')
@section('content')
<h4 class="center">Reportes de usuario</h4>
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
                Mochila perdida en interplaza
              </span>
              <br><br>
               <span class="black-text">
              <b>
                Razón del reporte
                </b>
              </span>
              <br>
              <span class="black-text">
                No es el objeto que decia ser
              </span>
            </div>
            <p class="row">
              &nbsp;
            </p>
          </div>
          <div class="col s12 row">
              <span class="black-text col s4 center">
                <a href="/profile">Perfil</a>
              </span>
              <span class="black-text col s4 center">
                <a href="/publication">Publicación</a>
              </span>
              <span class="black-text col s4 center">
                <a href="/bloquear">Bloquear</a>
              </span>
            </div>
            <br>
        </div>
      </div>
@endfor
@stop