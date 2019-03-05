@extends('layouts.master')
@section('content')
<br>
 <div class="row">

    <form class="card col l8 offset-l2 s12" method="post" action="/send-signup">
      <br>
          <div class="row">
            <div class="col s12 center">
              <i class="material-icons large">account_circle</i>
            </div>
            <h5 class="center-align">Registro de cuenta</h5>
        </div>
      <div class="row">
        <div class="input-field col l6 m6 s12">
          <input id="email" type="email" class="validate">
          <label for="email">Correo electrónico</label>
        </div>
        <div class="input-field col l6 m6 s12">
          <input id="user" type="text" class="validate">
          <label for="user">Nombre de usuario</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col l6 m6 s12">
          <input id="password" type="password" class="validate">
          <label for="password">Contraseña</label>
        </div>
        <div class="input-field col l6 m6 s12">
          <input id="password2" type="password" class="validate">
          <label for="password2">Repetir contraseña</label>
        </div>
      </div>
       <div class="row">
       <div class="col s12 row">
        <button class="col s12 left btn waves-effect waves-light orange" type="submit" name="login">
          Registrarse
        </button>
        </div>
        </div>
    </form>
    
</div>
@stop