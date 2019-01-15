@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

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
            @foreach($guru as $key => $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->nama}}</td>
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

@endsection

@endpush