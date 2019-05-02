@extends('layouts.master')
@section('content')
    <div class="row card-panel">
        <div class="col l6">
            <img id="imagen-ubicacion-vista-previa" class="col l12 s12 materialboxed" src="{{url('/image/ubication?id='.$ubicacion->getIdUbicacion())}}">
            <div class="col s12 l12">    
                <a href="{{url('/profile/'.$ubicacion->getIdUsuario())}}">
                    <div class="card-panel z-depth-1 report-size ">
                        <div class="row valign-wrapper">
                            <div class="col s2">
                                <img src="{{url('/image/profile/avatar?id='.$ubicacion->getIdUsuario())}}" alt="" class="circle responsive-img">
                            </div>
                            <div class="col s10">
                                <div class="black-text">
                                    {{$ubicacion->getAlias()}}
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
        <div class="col l6 s12">
            <div class="col s12">
                <h3>
                    {{$ubicacion->getTitulo()}}
                </h3>
            </div>
            <div class="col s12">
                <h5>Descripción</h5>
                {{$ubicacion->getDescripcion()}}
            </div>
            <div class="col s12">
                <h5>Municipio</h5>
                {{$ubicacion->getTituloCiudadCompleta()}}
            </div>
            
            <div class="col s12">
                <h5>Antiguedad</h5>
                {{$ubicacion->getAntiguedad()}}
            </div>
            <div class="col s12">
                <h5>Fecha y hora</h5>
                {{$ubicacion->getCreated_at()}}
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
    </script>
@stop