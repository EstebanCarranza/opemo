@extends('layouts.master')
@section('content')
  <form method="post" enctype='multipart/form-data' action="{{url('ubications')}}">
    <div class="row card-panel">
    <div class="col l6">
            <img id="imagen-ubicacion-vista-previa" class="col l12 s12 materialboxed" src="{{asset('img/default.png')}}">
            <output class="col l12 s12 materialboxed" id='list-perfil'></output>
            <div class="col l12 s12">
                <div class="file-field input-field">
                    <div class="btn orange">
                        <span>Cargar</span>
                        <input id='imagen-ubicacion' name='imgUbicacion' type="file" required>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" value="Clic aqui para subir tu imagen">
                    </div>
                </div>
            </div>
        </div>
      <div class="col l6 s12">
        <h4 class="col s12">
          Crear ubicación
        </h4>
        <div class="col s12">
          <div class="input-field col s12">
            <input id="pubCrearUbicacion" name="titulo" type="text" class="validate" required>
            <label for="pubCrearUbicacion">Escribe la ubicación</label>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field col s12">
            <textarea name="descripcionLarga" id="epDescripcionLarga" class="materialize-textarea" data-length="1000" required></textarea>
            <label for="epDescripcionLarga">Escribe la descripción larga</label>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field col s12">
            <select name="municipio" class="insert-ciudad" id="cbxCiudades">
              <option value='-1' disabled selected>Elige un municipio</option>
            </select>
            <label>Elige un municipio</label>
          </div>
        </div>
        <div class="col s12">
            <button id="btnCrear" class="btn waves-effect waves-light orange col s12 row" name="action" type="submit">Guardar ubicación
              <i class="material-icons right">send</i>
            </button>   
        </div>
      </div>
    </div>
  </form>
  <script>
$(document).ready(function(){
   
    $('select').formSelect();
    $('input#input_text, textarea#epDescripcionLarga').characterCounter();
    $('.materialboxed').materialbox();
    getCiudades();
    $("#btnCrear").addClass("disabled");
    $("select[name=municipio").change(function()
    {
     $("#btnCrear").removeClass("disabled");
    });
    function getCiudades()
    {
      $.ajax({
        url: '/Ciudad',
        async: 'true',
        type: 'GET',
        dataType: 'json',

        success: function (respuesta) {
          for(var i = 0; i < respuesta.length; i++)
          {
            //agregar el option al combo de html
            $(".insert-ciudad").append("<option value='"+respuesta[i].idCiudad+"'>"+respuesta[i].titulo+"</option>");
            //actualizar el combobox de materialized
            $('select').formSelect();

          } 
            //$(".insert-ciudad").html(respuesta);
            //debugger;
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
                        document.getElementById('imagen-ubicacion-vista-previa').style.display = 'none';
                        
                        if(objectType == 1)
                            document.getElementById("list-perfil").innerHTML = ['<img width="100%" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');    
                        
                        if(objectType==2)
                            document.getElementById("list-perfil").innerHTML = ['<video controls width="100%" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');    
                    };
            })(f);
            reader.readAsDataURL(f);
            
        }
    }
    
    document.getElementById('imagen-ubicacion').addEventListener('change', archivo_perfil, false);
					
</script>
@stop