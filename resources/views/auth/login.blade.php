<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="google-site-verification" content="SKuO2NOdADnxaV-X-53eTxgnXKRvIABkZB800jV9hWM" />
  <meta name="description" content="Admin School,Administrador de alumnos">
  <meta name="keywords" content="Admin School">
  <meta name="author" content="Snappath">
  <title>Admin Matihomeschool</title>
  <link rel="apple-touch-icon" href="{{ url('app-assets/images/logo/mati-kinder-logo-50x34.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('app-assets/images/logo/mati-kinder-logo-50x34.png') }}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/forms/icheck/icheck.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/forms/icheck/custom.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/app.css')}}">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/pages/login-register.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css')}}">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 1-column   bg-lighten-2 menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column" style="background-image: url('app-assets/images/logo/35-mates.png');" >
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body" >
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center" >
            <div class="col-md-4 col-10 box-shadow-2 p-0" >
              <div class="card border-grey border-lighten-3 m-0" >
                <div class="card-header border-0" >
                  <div class="card-title text-center" >
                    <div class="p-1">
                      
                        <h4><b><img class="brand-logo" alt="stack admin logo"  style="width: 50%;" src="{{ url('app-assets/images/logo/thumbnail_mati-talent-sin-fondo.png') }}"></b></h4>
                      
                    </div>
                  </div>
                </div>
                <div class="card-content" >
                  <div class="card-body pt-0" >
                    <form method="post" class="form-horizontal" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        
                            <fieldset class="form-group floating-label-form-group">
                              <label for="user-name">Email</label>
                              <input type="text" class="form-control" required="" id="email" name="email" placeholder="Tu email" value="{{ old('email') }}">
                            </fieldset>
                        <fieldset class="form-group floating-label-form-group mb-1">
                                <label for="user-password">Contraseña</label>
                                <input type="password" class="form-control" required="" id="password" name="password" placeholder="Ingresa tu contraseña">
                        </fieldset>

                      <button type="submit" style="background-color: #852fbe; color: white" class="btn  btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                  
                 <!-- 
                  <div class="card-body">
                    <a href="{{ url('/register') }}" class="btn btn-outline-danger btn-block"><i class="ft-user"></i> Registro</a>
                  </div>
                -->
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
  <script src="{{ url('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{ url('app-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="{{ url('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <!--<script src="{{ url('app-assets/js/scripts/forms/form-login-register.js')}}" type="text/javascript"></script>-->
  <!-- END PAGE LEVEL JS-->
  <script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>

</body>
</html>
