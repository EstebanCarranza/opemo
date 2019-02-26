<!--
<nav class="navbar navbar-expand-lg navbar-light bg-orange">
  <b><a class="navbar-brand link-color" href="/">OPEMO</a></b>
  <button class="navbar-toggler" style="color:white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link link-color" href="/dashboard">Publicaciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-color" href="/contact">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-color" href="/ubications">Ubicaciones</a>
      </li>
        <li class="nav-item">
        <a class="nav-link link-color" href="/frequent-questions">Preguntas frecuentes</a>
      </li>
      
    </ul>
   
    <ul class="navbar-nav mr-right">
    <li class="nav-item active">
        <a class="nav-link link-color" href="/login">Iniciar sesión <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item active">
        <a class="nav-link link-color" href="#">Registrarse <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" integrity="sha256-h0cGsrExGgcZtSZ/fRz4AwV+Nn6Urh/3v3jFRQ0w9dQ=" crossorigin="anonymous"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<?php 
$data = "http://twicky.com.mx";

$navbarValue = [
  '0' =>"Publicaciones",
  '1' => "Contacto",
  '2' => "Ubicaciones",
  '3' => "Preguntas frecuentes"
];
$navbarRoute =
[
  '0' => '/dashboard',
  '1' => '/contact',
  '2' => '/ubications',
  '3' => '/frequent-questions'
];
  
?>  
<nav class="orange">
    <div class="nav-wrapper container">
     <div id="navLogo" class="left"> <a href="/" class="brand-logo">OPEMO</a></div>
    <a id="navMobile" href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      
      <form id="frmSearch">
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i id="srcClose" class="material-icons">close</i>
        </div>
      </form>
       <ul id="ulNavBar" class="right hide-on-med-and-down">
      @for($i = 0; $i < count($navbarValue); $i++)
        <li title={{$navbarValue[$i]}}><a class='nav-link link-color' href={{$navbarRoute[$i]}}>{{$navbarValue[$i]}}</a></li>
      @endfor
      <li title="Buscar"><a id="btnSearch"><i class="material-icons">search</i></a></li>
      <li title="Mi cuenta"><a id="btnSearch" href="/login"><i class="material-icons">person</i></a></li>
      </ul>
    </div>
    
  </nav>






  <ul class="sidenav" id="mobile-demo">
  <li><a href="/search">Buscar</a></li>
  <li><a href="/login">Mi cuenta</a></li>
     @for($i = 0; $i < count($navbarValue); $i++)
        <li><a class='nav-link link-color' href={{$navbarRoute[$i]}}>{{$navbarValue[$i]}}</a></li>
      @endfor
       
  </ul>
<script>   
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
        $("#frmSearch").hide();
    $("#btnSearch").click(function(){
        $("#ulNavBar").toggle();
        $("#frmSearch").toggle();
       $("#navLogo").toggle();
    });
    $("#srcClose").click(function()
    {
      $("#ulNavBar").toggle();
      $("#frmSearch").toggle();
      $("#navLogo").toggle();
    });
  });
  </script>