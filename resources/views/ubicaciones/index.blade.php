@extends('layouts.cards')
@section('title', 'Ubicaciones')
@section('body')
@foreach($ubicationList as $ubicacion)
<div class='col l4 m6 s12 animated-card card-row-custom-size'>
            <div class='card small hoverable card-custom-size'>
                <div class='card-image waves-effect waves-block waves-light'>
                    <img class='activator' src={{ url('/image/ubication?id='.$ubicacion->getIdUbicacion()) }}>
                </div>
                <div class='card-content'>
                    <a href="#" class=""><i class='material-icons right activator'>more_vert</i></a>
                    <span class='card-title  grey-text text-darken-4 truncate'>{{$ubicacion->getTitulo()}}</span>
                    <p><a href="{{url('/ubications/'.$ubicacion->getIdUbicacion())}}">Abrir</a>@if(!Auth::guest())&nbsp;&nbsp;<a href='/edit-publication'>Editar</a>@endif</p>
                    <div class="card-footer">
                        <small class="text-muted truncate">
                            1 min&nbsp;
                            Ubicacion ejemplo
                        </small>
                    </div>
                </div>
                <div class='card-reveal'>
                    <div><i class='material-icons right card-title'>close</i></div>
                    <span class='card-title grey-text text-darken-4'>{{$ubicacion->getTitulo()}}</span>
                    <p class="flow-text">
                        {{$ubicacion->getDescripcion()}}
                    </p>  
                    <div class="card-footer">
                        <small class="text-muted truncate">
                            1min &nbsp;
                            Ubicacion ejemplo
                        </small>
                    </div>
                </div>
            </div>
        </div>
@endforeach
@stop
@section('pagination')
    @include('inc.pagination')
@stop

