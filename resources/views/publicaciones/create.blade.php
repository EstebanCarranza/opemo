@extends('layouts.master')
@section('title', "Crear publicacion")
@section('content')
<style>
.modal
{
    z-index:10;
}
.card-title
{
    z-index:11;
}
</style>
<form method="post" enctype='multipart/form-data' action="{{url('publication-list')}}">
    {{ csrf_field() }}
    <input type="hidden" name="idUsuario" value="{{Auth::user()->id}}">
    <div class ="row">
        
    </div>
   
    <div class="row card-panel">
        <div class="col l6">
            <img id="imagen-perfil-vista-previa" class="col l12 s12 materialboxed" src="{{asset('img/default.png')}}">
            <output class="col l12 s12 materialboxed" id='list-perfil'></output>
            <div class="col l12 s12">
                <div class="file-field input-field">
                    <div class="btn orange">
                        <span>Cargar</span>
                        <input id='imagen-perfil' name='imgPublicacion' type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" value="Clic aqui para subir tu imagen">
                    </div>
                </div>
            </div>
        </div>
        <div class="col l6 s12 ">
            <h4 class="col s12">
            Crear publicación
            </h4>
            <div class="input-field col s12">
                <input name="titulo" id="pubTitulo" type="text" class="validate center" required>
                <label for="pubTitulo">Titulo</label>
            </div>
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
                    <select class="insert-ciudad" name="ubicacion" id="cbxCiudades">
                        <option value="-1" disabled selected>Elige una ubicación</option>    
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

            <h5 class='card-title flex-content'>Descripción larga</h5>
                <div class="input-field col s12">
                <textarea name="descripcionLarga" id="epDescripcionLarga" class="materialize-textarea" data-length="120"></textarea>
                <label for="epDescripcionLarga">Escribe la descripción larga</label>
            </div>
        </div>
        <button class="disabled btn waves-effect waves-light orange col l6 offset-l6 s12 row" name="action" type="submit">Guardar como borrador
            <i class="material-icons right">send</i>
        </button>

        <button id="btnCrear" class="btn waves-effect waves-light orange col l6 offset-l6 s12 row" name="action" type="submit">Publicar
            <i class="material-icons right">send</i>
        </button>
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
      <p>
      
        <h5 class='card-title flex-content'>Municipio</h5>
          <div class="input-field col s12">
                <select name="municipio">
                    <option value="" disabled selected>Elige un municipio</option>
                    <option value="1">Monterrey</option>
                    <option value="2">San Pedro Garza García</option>
                    <option value="3">San Nicolás</option>
                    </select>
                <label>Elige un municipio</label>
            </div>
            <!--
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
            -->
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
    $("#btnCrear").addClass("disabled");
    $("select[name=ubicacion").change(function()
    {
     $("#btnCrear").removeClass("disabled");
    });
    getCiudades();
    function getCiudades()
    {
      $.ajax({
            url: '/data/ubication/',
            async: 'true',
            type: 'GET',
            dataType: 'json',

            success: function (respuesta) {
            for(var i = 0; i < respuesta.length; i++)
            {
                //agregar el option al combo de html
                $(".insert-ciudad").append("<option value='"+respuesta[i].idUbicacion+"'>"+respuesta[i].titulo+"</option>");
                //actualizar el combobox de materialized
                $('select').formSelect();
              
            } 
            },
            error: function (x, h, r) {
                alert("Error: " + x + h + r);

            }
        });
    }
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
                        document.getElementById('imagen-perfil-vista-previa').style.display = 'none';
                        
                        if(objectType == 1)
                            document.getElementById("list-perfil").innerHTML = ['<img width="100%" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');    
                        
                        if(objectType==2)
                            document.getElementById("list-perfil").innerHTML = ['<video controls width="100%" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');    
                    };
            })(f);
            reader.readAsDataURL(f);
            
        }
    }
    
    document.getElementById('imagen-perfil').addEventListener('change', archivo_perfil, false);
					
</script>
@stop

