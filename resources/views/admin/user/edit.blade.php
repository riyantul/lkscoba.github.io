@extends('templates.index')
@section('page-content')
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Form Edit {{ $user->name }}</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="/user/{{ $user->id }}" method="post">
        @method('put')
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="name" class="form-control" name="name" value="{{ old('name',$user->name) }}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email', $user->email )}}">
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