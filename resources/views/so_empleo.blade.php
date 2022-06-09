<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Solicitud de empleo</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
    {{-- <a href="#about" class="w3-bar-item w3-button w3-hide-small"> Hogar</a> --}}
    {{-- <a href="#about" class="w3-bar-item w3-button w3-hide-small"> Oficina</a> --}}
    <a href="http://127.0.0.1:8000/portafolio" class="w3-bar-item w3-button w3-hide-small"> Portafolio</a>
 
  </div>
  
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="http://127.0.0.1:8000/login" class="w3-bar-item w3-button" onclick="toggleFunction()">Administradores</a>
    <a href="http://127.0.0.1:8000/solicitud" class="w3-bar-item w3-button" onclick="toggleFunction()">Solicitar empleo</a>
    <a href="http://127.0.0.1:8000/cotizaciones" class="w3-bar-item w3-button" onclick="toggleFunction()">Cotizar proyectos</a>
    {{-- <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">Hogar</a> --}}
    {{-- <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">Oficina</a> --}}
    <a href="http://127.0.0.1:8000/portafolio" class="w3-bar-item w3-button" onclick="toggleFunction()">Portafolio</a>

      </div>
      </div>

<!-- First Parallax Image with Logo Text -->

  <!-- contenido -->
  <br><br>
  <div class="container mt-3">
		
  	<center><h1>Solicitud de Empleo</h1></center>
    
	<br>
  <div class="row">
    <div class="col-sm-6 bg-light text-dark p-3">
<div>
<div class="container mt-3">
  <br>
  <h3>Campo Mano de Obra</h3>
  <br>
  <button type="button1" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Llenar Solicitud
  </button>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Datos Personales</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       	<label for="nombre" class="form-label">Nombre Completo:</label>
   		<input type="nombre" class="form-control" id="nombre" 
            placeholder="Ingrese Nombre Completo" name="nombre">
        <br>
        <label for="rtn" class="form-label">Numero de Identidad:</label>
   		<input type="rtn" class="form-control" id="rtn" 
            placeholder="Ingrese Numero de Identidad" name="rtn">
        <br>
        <label for="direccion" class="form-label">Direccion:</label>
   		<input type="direccion" class="form-control" id="direccion" 
            placeholder="Ingrese Direccion" name="direccion">
        <br>
        <label for="celular" class="form-label">Numero Celular:</label>
   		<input type="celular" class="form-control" id="celular" 
            placeholder="Ingrese Numero Celular" name="celular">
        <br>
        <label for="referencia" class="form-label">Referencia:</label>
   		<input type="referencia" class="form-control" id="referencia" 
           	placeholder="Ingrese Referencia" name="referencia">
        <br>
        <label for="celularreferencia" class="form-label">Numero Celular Referencia:</label>
   		<input type="celularreferencia" class="form-control" id="celularreferencia" 
            placeholder="Ingrese Numero Celular Referencia" name="celularreferencia">
        <br>
        <label for="experiencia" class="form-label">Experiencia Laboral:</label>
   		<input type="experiencia" class="form-control" id="experiencia" 
            placeholder="Ingrese Experiencia Laboral" name="experiencia">
        <br>
       	<label for="">Imagen:</label> 
        <input type="file" class="form-control" accept="image/*"  name="" placeholder="" 
        id="txtFoto" require="">
        <br>
        <label for="">Hoja de vida:</label> 
        <input type="file" class="form-control" accept="image/*"  name="" placeholder="" 
        id="txtFoto" require="">
        <br>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Enviar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>
</div>
    </div>
    <div class="col-sm-6 bg-light text-dark p-3">
      <div>
<div class="container mt-3">
  <h1></h1>
  <br>
  <h3>Campo Administrativo</h3>
  <br>

  <button type="button2" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">
    Llenar Solicitud
  </button>
</div>

<!-- The Modal -->
<div class="modal fade" id="Modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Datos Personales</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       	<label for="nombre" class="form-label">Nombre Completo:</label>
   		<input type="nombre" class="form-control" id="nombre" 
            placeholder="Ingrese Nombre Completo" name="nombre">
        <br>
        <label for="rtn" class="form-label">Numero de Identidad:</label>
   		<input type="rtn" class="form-control" id="rtn" 
            placeholder="Ingrese Numero de Identidad" name="rtn">
        <br>
        <label for="profesion" class="form-label">Profesion:</label>
   		<input type="profesion" class="form-control" id="profesion" 
        	placeholder="Ingrese Profesion" name="profesion">
       	<br>
        <label for="direccion" class="form-label">Direccion:</label>
   		<input type="direccion" class="form-control" id="direccion" 
        	placeholder="Ingrese Direccion" name="direccion">
        <br>
        <label for="celular" class="form-label">Numero Celular:</label>
   		<input type="celular" class="form-control" id="celular" 
            placeholder="Ingrese Numero Celular" name="celular">
        <br>
        <label for="referencia" class="form-label">Referencia:</label>
   		<input type="referencia" class="form-control" id="referencia" 
           	placeholder="Ingrese Referencia" name="referencia">
        <br>
        <label for="celularreferencia" class="form-label">Numero Celular Referencia:</label>
   		<input type="celularreferencia" class="form-control" id="celularreferencia" 
            placeholder="Ingrese Numero Celular Referencia" name="celularreferencia">
        <br>
        <label for="experiencia" class="form-label">Experiencia Laboral:</label>
   		<input type="experiencia" class="form-control" id="experiencia" 
            placeholder="Ingrese Experiencia Laboral" name="experiencia">
        <br>
        <label for="email" class="form-label">Correo Electronico:</label>
   		<input type="email" class="form-control" id="email" 
        	placeholder="Ingrese Correo Electronico" name="email">
        <br>
       	<label for="">Imagen:</label> 
        <input type="file" class="form-control" accept="image/*"  name="" placeholder="" 
        id="txtFoto" require="">
        <br>
        
       	<label for="">Hoja de vida:</label> 
        <input type="file" class="form-control" accept="image/*"  name="" placeholder="" 
        id="txtFoto" require="">
        <br>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Enviar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>

    </div>
  	</div>
	</div>
	</div>
    
    </div>
  </div>
</div>

<div class="container mt-3">
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://scontent.ftgu1-1.fna.fbcdn.net/v/t1.6435-9/158102823_1157224854708881_976205956869760406_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=e3f864&_nc_ohc=CSQ6ETz7nuUAX8dWoAO&_nc_ht=scontent.ftgu1-1.fna&oh=00_AT9mh_kCyee-rMOkFL-kjIsTimKKhVn1hx-fp7_cb7JeAg&oe=626399E5" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src='/vendor/adminlte/dist/img/banner3.jpg' alt="Chicago" class="d-block" style="width:100% height=" >
    </div>
    <div class="carousel-item">
      <img src='/vendor/adminlte/dist/img/banner2.jpg' alt="Chicago" class="d-block" style="width:100% height=" >
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
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
