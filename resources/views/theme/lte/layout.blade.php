<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('titulo',"Administrador") | Veca's </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/fe3e4a1f59.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset("assets/$themes/plugins/fontawesome-free/css/all.min.css")}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("assets/$themes/dist/css/adminlte.min.css")}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
        @yield('styles')
    </head>
    <body class="hold-transition sidebar-mini layout-boxed">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!---inicio header--->
            @include("theme/$themes/header")
            <!---fin de header--->
            <!---inicio aside--->
            @include("theme/$themes/aside")
            <!---fin de aside--->
            <div class="content-wrapper">
                <section class="content-header">
                    <!---Agregando contenido--->
                    @yield('contenido')
                    <!---fin--->
                </section>
            </div>
            <!---inicio footer--->
            @include("theme/$themes/footer")
            <!---fin de footer--->
        </div>
        <!-- jQuery -->
        <script src="{{asset("assets/$themes/plugins/jquery/jquery.min.js")}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset("assets/$themes/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("assets/$themes/dist/js/adminlte.min.js")}}"></script>
        <!---agregar jquery validacion --->
        <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
        <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>
        <script src="{{asset("assets/js/funciones.js")}}"></script>
        @yield('scripts')
    </body>
</html>