<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="School Admin">
  <meta name="keywords" content="Admin School">
  <meta name="author" content="School">
  <title>School admin</title>
  <link rel="apple-touch-icon" href="{{ url('app-assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('app-assets/images/ico/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/ui/prism.min.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/app.css')}}">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/core/colors/palette-gradient.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded container boxed-layout fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
  <!-- fixed-top-->    
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-dark bg-gradient-x-primary navbar-shadow container boxed-layout">
    <div class="navbar-wrapper morado">
      <div class="navbar-header morado">
        <ul class="nav navbar-nav flex-row ">
          <li class="nav-item ">
            <a class="navbar-brand" href="/">
              <img class="brand-logo" alt="admin logo"  src="{{ url('app-assets/images/logo/mati-kinder-logo-50x34.png') }}">
              <h2 class="brand-text">Admin</h2>
            </a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content morado">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left ">
            
          </ul>
          <ul class="nav navbar-nav float-right ">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="{{ route('register') }}" >
                <span class="user-name">Registro</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  
  <div class="app-content">
    <div class="content-wrapper">
  <br>
      <div class="content-body">
        <!-- Description -->
        <section id="description" class="card">
          <div class="card-header">
            <h4 class="card-title">@yield('titulo')</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="card-text">
                @yield('content')
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- BEGIN VENDOR JS-->
  <script src="{{ url('app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="{{ url('app-assets/vendors/js/ui/prism.min.js')}}"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="{{ url('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <script src="{{ url('js/funcion.js')}}" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <script type="text/javascript">    

    (function() {
       'use strict';
       window.addEventListener('load', function() {
         // Fetch all the forms we want to apply custom Bootstrap validation styles to
         var forms = document.getElementsByClassName('needs-validation');
         // Loop over them and prevent submission
         var validation = Array.prototype.filter.call(forms, function(form) {
           form.addEventListener('submit', function(event) {
             if (form.checkValidity() === false) {
               event.preventDefault();
               event.stopPropagation();
             }
             form.classList.add('was-validated');
           }, false);
         });

       }, false);

      })();

  </script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <!-- END PAGE LEVEL JS-->
</body>
</html> 
