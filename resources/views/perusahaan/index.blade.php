@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@endpush
@extends('layouts.master')
@section('title','Perusahaan')
@section('content')
<div class="col-md-12 col-sm-12 col-xs-24">
                <div class="x_panel">
                  <div class="x_title">
                    <a class="btn btn-success" href="{{URL::to('perusahaan/create')}}">+&nbsp;Tambah Perusahaan</a>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Kode Pembimbing   </th>
                          <th>Nama              </th>
                          <th>Action          </th>
                        </tr>
                      </thead>
        <tbody>
            @foreach($perusahaan as $key => $prs)
                <tr>
                    <td>{{$prs->id}}</td>
                    <td>{{$prs->kodepembimbing}}</td>
                    <td>{{$prs->nama}}</td>
                    
                    <td>
                    <form action="{{ route('perusahaan.destroy', $prs->id) }}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>Delete</button>
                        <a href="{{route('perusahaan.edit', $prs->id)}}" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a>
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