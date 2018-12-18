<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TITAN - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap2.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="/assets/all2.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="/assets/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="/assets/freelancer.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav" style="height: 80px;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">TITAN</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Kelola</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <ul class="navbar-nav  ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
               <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <img style="margin-top: 5px;" src="/assets/user.png">
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"  style="font-family: 'Numans', sans-serif !important;">Logout</a>
            </div>
        </li>


           
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="/assets/student.png" alt="">
        <h1 class="text-uppercase mb-0">Selamat Datang </h1>
        <hr class="star-light2">
        <h2 class="font-weight-light mb-0">Staff IT</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Kelola Akun Pengguna</h2>
        
        </br>
</br>
</br>
<a style="width: 20%; background-color: grey !important; margin-left: 80% !important;" href="{{ route('register')}}" class=" btnadd">Tambah Akun</a>
</br>
</br>

      <div class="table-responsive">
                <table align="center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="background-color: grey; text-align: center">
                      <th style="width: 5%;">ID</th>
                      <th>Email</th>
                      <th>Nama</th>
                      <th style="width: 15%;">Pekerjaan</th>
                      <th style="width: 30%">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr style="background-color: grey; text-align: center">
                      <th style="width: 5%;">ID</th>
                      <th>Email</th>
                      <th>Nama</th>
                      <th style="width: 15%;">Pekerjaan</th>
                      <th style="width: 30%">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($user as $key => $datas)
                    <tr>
                         <td style="width: 5%;">{{ $datas->id }}</td>
                        <td>{{ $datas->email }}</td>
                        <td>{{ $datas->name }}</td>
                        <td>{{ $datas->pekerjaan }}</td>
                        <td style="width: 30%;"><form action="{{ route('user.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button></form>
                            </td>
                    </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
      </div>
    </section>

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

    

    <!-- Bootstrap core JavaScript -->
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
