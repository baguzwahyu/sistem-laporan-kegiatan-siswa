@extends('layouts.master') @section('title','Tabel Perusahaan') @section('content')
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


<form action="{{route('perusahaan.store')}}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}

  <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Perusahaan :</h2>
                    
                    <div class="clearfix"></div>
                    <div class="form-row">
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodepembimbing">Kode Pembimbing<span>*</span>
                        </label>
                          <input type="text" name="kodepembimbing" id="kodepembimbing" class="form-control">
                      </div><br>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Nama">Nama<span>*</span>
                        </label>
                          <input type="text" name="nama" id="nama" class="form-control">
                      </div><br>
                    <br>
                    <div class="form-group col-md-12">
                    <a class="btn btn-warning" href="{{url('perusahaan')}}">Cancel</a>
                        <button type="submit" class="btn btn-success" value="save">Save</button>
                    </div>
</form>
@endsection