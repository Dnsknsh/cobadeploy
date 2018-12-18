@extends('base')
@section('content')

<section class="main-section">
	<div class="content">
		<div class="container-fluid" style="width: 140% !important; height: 200%;" >

          
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Tenaga Kesehatan</div>
            <div class="card-body">
              <div class="table-responsive">
                <table align="center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>Email</th>
                      <th>No HP</th>
                      <th>Pekerjaan</th>
                      <th>Alamat</th>
                      <th>Usia</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>ID</th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>Email</th>
                      <th>No HP</th>
                      <th>Pekerjaan</th>
                      <th>Alamat</th>
                      <th>Usia</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($relawan as $key => $datas)
                    <tr>
                         <td>{{ $datas->id_relawan }}</td>
                        <td>{{ $datas->nama }}</td>
                        <td>{{ $datas->status }}</td>
                        <td>{{ $datas->email }}</td>
                        <td>{{ $datas->noHP }}</td>
                        <td>{{ $datas->pekerjaan }}</td>
                        <td>{{ $datas->alamat }}</td>
                        <td>{{ $datas->usia }}</td>
                        <td><form action="{{ route('relawan.destroy', $datas->id_relawan) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('relawan.edit',$datas->id_relawan) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form></td>
                    </tr>
                @endforeach
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