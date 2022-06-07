<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>C.SEACCO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url('vendor/adminlte/dist/img/banner1.jpg');
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="http://127.0.0.1:8000/" class="w3-bar-item w3-button w3-wide"><i class="fa fa-home"></i>Inicio</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="http://127.0.0.1:8000/solicitud" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Solicitud empleo</a>
      <a href="http://127.0.0.1:8000/cotizaciones" class="w3-bar-item w3-button"><i class="fa fa-list-alt"></i> Cotizar</a>
      <a href="http://127.0.0.1:8000/portafolio" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Portafolio</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACTANOS</a>
      
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16"> X</a>
  <a href="http://127.0.0.1:8000/solicitud" onclick="w3_close()" class="w3-bar-item w3-button">Solicitud empleo</a>
  <a href="http://127.0.0.1:8000/cotizaciones" onclick="w3_close()" class="w3-bar-item w3-button">Cotizar</a>
  <a href="http://127.0.0.1:8000/portafolio" onclick="w3_close()" class="w3-bar-item w3-button">Portafolio</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACTANOS</a>
  
</nav>


<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    
    <p><a href="#about" class="w3-button w3-blue w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Sobre nosotros</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
   <a href="https://www.facebook.com/pages/category/Construction-Company/Constructora-Seacco-658896417875063/"> <i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">SOBRE CONSTRUCTORA SEACCO</h3>
  
<center>   <p>Somos una firma constructora con personal calificado y listo para ejecutar
cualquier obra civil a nivel nacional, brindamos un servicio de calidad con un
enfoque funcional y ecológico, comprometidos a mejorar continuamente y
determinados en realizar sus proyectos de acuerdo con las especificaciones,
dentro de los tiempos contratados y estándares de calidad esperados para la
plena satisfacción del cliente.</p></center>



  <div class="w3-row-padding w3-center" style="margin-top:64px">
  <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">POLITICA DE CALIDAD</p>
      <p>El principal objetivo de la dirección y del equipo humano de la empresa
constructora SEACCO S. de R.L. es la plena satisfacción del cliente,
implantando, desarrollando y manteniendo un sistema de gestión de la calidad
basado en la mejora continua, proporcionando servicios que cumplan los
requisitos aplicables de las partes interesadas con especial énfasis en el cliente.
</p>
    </div>
    <div class="w3-quarter">
      <i class="glyphicon glyphicon-send w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">MISIÓN</p>
      <p>Satisfacer las necesidades constructivas a nivel nacional proporcionando los más
altos estándares de calidad en construcción y servicio, apegados bajo un modelo
de calidad. Brindando soluciones integradas para salvaguardar el medio ambiente
con profesionales certificados para el mismo.
</p>
    </div>
    <div class="w3-quarter">
      <i class="glyphicon glyphicon-eye-open w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">VISIÓN</p>
      <p>Ser una empresa reconocida a nivel nacional creando confianza con nuestros
clientes y brindando oportunidades de trabajo para el hondureño.</p>
    </div>
    
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">VALORES </p>
      <p>
 
         <ul>
          <li>Respeto</li>
          <li>Honestidad</li>
          <li>Moral Cristina</li>
          <li>Ética Profesional</li>
          <li>Pasión Por El Trabajo</li>
          <li>Lealtad y Agradecimiento</li>
      </ul>     
      
</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>POLITICA MEDIOAMBIENTAL </h3>
      <p>La empresa constructora SEACCO S. de R.L. fomenta todas aquellas acciones
que favorecen a la preservación del medioambiente, con el compromiso de
utilizar de manera racional y eficiente los recursos naturales necesarios para las
actividades que se desarrollan en los proyectos ejecutados.</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i>Ver nustros trabajos</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="https://scontent.ftgu1-1.fna.fbcdn.net/v/t1.6435-9/86870662_872458476518855_1716564060159344640_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=8bfeb9&_nc_eui2=AeEnpxGlI6rN61TN8uUbOlv2PkkuDW1-AFI-SS4NbX4AUhRVXLu5SZaIqorlEQ5O4A4Ef1hRWX6VlWJ9nZ4kd1Jd&_nc_ohc=6N0sABBgHo4AX99Zv2l&_nc_ht=scontent.ftgu1-1.fna&oh=00_AT8lwi3TGcjPHFP-dUPSCvWgTgxuKk76LgqGOZ46OhM9NA&oe=6289D8E0" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->

<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">Nustro Equipo</h3>
 
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col s4 w3-margin-bottom">
      <div class="w3-card">
        <center><img src="https://media-exp1.licdn.com/dms/image/C4E03AQERQWBkl8YLIw/profile-displayphoto-shrink_200_200/0/1565124490501?e=1655942400&v=beta&t=gXalIb0B0fPHxsXnpOeFTkiiSISf4yI4Ho28jwbScOI" alt="John" style="width:100%;height:310px;"></center>
        <div class="w3-container">
          <h3>Vanessa Pineda</h3>
          <p class="w3-opacity">Gerencial en Constructora Seacco</p>
          <p>ingeniera Descripción</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col s4 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Carlos Palma</h3>
          <p class="w3-opacity">Gerencial en Constructora Seacco</p>
          <p>ingeniero Descripción</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>

    <div class="w3-col s4 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Carlos Palma</h3>
          <p class="w3-opacity">Gerencial en Constructora Seacco</p>
          <p>ingeniero Descripción</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>

  
    
  </div>
 
</div>


<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
<h2>Nuestros Servicios</h2>  
<div class="w3-quarter">
    <br>AVALÚOS
  </div>
  <div class="w3-quarter">
     <br>TOPOGRAFÍA
  </div>
  <div class="w3-quarter">
     <br>DISEÑOS 3D
  </div>
  <div class="w3-quarter">
     <br>PLANOS
  </div>
  <div class="w3-quarter">
     <br>PRESUPUESTOS
  </div>
  <div class="w3-quarter">
     <br>INFRAESTRUCTURA
  </div><div class="w3-quarter">
     <br>EDIFICACIONES DE TODO TIPO 
  </div>
  <div class="w3-quarter">
     <br>INFORMES OBRAS, DAÑOS Y SEGUIMIENTOS
  </div>
  <div class="w3-quarter">
     <br>CONSULTORÍAS CIVILES
  </div>
  <div class="w3-quarter">
     <br>CONSULTORÍAS AMBIENTALES EN PROYECTOS CIVILES
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">Nuestros trabajos</h3>
 
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="https://scontent.ftgu2-2.fna.fbcdn.net/v/t1.6435-9/60353018_671513876613317_8892582696623013888_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=973b4a&_nc_ohc=tTMHWJbHiQEAX8nSv9d&_nc_ht=scontent.ftgu2-2.fna&oh=00_AT9yBIIFG7r8Fjzeo6jQVgSHgRwiZIjdVV1NKPhM4Gh5tg&oe=62892F94" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
    </div>
    <div class="w3-col l3 m6">
      <img src="https://scontent.ftgu2-2.fna.fbcdn.net/v/t1.6435-9/60337167_671514076613297_2895548573074587648_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=973b4a&_nc_ohc=nK2gpSz-gVIAX9cfqqQ&_nc_ht=scontent.ftgu2-2.fna&oh=00_AT9XD_FIsrFKKbGB_pIJ3QwpeNDcA3_tdQuFTtiFfbqcDw&oe=628A96DB" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
    </div>
    <div class="w3-col l3 m6">
      <img src="https://scontent.ftgu2-2.fna.fbcdn.net/v/t1.6435-9/60334116_671513906613314_132297838963982336_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=973b4a&_nc_ohc=siW2KjwQ3lMAX_8RZA9&_nc_ht=scontent.ftgu2-2.fna&oh=00_AT_Lp3CkjrfhaU1UL8Dlj6DwnbZDflMpxhuQdJKgMgzpRw&oe=6289B968" style="width:100%"height="200px" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
    </div>
    <div class="w3-col l3 m6">
      <img src="https://scontent.ftgu2-2.fna.fbcdn.net/v/t1.6435-9/60336259_671514043279967_2762001353894002688_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=973b4a&_nc_ohc=N70VuRb-iWAAX_Azalt&_nc_ht=scontent.ftgu2-2.fna&oh=00_AT_Wjq87gGCyqhpjy0cjsgWGt7vg_o9SPO7pq0hx6eXgTQ&oe=62899B4D" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_tablet.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>



<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACTANOS</h3>
  <p class="w3-center w3-large">Mantengámonos en contacto. Mandanos un mensaje:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Tegucigalpa, Honduras</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Telefono: 9660-7632</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Correo: proyectos@seaccoconstruye.com</p>
    <br>
    
    <!-- Image of location/map -->
    <img src="https://www.w3schools.com/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Ir a inicio</a>
  <div class="w3-xlarge w3-section">
  <a href="https://www.facebook.com/pages/category/Construction-Company/Constructora-Seacco-658896417875063/"> <i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Constructora <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">SEACCO</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
