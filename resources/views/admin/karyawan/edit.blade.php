@extends('templates.index')
@section('page-content')
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Karyawan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="/karyawan/{{ $karyawan->id }}" method="post">
        @method('put')
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}" placeholder="Nama..">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jenis kelamin</label>
            <input type="text" class="form-control" name="jenis_kelamin" value="{{ $karyawan->jenis_kelamin }}" placeholder="Jenis Kelamin..">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{ $karyawan->alamat }}" placeholder="Alamat..">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">No Telepon</label>
            <input type="text" class="form-control" name="no_telp" value="{{ $karyawan->no_telp }}" placeholder="No telepon..">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="text" class="form-control" name="bagian_kerja" value="{{ $karyawan->bagian_kerja }}" placeholder="Bagian Kerja..">
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->


  </div>
@endsection