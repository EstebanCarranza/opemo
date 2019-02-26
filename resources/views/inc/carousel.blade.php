
<style>

  .inner-shadow-background:
    {
       -webkit-box-shadow: inset 0px 0px 500px 72px rgba(0,0,0,1);
      -moz-box-shadow:    inset 0px 0px 500px 72px rgba(0,0,0,1);
      box-shadow:         inset 0px 0px 500px 72px rgba(0,0,0,1);
    }
    .ec-cover-style
    {
      position:absolute; width:100%; padding:0%;
    }
    .ec-cover-effects
    {
      width:100%;
      background-color:green;
      z-index:10;
      position:absolute;
    }
    .cover-image-container
    {
      -webkit-box-shadow: inset 0px 0px 500px 72px rgba(0,0,0,1);
      -moz-box-shadow:    inset 0px 0px 500px 72px rgba(0,0,0,1);
      box-shadow:         inset 0px 0px 500px 72px rgba(0,0,0,1);
      background-color:none;
      width:100%;
    }
    .cover-image
    {
      
      opacity: 0.8;
      filter: alpha(opacity=80);
      width:100%;
      object-fit: cover; height: 600px;
      
    }
    .cover-text 
    {
      z-index:1;
        text-shadow:0px 0px 5px #454545;, -1px 0 #454545, 1px 0 #454545, 0 1px #454545, 0 -1px #454545;
    }
    .carousel
    {
      margin-top: 0%;
      margin-bottom: 1%;
      max-height:100%;
    }
    
</style>

<div class="carousel carousel-slider center " style="">
    <div class="carousel-item orange white-text center" href="#one!">
      <div class="ec-cover-style cover-text">
        <h1 id="carTest"></h1>
        <p class="center white-text flow-text" style="">
        
        </p>
      </div>
      <div class="cover-image-container">
        <img class="cover-image" src="img/catbox.jpg">
      </div>
    </div>
    <div class="carousel-item blue darken-1 white-text" href="#two!">
      <div class="ec-cover-style cover-text">
        <h1 ></h1>
        <p class="center white-text flow-text" style="">
          
        </p>
      </div>
      <div class="cover-image-container">
        <img class="cover-image" src="img/welcome-kit-contents.jpg">
      </div>
      
    </div>
    <div class="carousel-item blue darken-4 white-text" href="#three!">
      <div class="ec-cover-style cover-text">
        <h1 ></h1>
        <p class="center white-text flow-text" style="">
          
        </p>
      </div>
      <div class="cover-image-container">
        <img class="cover-image" src="img/getty.jpg">
      </div>
    
    </div>
  </div>
  <script>
  

  // Or with jQuery

  $(document).ready(function(){
    $('.carousel').carousel();
     $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });


  });
      
  </script>
