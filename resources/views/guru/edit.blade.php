
@extends('layouts.master') @section('title','Guru') @section('content')

    <form action="{{route('guru.update', $guru->id)}}" method="POST">
        {{ csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="clearfix"></div>
            <div class="row">
              <div class="col-md col-sm-12 col-xs-24 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Guru <small>different form elements</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    
        <div class="form-group">
            <label>Nama *</label>
            <input type="text" name="nama" class="form-control" value="{{ $guru->nama }}"> 
            <label>Mata Pelajaran *</label>
            <input type="text" name="mapel" class="form-control" value="{{ $guru->mapel }}"> 
        </div>
            <div class="ln_solid"></div>
            <div class="col-md-12 col-sm-12 col-xs-12 ">
            <a class="btn btn-warning" href="{{url('guru')}}">Cancel</a>
            <input type="submit" value="save" name="save"  class="btn btn-primary">
        </div>
    </form>
    
 @endsection
 