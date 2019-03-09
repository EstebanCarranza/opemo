@extends('layouts.master')
<?php 
    /*$perfilName = "nombre";
    $perfilCorreo = "correo@electronico";
    $perfilContrasenia = "pass";
    $perfilContraseñaRep = "pass";*/
?>
@section('content')
<!--
<div class="card col s12 row valign-wrapper">
    <div class="col l6 row center-align md-padding-in">
        <img class="col s10 offset-s1 circle" src="img/profile.png">
    </div>
    <div class="input-field col l4 m6 s12">
        <input id="txtNombre" type="text" class="validate" value="dfad">
        <label class="active" for="txtNombre">Tu nombre</label>
    </div>
</div>
-->

      <div class="col s12 m8 offset-m2 l12">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col l6 s12">
            <form action="#" style="position:relative;" class="circle" >
                <img src="img/profile.png" alt="" class="circle responsive-img"> 
                <!-- notice the "circle" class -->
                
                    <div class="file-field input-field" style="position:absolute;top:calc(50% - 16px); left:calc(50% - 16px);">
                    <div class="btn row">
                        <input type="file" class="col s12 l1">
                        <span class="material-icons" style="line-height:42px;">mode_edit</span>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" style="width:0%;">
                    </div>
                    </div>
                    
                </form>
            </div>
            
            <div class="col l6 s12">
                <span class="black-text">
                    <div class="input-field col l6 s12">
                    <input id="pName" type="text" class="validate">
                    <label for="pName">Nombre</label>
                </div>
                <span class="black-text">
                    <div class="input-field col l8 s12 offset-l1">
                    <input id="pApellido" type="text" class="validate">
                    <label for="pApellido">Apellido</label>
                </div>
              </span>
              <span class="black-text">
                 <div class="input-field col l10 s12 offset-l2">
                    <input id="pCorreo" type="text" class="validate">
                    <label for="pCorreo">Correo electrónico</label>
                </div>
              </span>
               <span class="black-text">
                 <div class="input-field col l8 s12 offset-l1">
                    <input id="pContrasenia" type="text" class="validate">
                    <label for="pContrasenia">Contraseña</label>
                </div>
              </span>
              <span class="black-text">
                 <div class="input-field col l6 s12">
                    <input id="pContraseniaRep" type="text" class="validate">
                    <label for="pContraseniaRep">Repetir contraseña</label>
                </div>
              </span>
            </div>
          </div>
        </div>
      </div>
@stop