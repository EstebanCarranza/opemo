

<ul id="slide-out" class="sidenav">
  @if(!Auth::guest())
    <li>
      <div class="user-view">
        <div class="background orange">
          <img src="{{url('/image/profile/cover?id='.Auth::user()->id)}}">
        </div>
        
        <a href="#user"><img class="circle" src="{{url('/image/profile/avatar?id='.Auth::user()->id)}}"></a>
        <a href="#name"><span class="white-text name">{{Auth::user()->name}}</span></a>
        <a href="#email"><span class="white-text email">{{Auth::user()->email}}</span></a>
      </div>
    </li>
    <li><a href="/publication-list/create">Crear publicación</a></li>
    <li><a href="/ubications/create">Crear ubicación</a></li>
    
    <li><div class="divider"></div></li>
    <li><a href="/dashboard">Dashboard</a></li>
    <li><a href="{{url('/profile/')}}">Mis perfil</a></li>
    <li><a href="/my-publications">Mis publicaciones</a></li>
    <li><a href="/my-ubications">Mis ubicaciones</a></li>
    <li><a href="/my-recovery-objects">Mis objetos recuperados</a></li>
    <!-- my-user-reports -->
    
    <li><div class="divider"></div></li>
    <li><a href="#!">Usuarios reportados</a></li>

    <li><div class="divider"></div></li>
    <li>
      <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        Cerrar sesión
      </a>
    </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
    </form>
  @else
  <li><div class="user-view">
      <div class="background orange">
      </div>
      <a href="#user"><img class="circle" src="img/profile.png"></a>
      <a href="#"><span class="white-text name">Anónimo</span></a>
      <a class="white-text lnkIniciarSesion">Inicia sesión o registrate</a>
    </div></li>
    
      <section id="frmLogin">
        @include('forms.login')
      </section>
      <section id="frmSignUp">
        @include('forms.signup')
      </section>
      <section id="frmRecoveryPassword">
        @include('forms.recovery-password')
      </section>
  @endif
</ul>

<script>
    $(document).ready(function(){
        $('#slide-out').sidenav(
            {
                edge:'right'
            }
        );
        $("#frmSignUp").hide();
         $("#frmRecoveryPassword").hide();

        $("#lnkRegistrar").click(function(){
          $("#frmSignUp").toggle( { direction: "left" }, 200 );
          $("#frmLogin").toggle( { direction: "left" }, 200 );
        });
         $("#lnkIniciarSesion").click(function(){
           $("#frmLogin").toggle( { direction: "left" }, 200 );
           $("#frmSignUp").toggle( { direction: "left" }, 200 );
        });

         $(".lnkRegistrar").click(function(){
           $("#frmRecoveryPassword").hide();
          $("#frmSignUp").show(200);
          
        });
         $(".lnkIniciarSesion").click(function(){
           $("#frmRecoveryPassword").hide();
           $("#frmLogin").show(200);
        });

        $("#lnkRecuperarContrasenia").click(function()
        {
             
            $("#frmLogin").hide(200);
           $("#frmSignUp").hide(200);
           $("#frmRecoveryPassword").toggle( { direction: "left" }, 200 );
        });

    });
  </script>