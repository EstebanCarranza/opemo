@extends('layouts.master')
@section('content')

<div class="col s12 card-panel row cover-main">
  <div class="cover" >
    <div><!-- PORTADA -->
      @if(isset($me))
        <img id="imagen-ubicacion-vista-previa" src="{{url('/image/profile/cover?id='.$usuario->getIdUsuario())}}" class="ec-img-cover ec-img-shadow-profile" style="width:100%;">
        <output id='list-perfil'></output>
        <div class="file-field input-field ec-btn-file-input-cover">
          <div class="btn row orange waves-effect waves-light">
            <input id='imagen-ubicacion' type="file" class="col s12 l1" accept="image/*">
            <span class="material-icons" style="line-height:42px;">mode_edit</span>
        </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" style="width:0%;">
          </div>
        </div>
      @else
        <img id="imagen-ubicacion-vista-previa" src="{{url('/image/profile/cover?id='.$usuario->getIdUsuario())}}" class="ec-img-cover" style="width:100%;">
        <div class="col s2 offset-s10 ec-cover-ubication-follow">
          <div class="btn row orange waves-effect waves-light">
            Seguir
          </div>
        </div>
        
          
      @endif

    </div>
    @if(isset($me))
     <img  src="{{url('/image/profile/avatar?id='.$usuario->getIdUsuario())}}" class="ec-img-avatar ec-img-profile ec-img-shadow-profile">
     <div class="file-field input-field ec-btn-file-input">
      <div class="btn row orange">
        <input type="file" class="col s12 l1" accept="image/*">
        <span class="material-icons" style="line-height:42px;">mode_edit</span>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" style="width:0%;">
      </div>
    </div>
    @else
      <img  src="{{url('/image/profile/avatar?id='.$usuario->getIdUsuario())}}" class="ec-img-avatar ec-img-profile">
    @endif
  </div>
</div>

<div class="card-panel row col s12">
  <div class="row col s12">
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
        <div class="input-field col l6 m6 s12">
          <h1> Bio </h1>
          <div class="input-field col s12 flow-text">
            <input id="pBio" type="text" class="validate" value="{{$usuario->getBio()}}">
            <label for="pBio">Escribe tu bio</label>
          </div>
         <p class="flow-text">
            &nbsp;
          </p>
        </div>
        <div class="col l6 s12">
          <div class="input-field col l12 m6 s12">
            <input id="pAlias" type="text" class="validate" value="{{$usuario->getAlias()}}">
            <label for="pAlias">Alias</label>
          </div>
         <div class="input-field col l12 m6 s12">
            <input id="pNombre" type="text" class="validate" value="{{$usuario->getNombre()}}">
            <label for="pNombre">Nombre</label>
          </div>
          <div class="input-field col l12 m6 s12">
            <input id="pApellido" type="text" class="validate" value="{{$usuario->getApellidoPaterno()}}">
            <label for="pApellido">Apellido</label>
          </div>
          <div class="input-field col l12 m6 s12">
            <input id="pCorreo" type="text" class="validate" value="{{$usuario->getCorreo()}}">
            <label for="pCorreo">Correo electrónico</label>
          </div>
          <div class="input-field col l12 m6 s12">
          
            <input id="pFechaNac" type="text" class="datepicker" >
            <label for="pFechaNac">Fecha de nacimiento</label>
          </div>
          @if(isset($me))
            <div class="input-field col l6 s12 row offset-l6">
              <a id="btnEdit" class="waves-effect waves-light btn col l5 s5 primary-color orange"><i class="material-icons">mode_edit</i></a>
              <label class="col l1 s1">&nbsp;</label>
              <a id="btnSave" class="waves-effect waves-light btn col l6 s6 offset-l1 offset-s1 primary-color orange disabled"><i class="material-icons">save</i></a>
            </div>     
          @endif     
        </div>
    </div>
    @if(isset($me))
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
    $(".ec-img-cover").on('click', function()
    {
      $(".ec-btn-file-input-cover").toggle();
      
    });
    function setEvent()
    {
      $(".ec-img-cover").on('click', function()
      {
        $(".ec-btn-file-input-cover").toggle();
        
      });
    }
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
<script>		
  function archivo_perfil(evt) 
    {
        var files = evt.target.files; // FileList object
        var objectType = 0;
        //Obtenemos la imagen del campo "file". 
        for (var i = 0, f; f = files[i]; i++) 
        {         
            ////Solo admitimos imágenes.
            //if ((!f.type.match('image.*')) || (!f.type.match('video.*')))// || !f.type.match('video.*'))
            //{
            //continue;
            //}
                if(f.type.match('image.*'))
                {
                    objectType = 1;
                }
                if(f.type.match('video.*'))
                {
                    objectType = 2;
                }
            
                var reader = new FileReader();
                reader.onload = (function(theFile) 
                {
                    return function(e) 
                    {
                        // Creamos la imagen.
                        document.getElementById('imagen-ubicacion-vista-previa').style.display = 'none';
                        
                        if(objectType == 1)
                            document.getElementById("list-perfil").innerHTML = ['<img width="100%" class="ec-img-cover ec-img-shadow-profil" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');    
                        
                        if(objectType==2)
                            document.getElementById("list-perfil").innerHTML = ['<video controls width="100%" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');    

                        //setEvent();
                    };
            })(f);
            reader.readAsDataURL(f);
            
        }
    }
    
    document.getElementById('imagen-ubicacion').addEventListener('change', archivo_perfil, false);
					
</script>
@stop