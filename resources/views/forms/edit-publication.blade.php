@extends('layouts.master')
<?php $title = "Mochila perdida en la macroplaza"; ?>
@section('title', $title)
@section('content')
<form method="post" enctype='multipart/form-data' action="{{url('publication-list')}}">
    {{ csrf_field() }}
    <input type="hidden" name="idUsuario" value="{{Auth::user()->id}}">
<div class ="row">
    <div class="input-field col s12">
        <input name="titulo" id="pubTitulo" type="text" class="validate center" required>
        <label for="pubTitulo">Titulo</label>
    </div>
</div>
   
<div class="row card-panel">
    <div class="col l6">

        <img class="col l12 s12 materialboxed" data-caption='{{$title}}' src="http://wallpapers.ae/wp-content/uploads/2015/01/Pier-Night-HD-Picture.jpg">
        <div class="col l12 s12">
            <div class="file-field input-field">
                <div class="btn orange">
                    <span>File</span>
                    <input name="imgPublicacion" type="file">
                </div>
                <div class="file-path-wrapper">
                     <input class="file-path validate" type="text" value="Clic aqui para subir tu imagen">
                </div>
            </div>
        </div>
    </div>
    <div class="col l6 s12 ">
        <h5 class='card-title flex-content'>Fecha y hora</h5>
            <div class="input-field col l6 s12">
                <input name="fecha" id="pubFecha" type="text" class="validate datepicker" required>
                <label for="pubFecha">Fecha</label>
            </div>
            <div class="input-field col l6 s12">
                <input name="hora" id="pubHora" type="text" class="validate timepicker" required>
                <label for="pubHora">Hora</label>
            </div>
        <h5 class='card-title flex-content'>Ubicación</h5>
            
              <div class="input-field col s10">
                <select name="ubicacion">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    </select>
                <label>Elige una ubicación</label>
            </div>
            <div class="input-field col s2">
              <a href="#modal1" class="modal-trigger waves-effect waves-light btn primary-color orange">
                <i class="material-icons">
                    add
                </i>
                </a>
            </div>

        <h5 class='card-title flex-content'>Municipio</h5>
            <div class="input-field col s12">
                <select name="municipio">
                    <optgroup label="Monterrey">
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                    </optgroup>
                    <optgroup label="San Pedro Garza García">
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                    </optgroup>
                    <optgroup label="San Nicolás">
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                    </optgroup>
                </select>
                <label>Elige un municipio</label>
            </div>
        <h5 class='card-title flex-content'>Descripción larga</h5>
            <div class="input-field col s12">
            <textarea name="descripcionLarga" id="epDescripcionLarga" class="materialize-textarea" data-length="120"></textarea>
            <label for="epDescripcionLarga">Escribe la descripción larga</label>
          </div>
    </div>
    <button class="btn waves-effect waves-light orange col l6 offset-l6 s12 row" name="action" type="submit">Guardar como borrador
        <i class="material-icons right">send</i>
    </button>

    <button class="btn waves-effect waves-light orange col l6 offset-l6 s12 row" name="action" type="submit">Publicar
        <i class="material-icons right">send</i>
    </button>
    <input type="submit" value="Enviar">
</div>
</form>
 <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>
        Crear ubicación
      </h4>
      <h6 class="col s12">
        Escribe la nueva ubicación y presiona aceptar para guardarla    
      </h6>
      <p>
        <div class="input-field col s12">
            <input id="pubCrearUbicacion" type="text" class="validate" required>
            <label for="pubCrearUbicacion">Escribe la ubicación</label>
        </div>
      </p>
      
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agregar</a>
    </div>
  </div>

 <script>
$(document).ready(function(){
    $('.modal').modal();
    $('.datepicker').datepicker({
        autoClose : true,
        format : 'yyyy-mm-dd'
    });//'dd/mm/yyyy'
    $('.timepicker').timepicker({
        twelveHour : false
    });
    $('select').formSelect();
    $('input#input_text, textarea#epDescripcionLarga').characterCounter();
    $('.materialboxed').materialbox();
  });
  </script>
@stop

