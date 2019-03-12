@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@extends('layouts.master')
@section('title','Kelompok')
@section('content')

<div class="col-md-12 col-sm-12 col-xs-24">
   
    <form action="/results" method="GET">   
      <div class="title_right">
          <div class="col-md-3 col-sm-3 col-xs-6 form-group pull-right top_search">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for..."  name="query">
                  <span class="input-group-btn">
           <button class="btn btn-default" type="button">Cari</button> 
          </span>
              </div>
          </div>
      </div> 
    </form>
    <a class="btn btn-success" href="{{URL::to('admin/kelompok/create')}}"><p class="glyphicon glyphicon-pencil"> Kelompok</p></a>  
    <div class="x_panel">
      <div class="x_title">
        <h2>Daftar Kelompok <small color="blue">SMK Telekomunikasi DU</small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr>
              <th><h4># Id</h4></th>
              <th><h4>Nama Kelompok</h4></th>
              <th><h4>Guru</h4></th>
              <th><h4>Pembimbing</h4></th>
              <th><h4>Action</h4></th>
              <th><h4>Detail</h4></th>
            </tr>
          </thead>
          <tbody>
            @foreach($kelompok as $key => $sin)
                <tr>
		    <th scope="row">{{$sin->id}}</th>
                    <td>{{$sin->nama_kelompok}}</td>
                    <td>{{$sin->guru->nama}}</td>
                    <td>{{$sin->pembimbing->nama}}</td>
                    <td>
                    <form action="{{ route('kelompok.destroy', $sin->id) }}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash">Delete</i></button>
                        <a href="{{route('kelompok.edit', $sin->id)}}" class="btn btn-warning"><i class="fa fa-edit">Edit</i></a>
                    </form>
                    </td>
                    <td>
                         <a href="{{route('kelompok.show',$sin->id)}}" class="btn btn-primary">view</a>
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