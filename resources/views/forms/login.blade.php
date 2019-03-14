<form action="/dashboard" class="">
    <input type="hidden" name="login" value=true>
    <input type="hidden" name="action" value="login">
    <li class="row">
        <h5 class="center"> Iniciar sesión </h5>
        <div class="input-field col s10 offset-s1">
        <input id="logCorreo" type="email" class="validate" required>
        <label for="logCorreo">Correo electrónico</label>
        </div>
        <div class="input-field col s10 offset-s1">
        <input id="logContrasenia" type="password" class="validate" required>
        <label for="logContrasenia">Contraseña</label>
        </div>
        <div class="input-field col s10 offset-s1 row">
        <button class="btn waves-effect waves-light col s12 orange" type="submit" name="action">
            Siguiente
            <i class="material-icons right">send</i>
        </button>
        </div>
    </li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">¿Olividaste tu contraseña?</a></li>
    <li><a href="#!" id="lnkRecuperarContrasenia">Recuperar contraseña</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">¿No tienes cuenta?</a></li>
    <li><a href="#" id="lnkRegistrar">Registrate</a></li>
</form>