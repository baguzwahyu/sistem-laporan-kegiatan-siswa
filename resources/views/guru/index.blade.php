@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@endpush
@extends('layouts.master')
@section('title','Guru')
@section('content')

<div class="col-md-12 col-sm-12 col-xs-24">
                <div class="x_panel">
                  <div class="x_title">
                  <a class="btn btn-success" href="{{URL::to('guru/create')}}">+ Guru</a>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th><h4># Id</h4></th>
                          <th><h4>Nama</h4></th>
                          <th><h4>Mata Pelajaran</h4></th>
                          <th><h4>Action</h4></th>
                        </tr>
                      </thead>
        <tbody>
            @foreach($guru as $key => $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->nama}}</td>
                    <td>{{$value->mapel}}</td>
                    <td>
                        <form action="{{ route('guru.destroy', $value->id) }}" method="post">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>Delete</button>
                            <a href="{{route('guru.edit', $value->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>
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