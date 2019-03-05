@extends('layouts.master')
@section('content')
<br>
 <div class="row">

    <form class="card col l4 offset-l4 s12 m6 offset-m3" method="post" action="/dashboard">
      <br>
          <div class="row">
            <div class="col s12 center">
              <i class="material-icons large">account_circle</i>
            </div>
            <h5 class="center-align">Mi cuenta</h5>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Correo electrónico</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Contraseña</label>
        </div>
      </div>
       <div class="row">
       <div class="col s12 row">
        <button class="col s12 left btn waves-effect waves-light orange" type="submit" name="login">
          Acceder
        </button>
        <br><br>
       <a class="waves-effect waves-light btn col s12 orange" href="/signup">Registrame</a>
        </div>
        </div>
    </form>
    
</div>
@stop