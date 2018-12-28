@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@endpush
@extends('layouts.master')
@section('title','Dashboard')
@section('content')
<a class="btn btn-success" href="{{URL::to('siswa/create')}}">Tambah siswa</a>
    <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID SISWA</th>
                <th>NAMA SISWA</th>
                <th>JURUSAN</th>
                <th>KELAS</th>
                <th>ID GURU</th>
                <th>ID PEMBIMBING<th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $key => $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->nama}}</td>
                    <td>{{$value->jurusan}}</td>
                    <td>{{$value->kelas}}</td>
                    <td>{{$value->guru_id}}</td>
                    <td>{{$value->pembimbing_id}}</td>
                    
                    <td>
                    <form action="{{ route('siswa.destroy', $value->id) }}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>Delete</button>
                        <a href="{{route('siswa.edit', $value->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>
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