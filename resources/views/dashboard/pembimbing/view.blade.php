@extends('layouts.master') @section('title','Kegiatan') @section('content')
<form class="form-horizontal form-label-left" method="POST" action="{{route('kegiatan.update', $kegiatan ->id)}}" >
    {{ csrf_field()}}
  <input type="hidden" name="_method" value="PATCH">
 <div class="col-md-12 col-sm-24 col-xs-24">
    <div class="x_panel">
      <div class="x_title">
        <h2>{{ Auth::user()->name }}</h2>
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
          <label class="control-label col-md-1,5 ">Bidang pekerjaan :</label>
          <div class="col-md-13 col-sm-13 col-xs-13">
          <input type="text" class="form-control" name="bidang_pekerjaan" value="{{$kegiatan->bidang_pekerjaan}}" readonly>
        </div>
        </div> 

        <div class="form-group">
          <label class="control-label col-md-1,5">Uraian pekerjaan :</label>
            <input type="text" class="form-control"  name="uraian_pekerjaan" value="{{$kegiatan->uraian_pekerjaan}}" readonly>
        </div>

        
        <div class="ln_solid"></div>

        <div class="pull-left">
            <div class="col-md-9 col-md-offset-3">
            <a class="btn btn-primary" href="{{url('admin/index_pembimbing')}}">Cancel</a>
            </div>
        </div>
        @if ($kegiatan->status=='1')
        <div class="pull-left">
            <div class="col-md-9 col-md-offset-3">
            <a href="{{ route('kegiatan.not.admin',['id'=> $kegiatan->id])}}" class="btn btn-danger">batalkan</a>
            </div>
        </div>
        @else
        <div class="pull-left">
            <div class="col-md-9 col-md-offset-3">
            <a href="{{ route('kegiatan.admin',['id'=> $kegiatan->id])}}" class="btn btn-success">setujui</a>
            </div>
        </div>
        @endif
    </div>
 </div>
</form>

 @endsection