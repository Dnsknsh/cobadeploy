<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TITAN - Kelola Data Bencana</title>

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
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">TITAN</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
           <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('indexpengelola')}}">Home</a>
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

    </br>
  </br>
</br>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Tambah Data Bencana</h2>
        
        </br>
</br>
</br>

</br>
        <form action="{{ route('bencana.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama Bencana:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
                <div class="form-group">
                    <label for="provinsi">Provinsi:</label>
                    <select id="provinsi" onchange="pilihKabupaten()" class="form-control" name="provinsi">
                      <option>Pilih...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kabupaten">Kabupaten/Kota:</label>
                    <select id="kabupaten" onchange="pilihKecamatan()" class="form-control" name="kabupaten">
                      <option>Pilih...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan:</label>
                    <select id="kecamatan" onchange="pilihKelurahan()" class="form-control" name="kecamatan">
                      <option>Pilih...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kelurahan">Kelurahan:</label>
                    <select id="kelurahan" class="form-control" name="kelurahan">
                      <option>Pilih...</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>

            </form>
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

    
   


    <script src="{{asset('js/lokasi.js')}}"></script>

  </body>

</html>
