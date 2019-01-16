@extends('layouts.master') @section('title','Guru') @section('content')
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    @if (\Session::get('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
      @endif

      <form class="form-horizontal form-label-left" action="{{route('guru.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
       
        <div class="col-md-12 col-sm-24 col-xs-24">
          <div class="x_panel">
            <div class="x_title">
              <h2>Tambah Guru</h2>
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
              <br />
              
             
                <div class="form-group" >
                  <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama *</label>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text" class="form-control" id="nama" name="nama">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3">Mata Pelajaran *</label>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text" class="form-control" id="mapel" name="mapel">
                    <span class="fa fa-book form-control-feedback right" aria-hidden="true"></span>
                  </div>
                </div>
                
             
                <div class="ln_solid"></div>
                <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                <a class="btn btn-warning" href="{{url('guru')}}">Cancel</a>
                <button type="submit" class="btn btn-success" value="save">Add it</button>
              </div>
              </div>
            </div>
          </div>
        </div>
      </form>


@endsection