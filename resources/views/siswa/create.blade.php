@extends('layouts.master') @section('title','siswa') @section('content')
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

<form action="{{route('siswa.store')}}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}

<div class="form-row">
  <div class="form-group">
        <label>id</label>
    </div>
  <br>
    <div class="form-group">
           <label>nama</label>
           <input type="text" name="nama" id="nama">
    </div>

    <div class="form-group">
           <label>jurusan</label>
           <input type="text" name="jurusan" id="jurusan">
    </div>

    <div class="form-group">
           <label>kelas</label>
           <input type="text" name="kelas" id="kelas">
    </div>

    <div class="form-group">
           <label>guru_id</label>
           <input type="text" name="guru_id" id="guru_id">
    </div>

    <div class="form-group">
           <label>pembimbing_id</label>
           <input type="text" name="pembimbing_id" id="pembimbing_id">
    </div>
  </div>
<div class="form-group col-md-12">
  <button type="submit" class="btn btn-primary" value="save">Save</button>
</div>
</form>
@endsection