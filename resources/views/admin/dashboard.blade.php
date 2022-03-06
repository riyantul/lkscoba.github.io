@extends('templates.index')
@section('page-content')
<div class="container-fluid">

    {{ auth()->user()->name }}
</div>
@endsection