@extends('layouts.master') @section('title','Kegiatan') @section('content')
<form class="form-horizontal form-label-left" method="POST" action="{{route('kegiatan.update', $kegiatan ->id)}}" >
    {{ csrf_field()}}
  <input type="hidden" name="_method" value="PATCH">
 <div class="col-md-12 col-sm-24 col-xs-24">
    <div class="x_panel">
      <div class="x_title">
        <h2>Edit Kegiatan</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">setting 1</a></li>
                <li><a href="#">setting 2</a></li>
              </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content"></div>
        <br />


        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">bidang pekerjaan</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" class="form-control" name="bidang_pekerjaan" value="{{$kegiatan->bidang_pekerjaan}}">
            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
        </div>
        </div> 

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">uraian pekerjaan</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" class="form-control"  name="uraian_pekerjaan" value="{{$kegiatan->uraian_pekerjaan}}">
            <span class="fa fa-book form-control-feedback right" aria-hidden="true"></span>
          </div>          
        </div>

        
        <div class="ln_solid"></div>

        <div class="form-group">
          <div class="col-md-9 col-md-offset-3">
          <button class="btn btn-primary" href="{{url('kegiatan')}}">Cancel</button>
            <button type="submit" value="save" class="btn btn-success">Save changes</button>
          </div>
        </div>
    </div>
 </div>
</form>

 @endsection