@extends('layouts.master')
@section('content')
<div class="card mx-auto" style="width: 18rem;">
  <div class="card-body">
    <form method="post" action="/dashboard">
     <div class="form-group">
        <label for="txtCorreo">Correo electrónico</label>
        <input type="email" class="form-control" id="txtCorreo" placeholder="correo@electronico.com" required>
    </div>
     <div class="form-group">
        <label for="txtPassword">Contraseña</label>
        <input type="password" class="form-control" id="txtPassword" placeholder="Contraseña" required>
    </div>
       <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
    </form>
  </div>
</div>

@stop