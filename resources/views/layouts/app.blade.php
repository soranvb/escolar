<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.css">

      <!--<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}"> -->
      
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token(), ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger cambiar la barra de navegador al icono cuando baja mucho el tamaño de pantalla -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                     <ul class="nav navbar-nav navbar-left">
                       <!-- Image and text -->
                          <a class="navbar-brand" href="#">
                             <img src="/escolar/public/uploads/avatars/g.png" width="35" height="35" class="d-inline-block align-top" alt="logo">                            
                          </a>
                          <a class="navbar-brand" href="{{ url('/') }}">
                             {{ config('app.name', 'Laravel') }}
                          </a>
                        &nbsp;
                    </ul>                   
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                           <!-- <li><a href="{{ route('register') }}">Register</a></li>  no debe ser visible-->
                        @else
                            <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:55px;">
                                 <img src="/escolar/public/uploads/avatars/{{Auth::user()->avatar }}" style="width:50px; height:50px; position:absolute; top:0px; left:0px; border-radius:50%">
                                 {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{url('/profile')}}" ><i class="glyphicon glyphicon-user" ></i>Perfil </a> </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="glyphicon glyphicon-off" ></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('includes.menu')
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>   
    </div>

       <script type="text/javascript">
            setTimeout(function() {
                $("#alerta").fadeOut(3000);
            },2000);
       </script>

    <footer class="text-center">
        <hr> Grupo Galhid &copy; 2017 Política de Privacidad
    </footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
crossorigin="anonymous"></script>
<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" 
integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" 
crossorigin="anonymous"></script>
</body>
</html>