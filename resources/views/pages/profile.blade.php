@extends('layouts.master')
@if(Auth::guest())
  <script>window.location = "{{url('/')}}";</script>
@endif
<?php 
  $imgProfile = "img/catbox.jpg";
  $imgCover = "img/getty.jpg";
?>
@section('content')

<div class="col s12 card-panel row">
  <div class="cover col s12">
    <img src="{{$imgCover}}" class="ec-img-cover ec-img-shadow-profile">
    <div class="file-field input-field ec-btn-file-input-cover">
      <div class="btn row orange">
        <input type="file" class="col s12 l1" accept="image/*">
        <span class="material-icons" style="line-height:42px;">mode_edit</span>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" style="width:0%;">
      </div>
    </div>
    <img src="{{$imgProfile}}" class="ec-img-avatar ec-img-profile ec-img-shadow-profile">
     <div class="file-field input-field ec-btn-file-input">
      <div class="btn row orange">
        <input type="file" class="col s12 l1" accept="image/*">
        <span class="material-icons" style="line-height:42px;">mode_edit</span>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" style="width:0%;">
      </div>
    </div>
  </div>
</div>

<div class="card-panel row col s12">
  <div class="row col s12">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="" href="#test1">Información</a></li>
        <li class="tab col s3"><a class="" href="#test2">Seguridad</a></li>
        <li class="tab col s3 "><a class="" href="#test3">Seguidores</a></li>
        <li class="tab col s3"><a href="#test4">Seguidos</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12 row">
    <div class="col s6">
        <div class="input-field col l12 m12 s12">
          <h1> Bio </h1>
          <div class="input-field col s12 flow-text">
            <input id="pBio" type="text" class="validate" value="Este es mi perfil para blablabla juas juas xdxdxd">
            <label for="pBio">Escribe tu bio</label>
          </div>
         <p class="flow-text">
            &nbsp;
          </p>
        </div>
        </div>
        <div class="col s6">
          <div class="input-field col l12 m12 s12">
            <input id="pAlias" type="text" class="validate" value="{{Auth::user()->name}}">
            <label for="pAlias">Alias</label>
          </div>
          <div class="input-field col l12 m12 s12">
            <input id="pNombre" type="text" class="validate">
            <label for="pNombre">Nombre</label>
          </div>
          <div class="input-field col l12 m12 s12">
            <input id="pApellido" type="text" class="validate">
            <label for="pApellido">Apellido</label>
          </div>
          <div class="input-field col l12 m12 s12">
            <input id="pCorreo" type="text" class="validate" value="{{Auth::user()->email}}">
            <label for="pCorreo">Correo electrónico</label>
          </div>
          <div class="input-field col l12 m12 s12">      
            <input id="pFechaNac" type="text" class="datepicker" >
             <label for="pFechaNac">Fecha de nacimiento</label>
          </div>
          <div class="input-field col l6 s12 row offset-l6">
            <a id="btnEdit" class="waves-effect waves-light btn col l5 s5 primary-color orange"><i class="material-icons">mode_edit</i></a>
            <label class="col l1 s1">&nbsp;</label>
            <a id="btnSave" class="waves-effect waves-light btn col l6 s6 offset-l1 offset-s1 primary-color orange disabled"><i class="material-icons">save</i></a>
          </div>                
        </div>
    </div>
    <div id="test2" class="col s12">
    <h4 class="col s12">Cambiar contraseña </h4>
      <div class="input-field col s6">
        <input id="pContrasenia01" type="password" class="validate">
        <label for="pContrasenia01">Contraseña</label>
      </div>
      <div class="input-field col s6">
        <input id="pContrasenia02" type="password" class="validate">
        <label for="pContrasenia02">Repetir contraseña</label>
      </div>
       <div class="input-field col l6 s12 row offset-l6">
          <a id="btnEditPassword" class="waves-effect waves-light btn col l5 s5 primary-color orange"><i class="material-icons">mode_edit</i></a>
          <label class="col l1 s1">&nbsp;</label>
          <a id="btnSavePassword" class="waves-effect waves-light btn col l6 s6 offset-l1 offset-s1 primary-color orange disabled"><i class="material-icons">save</i></a>
        </div>       
    </div>
    <div id="test3" class="col s12">
      <div class="card-panel z-depth-0 col s12">
        @for($i = 0; $i < 10; $i++)
          <div class="col l4 m6 s12">
            <div class="card card-control-panel">
              <div class="card-content">
                <div class="card-image cover">
                  <img src="{{$imgCover}}" class=""> 
                  <img src="{{$imgProfile}}" class="ec-img-seguidor"> 
                </div>
                <p>
                  &nbsp;
                </p>
                <span class="card-title grey-text text-darken-4">
                  Perfil de x persona
                </span>  
                <p>
                  <a href="/my-profile">Ver perfil</a>
                    &nbsp;
                  <a href="/my-profile">Eliminar</a>
                </p>
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>
    <div id="test4" class="col s12">
      <div class="card-panel z-depth-0 col s12">
        @for($i = 0; $i < 10; $i++)
          <div class="col l4 m6 s12">
            <div class="card card-control-panel">
              <div class="card-content">
                <div class="card-image cover">
                  <img src="{{$imgProfile}}" class=""> 
                  <img src="img/catbox.jpg" class="ec-img-seguidor"> 
                </div>
                <p>
                  &nbsp;
                </p>
                <span class="card-title grey-text text-darken-4">
                  Perfil de x persona
                </span>  
                <p>
                  <a href="/my-profile">Ver perfil</a>
                    &nbsp;
                  <a href="/my-profile">Eliminar</a>
                </p>
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>

  </div>
        
</div>
<script>
  $(document).ready(function()
  {
       $('.datepicker').datepicker();
    $('.tabs').tabs(
      {
       /* swipeable : true*/
      }
    );

var timeMouseoutProfilePicture = 100;
    $(".ec-btn-file-input").hide();
    $(".ec-btn-file-input-cover").hide();

    $(".ec-img-profile").click(function()
    {
      $(".ec-btn-file-input").toggle();
      
    });
    $(".ec-img-cover").click(function()
    {
      $(".ec-btn-file-input-cover").toggle();
      
    });
    var editMode = false;
    function habilitar_controles(habilitar)
    {
      if(habilitar)
      {
        $("#pAlias").removeAttr("disabled");
        $("#pNombre").removeAttr("disabled");
        $("#pBio").removeAttr("disabled");
        $("#pApellido").removeAttr("disabled");
        $("#pCorreo").removeAttr("disabled");
        $("#pContrasenia").removeAttr("disabled");
        $("#pContraseniaRep").removeAttr("disabled");
        $("#pFechaNac").removeAttr("disabled");
        $("#btnSave").removeClass("disabled");
      }
      else{
        $("#pAlias").prop("disabled",true);
        $("#pNombre").prop("disabled",true);
        $("#pBio").prop("disabled",true);
        $("#pApellido").prop("disabled",true);
        $("#pCorreo").prop("disabled",true);
        $("#pContrasenia").prop("disabled",true);
        $("#pContraseniaRep").prop("disabled",true);
        $("#pFechaNac").prop("disabled",true);
        $("#btnSave").addClass("disabled");
      }
       
    }
    var editModePassword = false;
    function habilitar_controles_seguridad(habilitar)
    {
      if(habilitar)
      {
        $("#pContrasenia01").removeAttr("disabled");
        $("#pContrasenia02").removeAttr("disabled");
        $("#btnSavePassword").removeClass("disabled");
      }
      else
      {
        $("#pContrasenia01").prop("disabled",true);
        $("#pContrasenia02").prop("disabled",true);
        $("#btnSavePassword").addClass("disabled");
      }
    }
    habilitar_controles_seguridad(false);
    habilitar_controles(false);
    $("#btnEdit").click(function()
    {
     
      if(!editMode)
      {
        $(this).html('<i class="material-icons">cancel</i>');
        editMode = true;
        habilitar_controles(true);
       
      }else
      {
        $(this).html('<i class="material-icons">mode_edit</i>');
        editMode = false;
        habilitar_controles(false);
        
    }
    });
    $("#btnSave").click(function()
    {
      
      $("#btnEdit").html('<i class="material-icons">mode_edit</i>');
        editMode = false;
        habilitar_controles(false);
    });
    $("#btnEditPassword").click(function()
    {
      if(!editModePassword)
      {
        $(this).html('<i class="material-icons">cancel</i>');
        editModePassword = true;
        habilitar_controles_seguridad(true);
       
      }else
      {
        $(this).html('<i class="material-icons">mode_edit</i>');
        editModePassword = false;
        habilitar_controles_seguridad(false);
      }
    });
    $("#btnSavePassword").click(function()
    {
      $("#btnEditPassword").html('<i class="material-icons">mode_edit</i>');
        editModePassword = false;
        habilitar_controles_seguridad(false);
    });



    
  });
</script>
@stop