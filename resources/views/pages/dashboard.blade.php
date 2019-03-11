@extends('layouts.master')
<?php $title = "titulo"; ?>
@section('title', 'Dashboard')
@section('content')

<div class="card-panel z-depth-0 col s12">
        <div class="row">
            <div class="col l4 m6 s12">
                <div class="card card-control-panel">
                    <div class="card-content">
                    <a class="activator"><i class="material-icons right">more_vert</i></a>
                    <span class="card-title activator grey-text text-darken-4">
                    Mi perfil
                    </span>
                    <p><a href="/my-profile">Abrir</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Mi perfil<i class="material-icons right">close</i></span>
                        <p>
                           Aquí podrás ver tu perfil, cambiar tus datos personales como foto de avatar, nombre, etc.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col l4 m6 s12">
                <div class="card card-control-panel">
                    <div class="card-content">
                    <a class="activator"><i class="material-icons right">more_vert</i></a>
                    <span class="card-title activator grey-text text-darken-4">
                    Mis respuestas</span>
                    <p><a href="/my-">Abrir</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Mis respuestas<i class="material-icons right">close</i></span>
                        <p>
                           Aquí podrás ver las respuestas de los reclamos que hayas hecho
                        </p>
                    </div>
                </div>
            </div>
            <div class="col l4 m6 s12">
                <div class="card card-control-panel">
                    <div class="card-content">
                    <a class="activator"><i class="material-icons right">more_vert</i></a>
                    <span class="card-title activator grey-text text-darken-4">                    
                    Mis publicaciones
                    </span>
                    <p><a href="/my-publications">Abrir</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Mis publicaciones<i class="material-icons right">close</i></span>
                        <p>
                            Aquí podrás ver, crear, editar y eliminar tus publicaciones creadas
                        </p>
                    </div>
                </div>
            </div>
            <div class="col l4 m6 s12">
                <div class="card card-control-panel">
                    <div class="card-content">
                    <a class="activator"><i class="material-icons right">more_vert</i></a>
                    <span class="card-title activator grey-text text-darken-4">
                    Mis ubicaciones
                    </span>
                    <p><a href="/my-ubications">Abrir</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Mis ubicaciones<i class="material-icons right">close</i></span>
                        <p>
                           Aquí podrás ver, crear, editar y eliminar tus ubicaciones creadas
                        </p>
                    </div>
                </div>
            </div>
            <div class="col l4 m6 s12">
                <div class="card card-control-panel">
                    <div class="card-content">
                    <a class="activator"><i class="material-icons right">more_vert</i></a>
                    <span class="card-title activator grey-text text-darken-4">
                    Mis objetos recuperados
                    </span>
                    <p><a href="/my-recovery-objects">Abrir</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Mis objetos recuperados<i class="material-icons right">close</i></span>
                        <p>
                           Aquí podrás ver los objetos que has recuperado en opemo
                        </p>
                    </div>
                </div>
            </div>
             <div class="col l4 m6 s12">
                <div class="card card-control-panel">
                    <div class="card-content">
                    <a class="activator"><i class="material-icons right">more_vert</i></a>
                    <span class="card-title activator grey-text text-darken-4">
                    Usuarios reportados
                    </span>
                    <p><a href="/my-user-reports">Abrir</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Usuarios reportados<i class="material-icons right">close</i></span>
                        <p>
                           Aquí podrás ver y bloquear a los usuarios que han sido reportados por la comunidad
                        </p>
                    </div>
                </div>
            </div>


            </div>
        </div>
        

@stop