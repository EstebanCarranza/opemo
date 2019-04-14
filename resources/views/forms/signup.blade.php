<!--<input type="hidden" name="login" value=true>
    <input type="hidden" name="action" value="signup">
    action="/dashboard"
    -->
<form  class="" method="POST" action="{{route('register')}}">
   {{csrf_field()}}
    
    <li class="row">
        <h5 class="center"> Registrarme </h5>
        <div class="input-field col s10 offset-s1">
        <input name="name" id="logSNombre" type="text" class="validate" required>
        <label for="logSNombre">Nombre</label>
        </div>
        <div class="input-field col s10 offset-s1">
        <input name="email" id="logSCorreo" type="email" class="validate" required>
        <label for="logSCorreo">Correo electrónico</label>
        </div>
        <div class="input-field col s10 offset-s1">
        <input name="password" id="logSContrasenia" type="password" class="validate" required>
        <label for="logSContrasenia">Contraseña</label>
        </div>
        <div class="input-field col s10 offset-s1">
        <input name="password_confirmation" id="logSRepetirContrasenia" type="password" class="validate" required>
        <label for="logSRepetirContrasenia">Repetir contraseña</label>
        </div>
    </li>
    <li class="row">
        <div class="input-field col s10 offset-s1 row">
        <button class="btn waves-effect waves-light col s12 orange" type="submit" name="action">
           Siguiente
            <i class="material-icons right">send</i>
        </button>
        </div>
    </li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">¿Ya estás registrado?</a></li>
    <li><a href="#!" id="lnkIniciarSesion">Iniciar sesión</a></li>
</form>