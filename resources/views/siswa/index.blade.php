@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@extends('layouts.master')
@section('title','SISWA')
@section('content')
<a class="btn btn-success fa fa-user" href="{{URL::to('siswa/create')}}">+</a>
<div class="col-md-12 col-sm-12 col-xs-24">
    <form action="/results" method="GET">                 
      <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for..."  name="query">
                  <span class="input-group-btn">
           <button class="btn btn-default" type="button">cari</button> 
          </span>
              </div>
          </div>
      </div> 
    </form>
    <div class="x_panel">
      <div class="x_title">
        <h2>Daftar Siswa <small color="blue">Magang</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>NAMA</th>
              <th>JURUSAN</th>
              <th>KELAS</th>
              <th>GURU</th>
              <th>PEMBIMBING</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach($siswa as $key => $sin)
                <tr>
		    <th scope="row">{{$sin->id}}</th>
                    <td>{{$sin->nama}}</td>                 
                    <td>{{$sin->jurusan}}</td>
                    <td>{{$sin->kelas}}</td>
                    <td>{{$sin->guru->nama}}</td>
                    <td>{{$sin->pembimbing->nama}}</td>
                    <td>
                    <form action="{{ route('siswa.destroy', $sin->id) }}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                        <a href="{{route('siswa.edit', $sin->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    </form>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>
@endsection
@endpush