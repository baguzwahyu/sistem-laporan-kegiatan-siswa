@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@extends('layouts.master')
@section('title','Kegiatan')
@section('content')



 
<div class="col-md-12 col-sm-12 col-xs-24">
   
    
    <a class="btn btn-success" href="{{URL::to('admin/kegiatan/create')}}">+kegiatan</a>  
    <div class="x_panel">
      <div class="x_title">
        <h2>Kegiatan <small color="blue">Magang</small></h2>
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
              <th>No</th>
              <th>Bidang Pekerjaan</th>
              <th>Uraian Pekerjaan</th>
              <th>Tgl Pelaksanaan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($kegiatan as $key => $sin)
                <tr>
		    <th scope="row">{{$sin->id}}</th>
                    <td>{{$sin->bidang_pekerjaan}}</td>                 
                    <td>{{$sin->uraian_pekerjaan}}</td>
                    <td>{{ $sin->created_at->toFormattedDateString() }}</td>
                    <td>
                    <form action="{{ route('kegiatan.destroy', $sin->id) }}" method="post">
                        {{ csrf_field() }}
                        
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