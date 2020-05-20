<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Veca's | Pagina de resgistro</title>
  <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fe3e4a1f59.js" crossorigin="anonymous"></script>
  <!-- Google Font: Source Sans Pro -->
  <!---toastr--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
  <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$themes/dist/css/adminlte.min.css")}}">
  <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset("assets/$themes/registrer/img/icons/favicon.ico")}}"/>
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/$themes/registrer/vendor/bootstrap/css/bootstrap.min.css")}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/$themes/registrer/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/$themes/registrer/fonts/Linearicons-Free-v1.0.0/icon-font.min.css")}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/$themes/registrer/vendor/animate/animate.css")}}">
  <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="{{asset("assets/$themes/registrer/vendor/css-hamburgers/hamburgers.min.css")}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/$themes/registrer/vendor/animsition/css/animsition.min.css")}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/$themes/registrer/vendor/select2/select2.min.css")}}">
  <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="{{asset("assets/$themes/registrer/vendor/daterangepicker/daterangepicker.css")}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/$themes/registrer/css/util.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/$themes/registrer/css/main.css")}}">
  <!--===============================================================================================-->
 
  </head>
  <body style="background-color: #666666;">
    <div class="limiter">
      <div class="container-login100 ">
        <div class="login100-more" style="background-image: url('{{asset("assets/$themes/dist/img/login.png")}}');">
        </div>
        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
          <form class="login100-form validate-form"  action="{{ route('register-post') }}" method="POST">
            @csrf
            <span class="login100-form-title p-b-59">
              Registrarse
            </span>
  
            <div class="wrap-input100 validate-input" data-validate="Name is required">
              <span class="label-input100">Nombre completo</span>
              <input class="input100 @error('nombre') is-invalid @enderror" id="nombre" type="text"  name="nombre" value="{{ old('nombre') }}" placeholder="Nombre...">
                @error('nombre')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
                @enderror
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Username is required">
              <span class="label-input100">Nombre de usuario</span>
              <input class="input100 @error('usuario') is-invalid @enderror" id="usuario" type="text"name="usuario" value="{{ old('usuario') }}" placeholder="Username..." required autocomplete="usuario">
                @error('usuario')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              <span class="focus-input100"></span>
            </div>
  
            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Email</span>
              <input class="input100 @error('email') is-invalid @enderror" id="email" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electronico...">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                 </span>
              @enderror
              <span class="focus-input100"></span>
            </div>
  
            <div class="wrap-input100 validate-input" data-validate = "Password is required">
              <span class="label-input100">Contraseña</span>
              <input class="input100 @error('password') is-invalid @enderror" id="password"  type="password" name="password" required autocomplete="new-password" placeholder="*************">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <span class="focus-input100"></span>
            </div>
  
            <div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
              <span class="label-input100">Repita la Contraseña</span>
              <input class="input100" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="*************">
              <span class="focus-input100"></span>
            </div>
  
            <div class="flex-m w-full p-b-33">             
            </div>
  
            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button  type="submit" class="login100-form-btn">
                  Registrase
                </button>
              </div>
  
                <a href="{{route('login-inicio')}}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                Sign in
                <i class="fa fa-long-arrow-right m-l-5"></i>
              </a>
            </div>

          </form>
        </div>
      </div>
    </div>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/$themes/registrer/js/adminlte.min.js")}}"></script>
    <script src="{{asset("assets/$themes/plugins/jquery/jquery.min.js")}}"></script>
    <!--- AdminLTE App --->
    <script src="{{asset("assets/$themes/dist/js/adminlte.min.js")}}"></script>
    <!---agregar jquery validacion --->
    <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>



  </body>
</html>
