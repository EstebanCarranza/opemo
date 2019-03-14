@extends('layouts.master')
<?php $title = "Mochila perdida en la macroplaza"; ?>
@section('title', $title)
@section('content')
<div class ="row">
    <div class="input-field col s12">
        <input id="pubTitulo" type="text" class="validate center" required value="{{$title}}">
        <label for="pubTitulo">Titulo</label>
    </div>
</div>
   
<div class="row card-panel">
<div class="col l6">

        <img class="col l12 s12 materialboxed" data-caption='{{$title}}' src="http://wallpapers.ae/wp-content/uploads/2015/01/Pier-Night-HD-Picture.jpg">
    </div>
    <div class="col l6 s12 ">
        <h5 class='card-title flex-content'>Fecha y hora</h5>
            <div class="input-field col l6 s12">
                <input id="pubFecha" type="text" class="validate datepicker" required>
                <label for="pubFecha">Fecha</label>
            </div>
            <div class="input-field col l6 s12">
                <input id="pubHora" type="text" class="validate timepicker" required>
                <label for="pubHora">Hora</label>
            </div>
        <h5 class='card-title flex-content'>Ubicación</h5>
            
              <div class="input-field col s10">
                <select>
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
                <select>
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
            <textarea id="epDescripcionLarga" class="materialize-textarea" data-length="120"></textarea>
            <label for="epDescripcionLarga">Escribe la descripción larga</label>
          </div>
    </div>
    <div class="col l6 offset-l6 s12 row">
        <a class="col l12 m12 s12 waves-effect waves-light btn orange" href="/reclam">Guardar borrador</a>
    </div>
    <div class="col l6 offset-l6 s12 row">
        <a class="col l12 m12 s12 waves-effect waves-light btn orange" href="/reclam">Publicar</a>
    </div>
</div>

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
        format : 'dd/mm/yyyy'
    });
    $('.timepicker').timepicker();
    $('select').formSelect();
    $('input#input_text, textarea#epDescripcionLarga').characterCounter();
    $('.materialboxed').materialbox();
  });
  </script>
@stop

