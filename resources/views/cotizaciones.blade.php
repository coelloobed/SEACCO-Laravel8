<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Cotizar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body style="background-color:rgb(230, 243, 243);
background-image: url('vendor/adminlte/dist/img/banner3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;"
>


<!-- Navbar (sit on top) -->


<div style="background-color:rgb(230, 243, 243);"  class="w3-top">
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
    <a href="http://127.0.0.1:8000/portafolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Portafolio</a>
    
    
 
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

  <!-- contenido -->
  <br><br>

  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div style="background-color:rgb(216, 247, 233);" class="modal-header">
         <h2>Cotizar Proyectos</h2>
        </div>

      <!-- Modal body -->
      <div class="modal-body" style="background-color:rgb(230, 243, 243);">
          <form>
    <label for="">Nombre Completo</label>
    <input type="text" class="form-control " placeholder="Ingre su nombre">
    <br>
    <label for="">Numero telefono</label>
    <input type="number" class="form-control " placeholder="Ingre su numero">
    <br>
    <label for="">Correo</label>
    <input type="text" class="form-control" placeholder="Opcional Ingrese su correo" name="email">
    <br>
    <label for="">Proyecto</label>
	     <select name="txtMetodo_Compra" class="form-control" required="true">
	    <option  value="">Seleccione el proyecto a cotizar</option>
        <option  value="">AVALÚOS</option>
        <option  value="">TOPOGRAFÍA</option>
        <option  value="">DISEÑOS 3D</option> 
        <option  value="">PLANOS</option>
        <option  value="">PRESUPUESTOS</option>
        <option  value="">INFRAESTRUCTURA</option>
        <option  value="">EDIFICACIONES DE TODO TIPO</option>  
        <option  value="">INFORMES OBRAS, DAÑOS Y SEGUIMIENTOS</option>  
        <option  value="">CONSULTORÍAS CIVILES</option>  
        <option  value="">CONSULTORÍAS AMBIENTALES EN PROYECTOS CIVILES</option> 
        <option  value="">Otro</option> 
       </select><br> 
       <label for="">Especificar</label>
       <input type="text" class="form-control " placeholder="Especifique el proyecto"> <br>
       <label for="">Lugar de proyecto</label>
       <input type="text" class="form-control " placeholder="Especifique el lugar del proyecto">        
       
  </form>
      </div>

      <!-- Modal footer -->
      <div style="background-color:rgb(230, 243, 243);" class="modal-footer">
        
       <a href="http://127.0.0.1:8000/" class="btn btn-primary" onclick="return confirm('¿Quieres enviar la cotización?')">Enviar la Cotización</a>
       <a href="http://127.0.0.1:8000/" class="btn btn-danger" onclick="return confirm('¿Quieres cancelar la cotización?')">Cancelar</a>
        
      </div>

    </div>
  </div>

  <!-- fin contenido -->

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
