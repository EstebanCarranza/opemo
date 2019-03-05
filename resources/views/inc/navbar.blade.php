<!-- Remember: add jquery 2.1.1 + materialize js and materialize css of libraries -->
<?php 
  $data = "http://twicky.com.mx";
  $navbarValue = [
    '0' => "Publicaciones",
    '1' => "Ubicaciones",
    '2' => "Preguntas frecuentes",
    '3' => "Contacto"
  ];
  $navbarRoute =
  [
    '0' => '/publication-list',
    '1' => '/ubications',
    '2' => '/frequent-questions',
    '3' => '/contact'
  ];
?>  
<nav class="orange">
  <a id="navMobile" href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <div class="nav-wrapper container">
     <div id="navLogo" class="left"> <a href="/" class="brand-logo">OPEMO</a></div>
      
     <form id="frmSearch">
        <div class="input-field">
          <input id="search" type="search" required placeholder="Escribe lo que quieres buscar y presiona enter">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i id="srcClose" class="material-icons" title="Cerrar barra de búsqueda">close</i>
        </div>
      </form>
     <div class="row"> 
       <ul id="ulNavBar" class="right hide-on-med-and-down">
      @for($i = 0; $i < count($navbarValue); $i++)
        <li title={{$navbarValue[$i]}}><a class='nav-link link-color' href={{$navbarRoute[$i]}}>{{$navbarValue[$i]}}</a></li>
      @endfor
      <li title="Buscar"><a id="btnSearch"><i class="material-icons">search</i></a></li>
      <li title="Mi cuenta"><a id="btnUserLog" href="/login"><i class="material-icons">person</i></a></li>
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
  $(document).ready(function(){
    $('.sidenav').sidenav();
        $("#frmSearch").hide();
      
    $("#btnSearch").click(function(){
      $("#navLogo").slideToggle( 200 );
        $("#ulNavBar").slideToggle( 200 );
        $("#frmSearch").slideToggle( 200 );
       
    });
    $("#srcClose").click(function()
    {
      $("#navLogo").slideToggle( 200 );
      $("#ulNavBar").slideToggle( 200 );
      $("#frmSearch").slideToggle( 200 );
      
    });
   
  });
  </script>