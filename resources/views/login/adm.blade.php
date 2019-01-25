
<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="icon" href="image/telkom.png" type="image/ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>| SMK TELKOM DU | Sign in |</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor2/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="{{asset('vendor2/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css2/coming-soon.min.css')}}" rel="stylesheet">

  </head>

  <body>
  
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="img/red.mp4" type="video/mp4">
    </video>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h1 class="mb-3">Welcome !</h1>
              <p class="mb-5">Pleas login your name and your password in
                <strong> Sistem Laporan Kegiatan Siswa</strong> ! If it has not been registered  <a class="text-white" href="#">Sign In!</a></p>
                <div id="register" class="animate form registration_form">
                    <section class="login_content">
                      <form>
                        {{ csrf_field() }}
                        <div >
                          <input type="text" class="form-control" placeholder="Username *" required="" />                      
                        </div><br>

                        <div>
                          <input type="email" class="form-control" placeholder="Email *" required="" />
                        </div><br>

                        <div>
                          <input type="password" class="form-control" placeholder="Password *" required="" />
                        </div><br>

                        <div class="pull-right">
                          <a class="btn btn-success submit" href="{{URL('guru')}}">Finish</a>
                        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social-icons">
      <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-user"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-book"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
          </a>
        </li>
      </ul>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ url('vendor2/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('vendor2/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ url('js2/coming-soon.min.js')}}"></script>

  </body>

</html>
