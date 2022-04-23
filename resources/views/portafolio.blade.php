<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Portafolio</title>
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
    
    {{-- <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Administradores</a> --}}
    <a href="http://127.0.0.1:8000/solicitud" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Solicitar empleo</a>
    <a href="http://127.0.0.1:8000/cotizaciones" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i>Cotizar proyectos</a>
    {{-- <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Hogar</a> --}}
    {{-- <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Oficina</a> --}}
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"> Portafolio</a>
 
  </div>
  
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    {{-- <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">Administradores</a> --}}
    <a href="http://127.0.0.1:8000/solicitud" class="w3-bar-item w3-button" onclick="toggleFunction()">Solicitar empleo</a>
    <a href="http://127.0.0.1:8000/cotizaciones" class="w3-bar-item w3-button" onclick="toggleFunction()">Cotizar proyectos</a>
    {{-- <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">Hogar</a> --}}
    {{-- <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">Oficina</a> --}}
    <a href="http://127.0.0.1:8000/portafolio" class="w3-bar-item w3-button" onclick="toggleFunction()">Portafolio</a>

      </div>
      </div>

<!-- First Parallax Image with Logo Text -->

  <!-- contenido -->
  <br><br><br>
  <!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="https://www.pngplay.com/wp-content/uploads/12/User-Avatar-Profile-No-Background.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>PORTAFOLIO</b></h4>
    <p class="w3-text-grey">Constructora Seacco</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-		th-large fa-fw w3-margin-right"></i>PORTAFOLIO</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-			margin-right"></i>NOSOTROS</a> 
    <a onclick="w3_close()" class="w3-bar-item w3-button w3-padding"> <span class="glyphicon glyphicon-map-marker"></span>DIRECCION: Tegucigalpa, Honduras</a>
	<a onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><span class="glyphicon glyphicon-phone"></span> TELEFONO: 9660-7632</a>
	<a onclick="w3_close()" class="w3-bar-item w3-button w3-padding"> <span class="glyphicon glyphicon-envelope"></span> CORREO:
		proyectos@seaccohn.com</a>

  </div>
  <div class="w3-panel w3-large">
    <a href="https://m.facebook.com/Constructora-Seacco-658896417875063/" title="W3.CSS" target="_blank" class="w3-hover-text-green"> <i class="fa fa-facebook-official w3-hover-opacity">Facebook</i></a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="https://www.pngplay.com/wp-content/uploads/12/User-Avatar-Profile-No-Background.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Nuestro Portafolio</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filtro:</span> 
      <button class="w3-button w3-black">Todo</button>

    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="https://scontent.ftgu1-2.fna.fbcdn.net/v/t1.6435-9/118882797_1027652620999439_5245777772773455690_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=9xrLWpDwFqsAX_xeK2f&_nc_ht=scontent.ftgu1-2.fna&oh=00_AT86b-AEcbm9GCk3y5XQzveJ6rk2IC8Moi84LUTJ93cjnQ&oe=6264D5EC" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="https://scontent.ftgu1-1.fna.fbcdn.net/v/t1.6435-9/60337167_671514076613297_2895548573074587648_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=WBpzJRCGJS8AX9km4Pp&_nc_ht=scontent.ftgu1-1.fna&oh=00_AT-tKz3Dlimjhfi6J2h0c5L6iDZtVwzKFbHXlMYfLriKyg&oe=6266FE5B" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="https://scontent.ftgu1-2.fna.fbcdn.net/v/t1.6435-9/60336259_671514043279967_2762001353894002688_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=IUy5LVoVb7gAX9idB5Y&_nc_ht=scontent.ftgu1-2.fna&oh=00_AT-Kz6AtcXONgSSiRT-bfnGdxj-c-WKuHlaE1D5pdd8T7Q&oe=626602CD" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="https://scontent.ftgu1-2.fna.fbcdn.net/v/t1.6435-9/60347652_671513953279976_1821083193114099712_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=n7hv-NwA2AIAX9k4MhK&_nc_ht=scontent.ftgu1-2.fna&oh=00_AT-eFXlbtfMednasOIAuRxHZt-jRbFiZxrLzW6DrqWBeEA&oe=62656BDC" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="https://scontent.ftgu1-2.fna.fbcdn.net/v/t1.6435-9/60334116_671513906613314_132297838963982336_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=hdajZzcDR8EAX_ryCD_&_nc_ht=scontent.ftgu1-2.fna&oh=00_AT_f5mTf2L_IgMsjHmebqYXk5_ZlobkL51E5v2KdnLr7vw&oe=626620E8" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="https://scontent.ftgu1-1.fna.fbcdn.net/v/t1.6435-9/60352371_671513686613336_2661525477381898240_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=iSgi0UYuSH0AX_FnFU2&_nc_ht=scontent.ftgu1-1.fna&oh=00_AT8lhzifdYWmTxUva7Kt-9yDhJMR-iNnO7cwCdK-LKqcEQ&oe=62671DDC" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <img src="https://scontent.ftgu1-2.fna.fbcdn.net/v/t1.6435-9/58380416_658896734541698_2611083414362652672_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=gP7cfQUp7QgAX80M71A&_nc_ht=scontent.ftgu1-2.fna&oh=00_AT8p-dkMJs9iPsifuf_dSoGUbiIt_v0UC2qtdcrcBhmI2g&oe=6264401F" alt="Me" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="https://scontent.ftgu1-2.fna.fbcdn.net/v/t39.30808-6/276302718_1397429517355079_1504737718523573072_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=e3f864&_nc_ohc=KKhED7ZcQQYAX9MRgg8&tn=joiVExbhbvqXdoe4&_nc_ht=scontent.ftgu1-2.fna&oh=00_AT_O3K5KioHWJ0CcT5-nkooKitp0HkJ2pwdMbTtqxxaHOQ&oe=62455409" alt="Me" style="width:100%">
    </div>
  </div>

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>Nosotros</b></h4>
    <p>Somos una firma constructora con personal calificado y listo para ejecutar cualquier obra civil a nivel nacional, brindamos un servicio de calidad con un enfoque funcional y ecológico, comprometidos a mejorar continuamente y determinados en realizar sus proyectos de acuerdo con las especificaciones, dentro de los tiempos contratados y estándares de calidad esperados para la plena satisfacción del cliente.</p>
    <hr>
    
    
    
  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Constructora <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">Seacco</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

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
