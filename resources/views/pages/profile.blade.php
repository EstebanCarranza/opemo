@extends('layouts.master')
@section('content')
<div class="col s12 card-panel row">
  <div class="cover col s12">
    <img src="img/catbox.jpg" class="ec-img-cover">
    <img src="img/catbox.jpg" class="ec-img-avatar">
  </div>
</div>

<div class="card-panel row col s12">
  <div class="row col s12">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="" href="#test1">Información</a></li>
        <li class="tab col s3"><a class="" href="#test2">Seguridad</a></li>
        <li class="tab col s3 "><a class="active" href="#test3">Seguidores</a></li>
        <li class="tab col s3"><a href="#test4">Seguidos</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12 row">
       <div class="input-field col s6">
          <input id="pNombre" type="text" class="validate">
          <label for="pNombre">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="pApellido" type="text" class="validate">
          <label for="pApellido">Apellido</label>
        </div>
        <div class="input-field col s6">
          <input id="pCorreo" type="text" class="validate">
          <label for="pCorreo">Correo electrónico</label>
        </div>
        <div class="input-field col s6">
        
           <input id="pFechaNac" type="text" class="datepicker" >
           <label for="pFechaNac">Fecha de nacimiento</label>
        </div>
        
    </div>
    <div id="test2" class="col s12">
      <div class="input-field col s6">
        <input id="pContrasenia01" type="text" class="validate">
        <label for="pContrasenia01">Contraseña</label>
      </div>
      <div class="input-field col s6">
        <input id="pContrasenia02" type="text" class="validate">
        <label for="pContrasenia02">Repetir contraseña</label>
      </div>
    </div>
    <div id="test3" class="col s12 card-panel">
    
      @for($i = 0; $i < 10; $i++)
      <div class="card-panel col s4 row">
        <div class="row col s12">  
          <div class="col s4">
            <img src="img/profile.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
          </div>
          <div class="col s8">
            <span class="black-text">
              This is a square image. Add the "circle" class to it to make it appear circular.
            </span>
          </div>
      </div>
      </div>
      @endfor
      
       
    </div>
    <div id="test4" class="col s12">Test 4</div>
  </div>
        
</div>
<script>
  $(document).ready(function()
  {
       $('.datepicker').datepicker();
    $('.tabs').tabs(
      {
        swipeable : true
      }
    );
    
  });
</script>
@stop