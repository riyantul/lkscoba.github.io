@extends('templates.index')
@section('page-content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Karyawan</h3>
            </div>
            

            <!-- /.card-header -->
            <div class="card-body">
                <a href="/karyawan/create"><i class="btn btn-primary mb-3">Tambah</i></a>
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Bagian Kerja</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
             @foreach($karyawan as $krywn)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $krywn->nama_karyawan}}</td>
                  <td>{{ $krywn->alamat}}</td>
                  <td>{{ $krywn->no_telp}}</td>
                  <td>{{ $krywn->bagian_kerja}}</td>
                  <td>{{ $krywn->jenis_kelamin }}</td>
                  <td>
                        <a href="/karyawan/{{ $krywn->id }}/edit"><i class="fa fa-edit"></i></a>
                        <form action="/karyawan/{{ $krywn->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                                <button  class="badge bg-danger border-0" onclick="return confirm('Yakin Ingin Dihapus?')"><i class="fa fa-trash"></i></button>
                        </form>
                  </td>
                </tr>
            @endforeach
                </tbody>
                <tfoot>
                <tr><tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Bagian Kerja</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr></tr>
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.card-body -->
          </div>
        
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection