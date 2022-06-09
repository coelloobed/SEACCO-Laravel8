<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        {{-- <div class="container-fluid fixed-top p-4">
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-muted">Log in</a>
    
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ms-4 text-muted">Register</a>
                                @endif
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div> --}}




        <div class="card-body">

            <x-jet-validation-errors class="mb-3 rounded-0" />

            @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                    {{-- Logo seacco --}}
                    <center><img src='vendor/adminlte/dist/img/seacco.jpg' class="w3-round w3-image  w3-hover-opacity-off" alt="Photo of Me" width="150" height="150"></center>
                     <body oncontextmenu="return false">
                       
       
                <div class="mb-3">
                    <x-jet-label value="{{ __('Usuario') }}" />

                    <x-jet-input class="{{ $errors->has('username') ? 'is-invalid' : '' }}" pattern="[A-Z]+" title="Solo letras mayusculas" type="text"
                                 name="username" :value="old('username')" required />
                    <x-jet-input-error for="username"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Contraseña') }}" />

                    <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password"
                                 name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres" required autocomplete="current-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <div class="custom-control custom-checkbox">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <label class="custom-control-label" for="remember_me">
                            {{ __('Recordar usuario') }}
                        </label>
                    </div>
                </div>

                <div class="mb-0" >
                    

                    <div class="d-grid mb-2"   class="d-flex justify-content: space-around; ">
                        
                        <x-jet-button>
                            {{ __('Ingresar') }}
                        </x-jet-button>
                         
                    </div>
                    {{-- Agregado para registrar usuarios oicv 25-3-2022 --}}
                    {{-- <div class="d-grid mb-3">
                        <a href="{{ route('register') }}" type="button" class="btn  btn-primary btn-dark">REGISTRAR</a>
                    </div> --}}

                    <div class="d-flex justify-content-end align-items-baseline " >
                        @if (Route::has('password.request'))
                            <a class="text-muted me-3" href="{{ route('password.request') }}">
                                {{ __('Olvido password?') }}
                            </a>
                        @endif

                        
                    </div>
                </div>

                

            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>

 {{-- @extends('adminlte::auth.login')  --}}
 

 <style>

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>

<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
 

<script >
	function noespacios() {
		var er = new RegExp(/\s/);
		var web = document.getElementById('password').value;
		if(er.test(web)){
			alert('No se permiten espacios');
			return false;
		}
                else
			return true;
	}
</script>