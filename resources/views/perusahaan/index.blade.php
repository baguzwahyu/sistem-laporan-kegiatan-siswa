@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@extends('layouts.master')
@section('title','Perusahaan')
@section('content')


<a class="btn btn-success" href="{{URL::to('perusahaan/create')}}">+ Perusahaan</a>
<div class="col-md-12 col-sm-12 col-xs-24">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Daftar Perusahaan <small color="blue">SMK TELEKOMUNIKASI DU</small></h2>
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
                          <th>Id</th>
                          <th>Pembimbing</th>
                          <th>Nama              </th>
                          <th>Action          </th>
                        </tr>
                      </thead>
        <tbody>
            @foreach($perusahaan as $prs)
                <tr>
                    <td>{{$prs->id}}</td>
                    <td>{{$prs->pembimbing->nama}}</td>
                    <td>{{$prs->nama}}</td>
                    
                    <td>
                    <form action="{{ route('perusahaan.destroy', $prs->id) }}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>Delete</button>
                        <a href="{{route('perusahaan.edit', $prs->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>
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