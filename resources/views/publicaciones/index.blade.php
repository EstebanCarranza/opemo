@extends('layouts.cards')
@section('body')
@foreach($publicationList as $publicacion)
<div class='col l4 m6 s12 animated-card card-row-custom-size'>
            <div class='card small hoverable card-custom-size'>
                <div class='card-image waves-effect waves-block waves-light'>
                    <img class='activator' src={{ url('/image/publication?mode=1&id='.$publicacion->getIdPublicacion()) }}>
                </div>
                <div class='card-content'>
                    <a href="#" class=""><i class='material-icons right activator'>more_vert</i></a>
                    <span class='card-title  grey-text text-darken-4 truncate'>{{$publicacion->getTitulo()}}</span>
                    
                    <p><a href="{{url('/publication-list/'.$publicacion->getIdPublicacion())}}">Abrir</a>@if(!Auth::guest())&nbsp;&nbsp;<a href='/edit-publication'>Editar</a>@endif</p>
                    <div class="card-footer">
                        
                        <small class="text-muted truncate">
                            {{$publicacion->getAntiguedad()}}&nbsp;<br>
                            {{$publicacion->getTituloUbicacion()}},
                            {{$publicacion->getTituloCiudadCompleta()}}
                        </small>
                    </div>
                </div>
                <div class='card-reveal'>
                    <div><i class='material-icons right card-title'>close</i></div>
                    <span class='card-title grey-text text-darken-4'>{{$publicacion->getTitulo()}}</span>
                    
                    <p class="flow-text">
                        {{$publicacion->getDescripcion()}}
                    </p>  
                    <div class="card-footer">
                        <small class="text-muted truncate">
                            {{$publicacion->getAntiguedad()}}&nbsp;<br>
                            {{$publicacion->getTituloUbicacion()}},
                            {{$publicacion->getTituloCiudadCompleta()}}
                        </small>
                        <small class="text-muted">
                            Publicado por: 
                            <a href="{{url('/profile/'.$publicacion->getIdUsuario())}}">
                                {{$publicacion->getNombreUsuario()}}
                            </a>
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