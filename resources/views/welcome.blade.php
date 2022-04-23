
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Bienvenida</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}



/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('vendor/adminlte/dist/img/banner1.jpg');
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("/w3images/parallax2.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("/w3images/parallax3.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->

<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    
    <a href="http://127.0.0.1:8000/" class="w3-bar-item w3-button">INICIO</a>
    
    {{-- <a href="http://127.0.0.1:8000/login" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Administradores</a> --}}
    <a href="http://127.0.0.1:8000/solicitud" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Solicitar empleo</a>
    <a href="http://127.0.0.1:8000/cotizaciones" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i>Cotizar proyectos</a>
    {{-- <a href="#about" class="w3-bar-item w3-button w3-hide-small"></i> Hogar</a> --}}
    {{-- <a href="#about" class="w3-bar-item w3-button w3-hide-small"></i> Oficina</a> --}}
    <a href="http://127.0.0.1:8000/portafolio" class="w3-bar-item w3-button w3-hide-small"></i> Portafolio</a>
    
    
 
  </div>
  
  <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        {{-- <a href="http://127.0.0.1:8000/login" class="w3-bar-item w3-button" onclick="toggleFunction()">Administradores</a> --}}
        <a href="http://127.0.0.1:8000/solicitud" class="w3-bar-item w3-button" onclick="toggleFunction()">Solicitar empleo</a>
        <a href="http://127.0.0.1:8000/cotizaciones" class="w3-bar-item w3-button" onclick="toggleFunction()">Cotizar proyectos</a>
        {{-- <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">Hogar</a> --}}
        {{-- <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">Oficina</a> --}}
        <a href="http://127.0.0.1:8000/portafolio" class="w3-bar-item w3-button" onclick="toggleFunction()">Portafolio</a>
 
   
    </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
  
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">CONSTRUCTORA SEACCO</h3>
  
  <p>Somos una firma constructora con personal calificado y listo para ejecutar
cualquier obra civil a nivel nacional, brindamos un servicio de calidad con un
enfoque funcional y ecológico, comprometidos a mejorar continuamente y
determinados en realizar sus proyectos de acuerdo con las especificaciones,
dentro de los tiempos contratados y estándares de calidad esperados para la
plena satisfacción del cliente.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
     
      <img src='vendor/adminlte/dist/img/seacco.jpg' class="w3-round w3-image  w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    
      <p><h3>POLITICA DE CALIDAD</h3>El principal objetivo de la dirección y del equipo humano de la empresa
constructora SEACCO S. de R.L. es la plena satisfacción del cliente,
implantando, desarrollando y manteniendo un sistema de gestión de la calidad
basado en la mejora continua, proporcionando servicios que cumplan los
requisitos aplicables de las partes interesadas con especial énfasis en el cliente.</p>
    
    
</div>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">     
      <img src='vendor/adminlte/dist/img/banner2.jpg' class="w3-round w3-image  w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6  ">
      <p><h3>NUESTROS SERVICIOS</h3>
      <ul>
          <li>
          AVALÚOS
          </li>
          <li>
          TOPOGRAFÍA
          </li><li>
          DISEÑOS 3D
          </li>
          <li>
          PLANOS
          </li>
          <li>
          PRESUPUESTOS
          </li><li>
          INFRAESTRUCTURA
          </li><li>
          EDIFICACIONES DE TODO TIPO 
          </li>
          <li>
          INFORMES OBRAS, DAÑOS Y SEGUIMIENTOS
          </li><li>
          CONSULTORÍAS CIVILES
          </li><li>
          CONSULTORÍAS AMBIENTALES
          </li>
      </ul>
    
      </p>
    </div>
    
  </div>
  
  <p class="w3-large w3-center w3-padding-16">MISIÓN</p>
  Satisfacer las necesidades constructivas a nivel nacional proporcionando los más
altos estándares de calidad en construcción y servicio, apegados bajo un modelo
de calidad. Brindando soluciones integradas para salvaguardar el medio ambiente
con profesionales certificados para el mismo.
<p class="w3-large w3-center w3-padding-16">VISIÓN</p>
Ser una empresa reconocida a nivel nacional creando confianza con nuestros
clientes y brindando oportunidades de trabajo para el hondureño.

<div class="bgimg-3 w3-display-container w3-opacity-min">

    

<div class="w3-row w3-padding-32 w3-section">
<H3>EJECUTAMOS OBRAS DE INGENIERÍA CIVIL
EN SUS MÚLTIPLES ÁREAS COMO SER:
</H3>
<ul>
          <li>
          Construcción, ampliación y remodelación de Viviendas
          </li>
          <li>
          Sistemas de Agua Potable
          </li><li>
          Alcantarillados Sanitarios
          </li>
          <li>
          Sistemas de Saneamiento
          </li>
          <li>
          Construcción de Edificios Residenciales y Comerciales
          </li><li>
          Mantenimiento de Red Vial
          </li><li>
          Construcción y rehabilitación de Carreteras 
          </li>
         </ul>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <br>
         <br>
         <br>
      </div>   
     </div>

<!-- Container (Contact Section) -->

    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Regresar</a>
  <div class="w3-xlarge w3-section">
    <a href="https://m.facebook.com/Constructora-Seacco-658896417875063/" title="W3.CSS" target="_blank" class="w3-hover-text-green"> <i class="fa fa-facebook-official w3-hover-opacity">Facebook</i></a>
    <a href="https://www.instagram.com/?hl=es-la" title="W3.CSS" target="_blank" class="w3-hover-text-green"> <i class="fa fa-instagram w3-hover-opacity">Instagram</i></a>
  </div>
 
  <p>Telefonos: 9660-7632 <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p>
  <p>Correos: proyectos@seaccoconstruye.com <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p>
  <p>Dirección: Tegucigalpa, Honduras <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>


