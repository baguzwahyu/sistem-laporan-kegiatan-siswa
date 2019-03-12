@extends('layouts.master') @section('title','') @section('content')

 <!-- Ion.RangeSlider -->
 <link href="{{ asset('vendors/normalize-css/normalize.css')}}" rel="stylesheet">
 <link href="{{ asset('vendors/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
 <link href="{{ asset('vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
 <!-- Bootstrap Colorpicker -->
 <link href="{{ asset('vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">

 <link href="{{ asset('vendors/cropper/dist/cropper.min.css')}}" rel="stylesheet">
                    

 <form class="form-horizontal form-label-left" method="POST" action="{{route('view_update', $kelompok ->id)}}" >
  {{ csrf_field()}}
<input type="hidden" name="_method" value="PATCH">
        <div class="col-md-12 col-sm-24 col-xs-24">
          <div class="x_panel">
            <div class="x_title">
              <h2>Detail Kelompok</h2>
              <ul class="nav navbar-right panel_toolbox">
              <a class="btn btn-success" href="#"><p class="glyphicon glyphicon">Tambahkan Anggota</p></a>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
             
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Kelompok</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" class="form-control"  value= "{{$kelompok->nama_kelompok }}" name="nama_kelompok" readonly>
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                </div>
               
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">guru</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" class="form-control"  value= "{{$kelompok->guru->nama}}" name="guru_id" readonly>
               </div>
             </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pembimbing</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" class="form-control"  value= "{{$kelompok->pembimbing->nama}}" name="pembimbing_id" readonly>
                </div>
              </div>
            </div>
          </div> 
                <div class="ln_solid"></div>
             
            </div>
          </div>
      
      
      </form>

      <div class="col-md-12 col-sm-12 col-xs-24">
   
   <form action="/results" method="GET">   
     <div class="title_right">
         <div class="col-md-3 col-sm-3 col-xs-6 form-group pull-right top_search">
         </div>
     </div> 
   </form>
   <div class="x_panel">
     <div class="x_content">

       <table class="table table-bordered jambo_table">
         <thead>
           <tr>
             <th><h4>No</h4></th>
             <th><h4>Anggota Kelompok</h4></th>
             <th><h4>Kelas</h4></th>
             <th><h4>Jurusan</h4></th>
             <th><h4>Alamat</h4></th>
           </tr>
         </thead>
         <tbody>
        @foreach ($collection as $item)
              <tr>
                   <td>1</td>
                   <td>M Nuzulul Kiromi</td>
                   <td>XI RPL 1</td>
                   <td>Rekayasa Perangkat Lunak</td>
                   <td>Gedangan, Sidoarjo</td>
               </tr>
               @endforeach


               {{-- <tr>
                   <td>2</td>
                   <td>Hisyam Rifqi</td>
                   <td>XI RPL 1</td>
                   <td>Rekayasa Perangkat Lunak</td>
                   <td>Tulung Agung</td>
               </tr>
               <tr>
                   <td>3</td>
                   <td>Arya Firman</td>
                   <td>XI RPL 1</td>
                   <td>Rekayasa Perangkat Lunak</td>
                   <td>Sidoarjo</td>
               </tr>
               <tr>
                   <td>4</td>
                   <td>Irgi Fahrias</td>
                   <td>XI RPL 1</td>
                   <td>Rekayasa Perangkat Lunak</td>
                   <td>Jombang</td>
               </tr> --}}


         </tbody>
       </table>
     </div>
     </div>
   </div>
 </div>
 </form>
 @endsection
 