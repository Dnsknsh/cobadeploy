<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TITAN - Kelola Data Relawan</title>

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
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
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
</br>
</br>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Kelola Data Relawan</h2>
        
        </br>
</br>
</br>
</br>
</br>
<a style="width: 20%; background-color: grey !important; margin-left: 78% !important;" href="{{ route('tambahrelawan')}}" class=" btnadd">Tambah Data Relawan</a>
</br>
</br>

<div class="row">
@foreach($relawan as $key => $datas)

  <div class="col-md-6">
  <div class="container">
    <div class="card2">
     <div class="card-header" style="background-color: #F0EDEC !important; margin-left: -10px; margin-top: 10px; margin-bottom: 20px;font-family: palatino;color: #2c3e50;" >
      <table class="table2 " >
            <tr><td>Nama:</td><td>{{ $datas->nama }}</td></tr>
             <tr><td>ID:</td><td>{{ $datas->id_relawan}}</td></tr>
            <tr><td>Status    :</td><td> {{ $datas->status }}</td></tr>
            <tr><td>Email     : </td><td>{{ $datas->email }}</td></tr>
           <tr><td> No HP     :</td><td> {{ $datas->noHP }}</td></tr>
            <tr><td>Keahlian:</td><td>{{ $datas->keahlian }}</td></tr>
           <tr><td> Alamat    :</td><td> {{ $datas->alamat }}</td></tr>
           <tr><td> Usia      : </td><td>{{ $datas->usia }}</td></tr>
           <tr><td> Tim       :</td><td> {{ $datas->tim }}</td></tr>
           <tr><td style="width: 30%;"><form action="{{ route('relawan.destroy', $datas->id_relawan) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('relawan.edit',$datas->id_relawan) }}" class=" btn btn-sm btn-primary">Edit</a></td>
                                <td><button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button></form>
                            </td></tr>
          </table>
     </div>
      <div class="card-body" style="text-align: center; justify-content: center; font-size: 35px; font-family: palatino; vertical-align: center; color:#2C3E50 ; margin-top: 30px; margin-left: -10px;">
             <img src="{{ url('uploads/file/'.$datas->foto) }}" style="width: 150px; height: 200px; padding-right: 15px;">
            
            
</div>
    </div>
</br>
  </div>
</div>
    @endforeach
  </div>
    {{ $relawan->links()}}
        
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
