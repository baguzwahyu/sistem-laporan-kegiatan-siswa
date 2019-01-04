<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@extends('layouts.master')
@section('title','Guru')
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


<form action="{{route('guru.store')}}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="clearfix"></div>
            <div class="row">
               <div class="col-md-24 col-sm-24 col-xs-24">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Guru <small>different form elements</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    
    <div class="form-group" >
        <label><br/></label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" class="form-control " placeholder="Nama *" name="nama" id="nama">
          </div>
   </div>      <br>
   
    <div class="form-group" > 
        <label > <br/></label>
          <div class="col-md-6 col-sm-6 col-xs-12"> 
            <input type="text" class="form-control" placeholder="Mata Pelajaran *" name="mapel" id="mapel"> 
  </div>
  </div>
           
  
  <div class="ln_solid"></div>
  <div class="form-group">
  <div class="col-md-12 col-sm-12 col-xs-12 ">
  <a class="btn btn-warning" href="{{url('guru')}}">Cancel</a>
  <button type="submit" class="btn btn-success" value="save">Add it</button>
</div>
</div>

</form>
@endsection