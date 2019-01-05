@extends('layouts.master') @section('title','Tabel Perusahaan') @section('content')
                    
    <form action="{{route('perusahaan.update', $perusahaan ->id)}}" method="POST">
        {{ csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Perusahaan :</h2>
                    
                    <div class="clearfix"></div>
                    <div class="form-row">
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodepembimbing">Kode Pembimbing <span>*</span>
                        </label>
                          <input type="text" name="kodepembimbing" id="kodepembimbing" class="form-control" value="{{$perusahaan->kodepembimbing}}">
                      </div><br> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span>*</span>
                        </label>
                          <input type="text" name="nama" id="nama" class="form-control"  value="{{$perusahaan->nama}}">
                      </div><br>
                      
                        <div class="form-group col-md-12">
                      <button class="btn btn-warning" href="index.blade.php">Cancel</button> 
                        <input type="submit" value="Save" name="Save" class="btn btn-success">
                      </div>
                    </div>

    </form>
 @endsection
 