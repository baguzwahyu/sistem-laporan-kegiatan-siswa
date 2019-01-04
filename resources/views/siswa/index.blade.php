@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@endpush
@extends('layouts.master')
@section('title','SISWA')
@section('content')
<a class="btn btn-success" href="{{URL::to('siswa/create')}}">+ siswa</a>
<br>
<div class="col-md-12 col-sm-12 col-xs-24">
    <div class="x_panel">
      <div class="x_title">
        <h2>Daftar Siswa <small color="blue">MAGANG</small></h2>
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
              <th>ID GURU</th>
              <th>ID PEMBIMBING</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach($siswa as $key => $value)
                <tr>
		    <th scope="row">{{$value->id}}</th>
                    <td>{{$value->nama}}</td>
                    <td>{{$value->jurusan}}</td>
                    <td>{{$value->kelas}}</td>
                    <td>{{$value->guru_id}}</td>
                    <td>{{$value->pembimbing_id}}</td>                    
                    <td>
                    <form action="{{ route('siswa.destroy', $value->id) }}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                        <a href="{{route('siswa.edit', $value->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    </form>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>
@endsection
@push('scripts')
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#tabel-data').DataTable();
        });
    </script>
@endpush