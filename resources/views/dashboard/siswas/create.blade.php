@extends('layouts.master') @section('title','Kegiatan') @section('content')
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


<form action="{{route('kegiatan.store')}}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
  {{ csrf_field() }}
  <div class="col-md-12 col-sm-24 col-xs-24">
    <div class="x_panel">
      <div class="x_title">
        <h2>Isi Kegiatan</h2>
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

       
              <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}" readonly>

        <div class="form-group" > 
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->name }}" readonly>
              <span class="fa fa-pencil form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div> 
       
          <div class="form-group" >
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Bidang Pekerjaan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" class="form-control" id="bidang_pekerjaan" name="bidang_pekerjaan">
              <span class="fa fa-pencil form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>
         
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Uraian Pekerjaan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" class="form-control" id="uraian_pekerjaan" name="uraian_pekerjaan">
              <span class="fa fa-book form-control-feedback right" aria-hidden="true"></span>
            </div>
          </div>

          
          <div class="ln_solid"></div>

          <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
            <a class="btn btn-primary" href="{{url('admin/kegiatan')}}">Cancel</a>
              <button type="submit" value="save" class="btn btn-success">save</button>
            </div>
          </div>
      </div>
    </div>
  </div>
</form>
@endsection