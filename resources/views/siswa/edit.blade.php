@extends('layouts.master') @section('title','siswa') @section('content')

 <!-- Ion.RangeSlider -->
 <link href="{{ asset('vendors/normalize-css/normalize.css')}}" rel="stylesheet">
 <link href="{{ asset('vendors/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
 <link href="{{ asset('vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
 <!-- Bootstrap Colorpicker -->
 <link href="{{ asset('vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">

 <link href="{{ asset('vendors/cropper/dist/cropper.min.css')}}" rel="stylesheet">
                    

 <form class="form-horizontal form-label-left" method="POST" action="{{route('siswa.update', $siswa ->id)}}" >
  {{ csrf_field()}}
<input type="hidden" name="_method" value="PATCH">
        <div class="col-md-12 col-sm-24 col-xs-24">
          <div class="x_panel">
            <div class="x_title">
              <h2>Edit Siswa</h2>
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
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">nama</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" class="form-control"  value= "{{$siswa->nama }}" name="nama">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" class="form-control" name="alamat" value="{{$siswa->alamat}}">
                    <span class="fa fa-map form-control-feedback right" aria-hidden="true"></span>
                </div>
                </div>
        
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">jurusan</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control"  value="{{$siswa->jurusan }}" name="jurusan">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">kelas</label>
                  <div class="col-md-6 col-sm-9 col-xs-12">
                    <input type="text" class="form-control"  value="{{$siswa->kelas }}" name="kelas">
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">guru</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                   
                <select class="form-control" name="guru_id" >
                  @foreach ($guru as $row)
                <option value="{{ $row->id }}">{{ $row->nama }}</option>    
                  @endforeach  
                  
                </select>
               </div>
             </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pembimbing</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" name="pembimbing_id" >
                     @foreach ($pembimbing as $post)
                    <option value="{{ $post->id }}">{{ $post->nama }}</option>   
                     @endforeach
                      
                     
                  </select>
                </div>
              </div>
            </div>
          </div> 
                <div class="ln_solid"></div>
      
                <div class="form-group">
                  <div class="col-md-9 col-md-offset-3">
                    <button class="btn btn-primary" href="{{url('admin/siswa')}}">Cancel</button>
                    <button type="submit" value="save" class="btn btn-success">Save changes</button>
                  </div>
                </div>
             
            </div>
          </div>
      
      
      </form>
 @endsection
 