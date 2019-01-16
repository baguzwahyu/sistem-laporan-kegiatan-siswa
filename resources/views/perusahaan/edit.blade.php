@extends('layouts.master') @section('title','Perusahaan') @section('content')
<form class="form-horizontal form-label-left" method="POST" action="{{route('perusahaan.update', $perusahaan ->id)}}" >
    {{ csrf_field()}}
  <input type="hidden" name="_method" value="PATCH">
 <div class="col-md-12 col-sm-24 col-xs-24">
    <div class="x_panel">
      <div class="x_title">
        <h2>Edit Perusahaan</h2>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Kode Pembimbing </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="kodepembimbing" id="kodepembimbing" class="form-control" value="{{$perusahaan->pembimbing_id}}">
                        </div>
                    </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name="nama" id="nama" class="form-control" value="{{$perusahaan->nama}}">
                        </div>
                      </div>
                      
                        <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                        <a class="btn btn-primary" href="{{url('perusahaan')}}">Cancel</a>
                          <button type="submit" value="save" class="btn btn-success">save</button>
                        </div>
                      </div>
                    </div>
                   </div>
                    

    </form>
 @endsection
 