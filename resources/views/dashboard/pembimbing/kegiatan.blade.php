@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@extends('layouts.master')
@section('title','Kegiatan')
@section('content')



 
<div class="col-md-12 col-sm-12 col-xs-24">
   
    
    <div class="x_panel">
      <div class="x_title">
        <h2>Kegiatan <small color="blue">Magang</small></h2>
        <ul class="nav navbar-right panel_toolbox">
       
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Tgl Pelaksanaan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($kegiatan as $key => $sin)
                <tr>
		    <th scope="row">{{$sin->id}}</th>
                    <td>{{$sin->user->name}}</td>   
                    <td>{{ $sin->created_at->toFormattedDateString() }}</td>
                   
                   <td>
                   <a href="{{route('kegiatan.show',$sin->id)}}" class="btn btn-success">view</a>
                   </td>
                <!-- <td>
              @if ($sin->status=='1')
                <a href="{{ route('kegiatan.not.admin',['id'=> $sin->id])}}" class="btn btn-xs btn-danger">batalkan</a>
                @else
                <a href="{{ route('kegiatan.admin',['id'=> $sin->id])}}" class="btn btn-xs btn-success">setujui</a>
              @endif
                </td> -->
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