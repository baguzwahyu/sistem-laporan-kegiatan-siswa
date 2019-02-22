@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@extends('layouts.master')
@section('title','Guru')
@section('content')



<div class="col-md-12 col-sm-12 col-xs-24">
        <form action="/rest" method="GET">   
            <div class="title_right">
                <div class="col-md-3 col-sm-3 col-xs-6 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for..."  name="qr">
                        <span class="input-group-btn">
                <button class="btn btn-default" type="button">cari</button> 
                </span>
                    </div>
                </div>
            </div> 
          </form>   
    <a class="btn btn-success" href="{{URL::to('admin/guru/create')}}">+ Guru</a>
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Daftar Guru <small color="blue">SMK Telekomunikasi DU </small></h2>
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
                          <th><h4># Id</h4></th>
                          <th><h4>Nama</h4></th>
                          <th><h4>Alamat</h4></th>
                          <th><h4>Mata Pelajaran</h4></th>
                          <th><h4>Action</h4></th>
                        </tr>
                      </thead>
        <tbody>
            @foreach($guru as $key => $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->nama}}</td>
                    <td>{{$row->alamat}}</td>
                    <td>{{$row->mapel}}</td>
                    <td>
                        <form action="{{ route('guru.destroy', $row->id) }}" method="post">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>Delete</button>
                            <a href="{{route('guru.edit', $row->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>
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