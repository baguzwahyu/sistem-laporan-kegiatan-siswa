@extends('layouts.master') @section('title','Pembimbing') @section('content')
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

      <form class="form-horizontal form-label-left" action="{{route('pembimbing.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
       
        <div class="col-md-12 col-sm-24 col-xs-24">
          <div class="x_panel">
            <div class="x_title">
              <h2>Tambah Pembimbing</h2>
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
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">nama</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" id="nama" name="nama">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                </div>

                <div class="form-group" >
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">alamat</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" id="alamat" name="alamat">
                    <span class="fa fa-map form-control-feedback right" aria-hidden="true"></span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">telephone</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" id="telephone" name="telephone">
                    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">bagian</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" id="bagian" name="bagian">
                    <span class="fa fa-book form-control-feedback right" aria-hidden="true"></span>
                  </div>
                </div>

                <div class="form-group">
                  <label  for="email" class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{ old('email') }}" name="email">
                    @if ($errors->has('email'))
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('email') }}</strong>
                         </span>
                     @endif
                  </div>
                </div>

                <div class="form-group">
                  <label  for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password"  name="password">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label  for="password_confirm" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password" class="form-control" id="password_confirm" name="password_confirmation">
  
                  </div>
                </div>
             
                <div class="ln_solid"></div>
      
                <div class="form-group">
                  <div class="col-md-9 col-md-offset-3">
                  <a class="btn btn-primary" href="{{url('admin/pembimbing')}}">Cancel</a>
                    <button type="submit" value="save" class="btn btn-success">save</button>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </form>


@endsection