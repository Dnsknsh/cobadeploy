@extends('base')
@section('content')

<section class="main-section">
	<div class="content">
		<div class="container-fluid" style="width: 250% !important; height: 200%;" >


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Siapkan Tim Kesehatan</div>

              <input type="button" name="buatTim" value="Buat Tim"> 


            <div class="card-body">
              <div class="table-responsive">
                <table align="center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Keahlian</th>
                      <th>Tempat Tinggal</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama</th>
                      <th>Keahlian</th>
                      <th>Tempat Tinggal</th>
                      <th>Keterangan</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
    </div>
</section>
@endsection