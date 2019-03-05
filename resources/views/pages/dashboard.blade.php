@extends('layouts.master')
<?php $title = "titulo"; ?>
@section('title', 'Dashboard')
@section('content')

<div class="card-panel z-depth-0 col s12">
        <div class="row">
        <div class="col l4 m6 s12">
                <div class="card card-control-panel">
                    <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                    Mi perfil<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Abrir</a></p>
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
                    <span class="card-title activator grey-text text-darken-4">                    
                    Mis publicaciones<i class="material-icons right">more_vert</i></span>
                    <p><a href="buscar.php">Abrir</a></p>
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
                    <span class="card-title activator grey-text text-darken-4">
                    Mis ubicaciones<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Abrir</a></p>
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
                    <span class="card-title activator grey-text text-darken-4">
                    Mis objetos recuperados<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Abrir</a></p>
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
                    <span class="card-title activator grey-text text-darken-4">
                    Usuarios reportados<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Abrir</a></p>
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