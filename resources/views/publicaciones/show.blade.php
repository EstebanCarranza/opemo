@extends('layouts.master')
@section('title', $publicacionData->getTitulo())
@section('content')
<div class ="row"><h3 class="col s12 flow-text center">{{$publicacionData->getTitulo()}}</h3></div>
   
<div class="row card-panel">
    <div class="col l6">
    <img class="col l12 s12 materialboxed" data-caption='{{$publicacionData->getTitulo()}}' src="{{url('/image/publication?mode=1&id='.$publicacionData->getIdPublicacion())}}">
    
    <div class="col s12 l12">    
        <a href="{{url('/profile/'.$publicacionData->getIdUsuario())}}">
            <div class="card-panel z-depth-1 report-size ">
                <div class="row valign-wrapper">
                    <div class="col s2">
                        <img src="{{url('/image/profile/avatar?id='.$publicacionData->getIdUsuario())}}" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                    </div>
                    <div class="col s10">
                        <div class="black-text">
                            {{$publicacionData->getNombreUsuario()}}
                        </div>
                        <div>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    </div>
    <div class="col l6 s12 ">
        <h5 class='card-title flex-content'>Fecha y hora</h5>
            <p class='cart-text flex-content'>{{$publicacionData->getFecha()}}&nbsp;{{$publicacionData->getHora()}}</p>
        <h5 class='card-title flex-content'>Ubicación</h5>
            <p class='card-text flex-content'>{{$publicacionData->getTituloUbicacion()}}</p>
        <h5 class='card-title flex-content'>Municipio</h5>
            <p class='card-text flex-content'>{{$publicacionData->getTituloCiudadCompleta()}}</p>
        <h5 class='card-title flex-content'>Descripción larga</h5>
            <p class='cart-text flex-content'>
                {{$publicacionData->getDescripcion()}}
            </p>
    </div>     
    <div class="col l6 offset-l6 s12 row">
        <a class="col l12 m12 s12 waves-effect waves-light btn orange" href="/reclam">Reclamar objeto</a>
    </div>
    <div class="col l6 offset-l6 s12 row">
        <a class="col l12 m12 s12 waves-effect waves-light btn orange modal-trigger" href="#reportar">Reportar publicación</a>
    </div>
</div>

 <div id="commentList"></div>

<div class="row card-panel z-depth-1">
    <div class="col s12">
        <div class="z-depth-0">
            <div class="row valign-wrapper">
                <div class="col s2">
                    <img src="{{url('/image/profile/avatar?id='.\Auth::user()->id)}}" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
                <div class="col s10">
                    <div  class="black-text">
                    {{\Auth::user()->name}}
                    </div>
                    <div>
                        <div class="input-field col l12 s12">
                            
                            <input id="pubComentario" name="comentario" type="text" class="validate" required>
                            <label for="pubComentario">Comentario</label>
                            <p>
                                <a id="btnCrearComentario" class="disabled col offset-s10 s2 waves-effect waves-light btn orange">
                                    <i class="material-icons">comment</i>
                                </a>
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Modal Structure -->
  <div id="reportar" class="modal modal-fixed-footer">
    <form method="post" action="{{url('/razonReporte')}}">
        {{csrf_field()}}
        <div class="modal-content">
            <h4>Razón del reporte</h4>
            <p>Especifica la razón por la cual estás haciendo el reporte, recuerda ser claro y conciso</p>
            <div class="input-field col s12">
                <input type="hidden" id="idPublicacion" name="idPublicacion" value="{{$publicacionData->getIdPublicacion()}}">
                <select name="idRazonReporte" class="insert-razonReporte" id="idRazonReporte">
                </select>
                <label>Elige una razon de reporte</label>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" class="modal-close waves-effect waves-green btn-flat">Cerrar ventana</a>
            <a id="btnReportar" class="disabled modal-close waves-effect waves-green btn-flat">Reportar publicación</a>
        </div>
    </form>
  </div>

  <!-- Modal Structure -->
  <div id="msgReporte" class="modal white green-text">
    <div class="modal-content center">
      
        <i class="material-icons large  green-text">check_circle</i>
        <h5 id="msgReporteTitle">Reporte realizado correctamente</h5>
    </div>
    <div class="modal-footer white green-text">
      <a href="#!" class="modal-close waves-effect waves-orange btn-flat orange-text">Cerrar</a>
    </div>
  </div>

 <script>
$(document).ready(function(){
    $('.materialboxed').materialbox();
    $('.modal').modal();
    getRazonReporte();
    function getRazonReporte()
    {
      $.ajax({
        url: '/razonReporte',
        async: 'true',
        type: 'GET',
        dataType: 'json',

        success: function (respuesta) {
          
            $(".insert-razonReporte").append("<option selected value='-1' disabled>Elige una razon de reporte</option>");
          
          for(var i = 0; i < respuesta.length; i++)
          {
            //agregar el option al combo de html
              $(".insert-razonReporte").append("<option value='"+respuesta[i].idRazonReporte+"'>"+respuesta[i].titulo+"</option>");
            //actualizar el combobox de materialized
            $('select').formSelect();

          } 
          
            //$(".insert-razonReporte").html(respuesta);
            //debugger;
        },
        error: function (x, h, r) {
            alert("Error: " + x + h + r);

        }

        });
    }
    $("#idRazonReporte").change(function()
    {
        if($("#idRazonReporte").find(":selected").val() != -1)
            $("#btnReportar").removeClass("disabled");
        else
            $("#btnReportar").addClass("disabled");
    });
    $("#btnReportar").click(function()
    { 
        enviarReporte();
    });
    $("#pubComentario").keyup(function(){
        if($(this).val() != "")
            $("#btnCrearComentario").removeClass("disabled");
        else
            $("#btnCrearComentario").addClass("disabled");
    });
    $("#btnCrearComentario").click(function()
    {
        if($("#pubComentario").val() != "")
            enviarComentario();
        //alert(idUsuario + "." + idPublicacion);
    });
    $("#pubComentario").keypress(function(e) {
        if(e.which == 13) {
         if($("#pubComentario").val() != "")
            enviarComentario();
        }
      });
    function enviarReporte()
    {

        var idPublicacion = $("#idPublicacion").val();
        var idRazonReporte = $("#idRazonReporte").find(":selected").val();
        var token = '{{csrf_token()}}';
        var data = {
                    idRazonReporte:idRazonReporte, 
                    idPublicacion:idPublicacion,
                    _token:token
                };
        
      $.ajax({
        url: '/razonReporte',
        async: 'true',
        type: 'POST',
        data: data,
        success: function (respuesta) {
            $("#msgReporteTitle").html("Reporte realizado correctamente");
          $("#msgReporte").modal('open');
        },
        error: function (x, h, r) {
            alert("Error: " + x + h + r);

        }

        });
    }

    function enviarComentario()
    {
        var idPublicacion = {{$publicacionData->getIdPublicacion()}};
        var comentario = $("#pubComentario").val();
        var token = '{{csrf_token()}}';
        var data = {
                    idPublicacion:idPublicacion,
                    comentario:comentario,
                    _token:token
                };
        
      $.ajax({
        url: '/comentario',
        async: 'true',
        type: 'POST',
        data: data,
        success: function (respuesta) {
            $("#pubComentario").val("");
            $("#btnCrearComentario").addClass("disabled");
          $("#msgReporteTitle").html("Comentario realizado correctamente");
          $("#msgReporte").modal('open');
          getComentarios();
        },
        error: function (x, h, r) {
            alert("Error: " + x + h + r);

        }

        });
    }
    getComentarios();
    function getComentarios()
    {
      $.ajax({
        url: "{{url('/data/comments?id='.$publicacionData->getIdPublicacion())}}",
        async: 'true',
        type: 'GET',
        dataType: 'json',

        success: function (respuesta) {
            
           // debugger;
           $("#commentList").html("");
        for(var i = 0; i < respuesta.length; i++)
        {             
              var cardInfo = 
              "<div class='card row card-panel z-depth-1'>" +
                    "<div class='col s12'>" +
                        "<div class=' z-depth-0'>" +
                            "<div class='row valign-wrapper'>" +
                                "<div class='col s2'>" +
                                    "<img src="+respuesta[i].pathImagen+" alt='' class='circle responsive-img'> <!-- notice the 'circle' class -->" +
                                "</div>" +
                                "<div class='col s10'>" +
                                    "<div  class='black-text'>" +
                                    "<a href='/profile/"+respuesta[i].idUsuario+"'><strong>" + respuesta[i].name +"</strong></a> - " + respuesta[i].antiguedad  +
                                    "</div>" +
                                    "<div class='input-field col l12 s12'>" +
                                            respuesta[i].comentario +
                                    "</div>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +
                    "</div>" +
                "</div>";

                $("#commentList").append(cardInfo);
          } 
        },
        error: function (x, h, r) {
            alert("Error: " + x + h + r);

        }

        });
    }

  });
  
  </script>
  
@stop

