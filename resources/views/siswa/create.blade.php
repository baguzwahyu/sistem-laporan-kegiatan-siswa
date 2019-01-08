@extends('layouts.master')
@section('title','siswa') 
@section('content')

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
      <form class="form-horizontal form-label-left" action="{{route('siswa.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
       
        <div class="col-md-12 col-sm-24 col-xs-24">
          <div class="x_panel">
            <div class="x_title">
              <h2>Tambah Siswa</h2>
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
                  <label class="control-label col-md-3 col-sm-3 col-xs-3">nama</label>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text" class="form-control" id="nama" name="nama">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3">jurusan</label>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text" class="form-control" id="jurusan" name="jurusan">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3">kelas</label>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text" class="form-control" id="kelas" name="kelas">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                </div>
               
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">guru</label>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <select class="form-control" name="guru_id" >
                    @foreach ($gurus as $guru)
                  <option value="{{$guru->id}}">{{$guru->nama}}</option>
                    @endforeach
                    
                </select>
                </div>
              </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3">pembimbing_id</label>
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <select class="form-control" name="pembimbing_id" >
                          @foreach ($pembimbings as $pembimbing)
                      <option value="{{$pembimbing->id}}">{{$pembimbing->nama}}</option>
                          @endforeach
                    </select>
              </div>
          </div> 
                <div class="ln_solid"></div>
      
                <div class="form-group">
                  <div class="col-md-9 col-md-offset-3">
                    <a class="btn btn-primary" href="{{url('siswa')}}">Cancel</a>
                    <button type="submit" value="save" class="btn btn-success">save</button>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </form>

 <!-- validator -->
 <script src="../vendors/validator/validator.js"></script>
@endsection