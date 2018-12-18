<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TITAN - Masuk</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap2.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/assets/all2.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="/assets/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="/assets/freelancer.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">TITAN</a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Tentang</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg2 text-white text-center" >
      <div class="container">
         <div class="container">
    <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Masuk</h3>
      </div>
      <div class="card-body">
        @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
        <form action="{{ url('/loginPost') }}" method="post">
           {{ csrf_field() }}
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><img src="/assets/close-envelope.png"></span>
            </div>
            <input type="email" class="form-control" placeholder="Masukkan email Anda" id="email" name="email">
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><img src="/assets/key-silhouette-security-tool-interface-symbol-of-password.png"></span>
            </div>
            <input type="password" class="form-control" placeholder="Masukkan kata sandi Anda" id="password" name="password">
          </div>
          <div class="form-group">
             <button type="submit" class="btn btn-md btn-primary">Masuk</button>
          </div>
        </form>
      </div>
      <div class="card-footer">
      
        <div class="d-flex justify-content-center">
          <a href="#">Lupa kata sandi?</a>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    

    <!-- About Section -->
    <section style="background-color: white !important; color: #2C3E50 !important"  class="bg-primary text-white mb-0" id="about">
      <div class="container" style="color: #2C3E50 !important">
        <h2 class="text-center text-uppercase text-white" style="color: #2C3E50 !important">Tentang</h2>
        <hr class="star-light mb-5">

        <div class="row">
          <div class="d-flex justify-content-center-auto" >
            <p class="lead" style="text-align: center !important; font-size: 18px !important;">Sistem Manajemen Tim Kesehatan Bencana (TITAN) adalah suatu sistem perangkat lunak yang digunakan untuk pengelolaan tim kesehatan krisis bencana. Dalam pelaksanaan, sistem ini merupakan perangkat yang akan digunakan oleh Staf Pengelola, Koordinator Kesehatan, dan Staf IT dari pihak BPBD.</p>
          </div>
          
        </div>
        
      </div>
    </section>

    <!-- Contact Section -->
   

        <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Lokasi</h4>
            <p class="lead mb-0">Jalan Kaliurang KM 14.5
              <br>Yogyakarta, Indonesia
              <br> aquainforteam@gmail.com</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">IKUTI KAMI DI:</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-social text-center" href="#">
                  <img src="/assets/google-plus.png">
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-social text-center" href="#">
                  <img src="/assets/telegram.png">
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-social text-center " href="#">
                 <img src="/assets/twitter.png">
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-social text-center " href="#">
                 <img src="/assets/instagram.png">
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-social text-center " href="#">
                  <img src="/assets/facebook (1).png">
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Tentang Kami</h4>
            <p class="lead mb-0"  style="font-size: 16px !important";>AQUA adalah sebuah tim beranggotakan 4 orang yang bekerja untuk mata kuliah Pengembangan Aplikasi Berbasis Web dan Sistem dan Jaringan Komputer</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; TITAN 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    

    <!-- Bootstrap core JavaScript -->
    <script src="/assets/jquery.js"></script>
    <script src="/assets/bootstrap.bundle.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/assets/jquery.easing.js"></script>
    <script src="/assets/jquery.magnific-popup.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/assets/jqBootstrapValidation.js"></script>


    <script src="/js/lokasi.js"></script>
    <!-- Custom scripts for this template -->
    <script src="/assets/freelancer.js"></script>

  </body>

</html>
