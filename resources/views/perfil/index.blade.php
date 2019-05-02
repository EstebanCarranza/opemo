@extends('layouts.master')
@section('content')

<div class="col s12 row cover-main">
  <div class="cover" >
    <div><!-- <PORTADA> -->
      @if(isset($me))
        <img src="{{url('/image/profile/cover?id='.$usuario->getIdUsuario())}}" class="ec-img-cover ec-img-shadow-profile" style="width:100%;">
        <button data-target="modal_edit_image_cover" class="btn modal-trigger ec-btn-file-input-cover orange">
          <i class="material-icons">mode_edit</i>
        </button>
        @include('perfil.edit-cover')
      @else
        <img id="imagen-ubicacion-vista-previa" src="{{url('/image/profile/cover?id='.$usuario->getIdUsuario())}}" class="ec-img-cover" style="width:100%;">
        <div class="col s2 offset-s10 ec-cover-ubication-follow">
          <div class="btn row orange waves-effect waves-light">
            Seguir
          </div>
        </div>
      @endif
    </div><!-- </PORTADA> -->
    
    <!-- <AVATAR> -->
    @if(isset($me))
     <img  src="{{url('/image/profile/avatar?id='.$usuario->getIdUsuario())}}" class="ec-img-avatar ec-img-profile ec-img-shadow-profile">
      <button data-target="modal_edit_image_avatar" class="btn modal-trigger ec-btn-file-input orange">
        <i class="material-icons">mode_edit</i>
      </button>
      @include('perfil.edit-avatar')    
    @else
      <img  src="{{url('/image/profile/avatar?id='.$usuario->getIdUsuario())}}" class="ec-img-avatar ec-img-profile">
    @endif
    <!-- </AVATAR> -->
  </div>
</div>
    <div class="card-panel row col s12">
      <div class="col s12">
        <ul class="tabs">
          @if(isset($me))
            <li class="tab col s3"><a class="" href="#test1">Información</a></li>
            <li class="tab col s3"><a class="" href="#test2">Seguridad</a></li>
            <li class="tab col s3 "><a class="" href="#test3">Seguidores</a></li>
            <li class="tab col s3"><a href="#test4">Seguidos</a></li>
          @else
            <li class="tab col s4"><a class="" href="#test1">Información</a></li>
            <li class="tab col s4 "><a class="" href="#test3">Seguidores</a></li>
            <li class="tab col s4"><a href="#test4">Seguidos</a></li>
          @endif
        
        </ul>
      </div>
      <div id="test1" class="col s12 row">
       @if(isset($me))
        <form  method="POST" action="{{url('profile',[$usuario->getIdUsuario()])}}">
          {{ method_field('PATCH') }}
          {{ csrf_field() }}
          <input type="hidden" name="ecAction" value="edit-info">
        @endif
          <div class="col l6 m6 s12">
            <h1> Bio </h1>
            <div class="input-field col s12 flow-text">
              <input name="bio" id="pBio" type="text" class="validate ecInputEdit" value="{{$usuario->getBio()}}">
              <label for="pBio">Escribe tu bio</label>
            </div>
          </div>
          <p>&nbsp;</p>
          <div class="col l6 s12">
            <div class="input-field col l12 m6 s12">
              <input name="alias" id="pAlias" type="text" class="validate ecInputEdit" value="{{$usuario->getAlias()}}">
              <label for="pAlias">Alias</label>
            </div>
            <div class="input-field col l12 m6 s12">
              <input name="nombre" id="pNombre" type="text" class="validate ecInputEdit" value="{{$usuario->getNombre()}}">
              <label for="pNombre">Nombre</label>
            </div>
            <div class="input-field col l12 m6 s12">
              <input name="apellidoPaterno" id="pApellido" type="text" class="validate ecInputEdit" value="{{$usuario->getApellidoPaterno()}}">
              <label for="pApellido">Apellido</label>
            </div>
            <div class="input-field col l12 m6 s12">
              <input name="correo" id="pCorreo" type="text" class="validate ecInputEdit" value="{{$usuario->getCorreo()}}">
              <label for="pCorreo">Correo electrónico</label>
            </div>
            <div class="input-field col l12 m6 s12">
              <input name="fechaNacimiento" id="pFechaNac" type="text" class="datepicker ecInputEdit" value="{{$usuario->getFechaNacimiento()}}">
              <label for="pFechaNac">Fecha de nacimiento</label>
            </div>
          @if(isset($me))
            <div class="input-field col l6 s12 row offset-l6">
              <a id="btnEdit" class="waves-effect waves-light btn col l5 s5 primary-color orange">
                <i class="material-icons">mode_edit</i>
              </a>
              <label class="col l1 s1">&nbsp;</label>
              <button id="btnSave"  class="btn waves-effect waves-light col l6 s6 offset-l1 offset-s1 primary-color orange ecButtonEdit" type="submit" name="action">
                <i class="material-icons">save</i>
              </button>
            </div>     
          @endif
          </div>
      @if(isset($me))
        </form>
      @endif
      </div>
      @if(isset($me))
      <div id="test2" class="col l12 s12">
       <form  method="POST" action="{{url('profile',[$usuario->getIdUsuario()])}}">
          {{ method_field('PATCH') }}
          {{ csrf_field() }}
          <input type="hidden" name="ecAction" value="edit-password">
          <h4 class="col s12">Cambiar contraseña </h4>
          <div class="input-field col l6 s12">
            <input name="password" id="pContrasenia01" type="password" class="validate ecInputEdit">
            <label for="pContrasenia01">Contraseña</label>
          </div>
          <div class="input-field col l6 s12">
            <input id="pContrasenia02" type="password" class="validate ecInputEdit">
            <label for="pContrasenia02">Repetir contraseña</label>
          </div>
          <div class="input-field col l6 s12 row offset-l6">
              <a title="Editar información" id="btnEditPassword" class="waves-effect waves-light btn col l3 s12 offset-l1 primary-color orange">
                <i class="material-icons">mode_edit</i>
              </a>
              <a title="Mostrar/ocultar contraseñas" id="btnShowPassword" class="waves-effect waves-light btn col l3 s12 offset-l1 primary-color orange">
                <i class="material-icons" id="iconShowPassword">visibility</i>
              </a>
              <button title="Guardar contraseña" id="btnSavePassword" class="btn waves-effect waves-light col l3 s12 offset-l1 primary-color orange ecButtonEdit" type="submit" name="action">
                <i class="material-icons">save</i>
              </button>
          </div>       
        </form>
      </div>
      @endif
      <div id="test3" class="col s12">
        <div class="card-panel z-depth-0 col s12">
          @for($i = 0; $i < 10; $i++)
            <div class="col l4 m6 s12">
              <div class="card card-control-panel">
                <div class="card-content">
                  <div class="card-image cover">
                    <img src="{{url('/image/profile/cover?id='.Auth::user()->id)}}" class=""> 
                    <img src="{{url('/image/profile/avatar?id='.Auth::user()->id)}}" class="ec-img-seguidor"> 
                  </div>
                  <p>
                    &nbsp;
                  </p>
                  <span class="card-title grey-text text-darken-4">
                    Perfil de x persona
                  </span>  
                  <p>
                    <a href="/profile">Ver perfil</a>
                      &nbsp;
                    <a href="/profile">Eliminar</a>
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
                    <img src="{{url('/image/profile/cover?id='.Auth::user()->id)}}" class=""> 
                    <img src="{{url('/image/profile/avatar?id='.Auth::user()->id)}}" class="ec-img-seguidor"> 
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
          
  
<script>
  $(document).ready(function()
  {
    $('.datepicker').datepicker({
      autoClose : true,
      format : 'yyyy-mm-dd'
    });//'dd/mm/yyyy'
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
   
    var editMode = false;
    function habilitar_controles(habilitar)
    {
      if(habilitar)
      {
        $(".ecInputEdit").removeAttr("disabled");
        $(".ecButtonEdit").removeClass("disabled");
        /*
        $("#pAlias").removeAttr("disabled");
        $("#pNombre").removeAttr("disabled");
        $("#pBio").removeAttr("disabled");
        $("#pApellido").removeAttr("disabled");
        $("#pCorreo").removeAttr("disabled");
        $("#pContrasenia").removeAttr("disabled");
        $("#pContraseniaRep").removeAttr("disabled");
        $("#pFechaNac").removeAttr("disabled");
        $("#btnSave").removeClass("disabled");
        */
      }
      else{
        $(".ecInputEdit").prop("disabled",true);
        $(".ecButtonEdit").addClass("disabled");
        /*
        $("#pAlias").prop("disabled",true);
        $("#pNombre").prop("disabled",true);
        $("#pBio").prop("disabled",true);
        $("#pApellido").prop("disabled",true);
        $("#pCorreo").prop("disabled",true);
        $("#pContrasenia").prop("disabled",true);
        $("#pContraseniaRep").prop("disabled",true);
        $("#pFechaNac").prop("disabled",true);
        $("#btnSave").addClass("disabled");
        */
      }
       
    }
    var showPassword = false;
    $("#btnShowPassword").click(function()
    {
      if(showPassword)
      {
        $("#pContrasenia01").prop("type","password"); 
        $("#pContrasenia02").prop("type","password"); 
        $("#iconShowPassword").html("visibility");
      }
      else
      {
        $("#pContrasenia01").prop("type","text"); 
        $("#pContrasenia02").prop("type","text"); 
        $("#iconShowPassword").html("visibility_off");
      }
      showPassword = !showPassword;
      
    });
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
    $("#btnEditPassword").click(function()
    {
      if(!editModePassword)
      {
        $(this).html('<i class="material-icons">cancel</i>');
        editModePassword = true;
        habilitar_controles_seguridad(true);
        $("#btnSavePassword").addClass("disabled");
       
      }else
      {
        $(this).html('<i class="material-icons">mode_edit</i>');
        editModePassword = false;
        habilitar_controles_seguridad(false);
        $("#pContrasenia01").val("");  
        $("#pContrasenia02").val("");
      }
    });
    $(".ec-img-cover").on('click', function()
    {
      $(".ec-btn-file-input-cover").toggle();
      
    });
    $(".ec-img-avatar").on('click', function()
    {
      $(".ec-btn-file-input-avatar").toggle();
      
    });
    var inputContrasenia01 = false;
    var inputContrasenia02 = false;
    
    function validarContrasenias(validar)
    {
      if(validar)
        if(($("#pContrasenia01").val() != "") && ($("#pContrasenia02").val() != ""))
        {
          if($("#pContrasenia01").val() == $("#pContrasenia02").val())
            $("#btnSavePassword").removeClass("disabled");
          else
            $("#btnSavePassword").addClass("disabled");  
        }
        else
            $("#btnSavePassword").addClass("disabled");  
    }

    $("#pContrasenia01").keyup(function()
    {
      validarContrasenias(true);
      
    });
    $("#pContrasenia02").keyup(function()
    {
      validarContrasenias(true);
     
    });
    function setEvent()
    {
      $(".ec-img-cover").on('click', function()
      {
        $(".ec-btn-file-input-cover").toggle();
        
      });
    }

    
  });
</script>

@stop