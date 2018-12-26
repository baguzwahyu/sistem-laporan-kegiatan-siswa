@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@endpush
@extends('layouts.master')
@section('title','Dashboard')
@section('content')
<a class="btn btn-success" href="{{URL::to('pembimbing/create')}}">Tambah Pembimbing</a>
    <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID PEMBIMBING</th>
                <th>NAMA PEMBIMBING</th>
                <th>Action<th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembimbing as $key => $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->nama}}</td>
                    <td>
                            <a href="{{URL::to('pembimbing/' .$pembimbing->id. '/edit')}}" class="btn btn-warning">edit</a>
                              <form action="{{ url('pembimbing',[$pembimbing->id])}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" value="DELETE" class="btn btn-danger">
                              </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
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