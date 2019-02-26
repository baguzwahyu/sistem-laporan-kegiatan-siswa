@extends('layouts.master')@section('title','Perusahaan') @section('content')
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

<form class="form-horizontal form-label-left" action="{{route('perusahaan.store')}}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}

              <div class="col-md-12 col-sm-24 col-xs-24">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Perusahaan :</h2>
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
                   
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama" id="nama" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Alamat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="alamat" id="alamat" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Telephone</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="telephone" id="telephone" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="email" id="email" class="form-control">
                      </div>
                    </div>

                      

              <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-9 col-md-offset-3">
                    <a class="btn btn-warning" href="{{url('admin/perusahaan')}}">Cancel</a>
                    <button type="submit" value="save" class="btn btn-success">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </form>
@endsection