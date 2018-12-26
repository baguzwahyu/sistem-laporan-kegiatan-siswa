@extends('layouts.master') @section('title','Pembimbing') @section('content')
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

<form action="{{route('pembimbing.store')}}" method="POST" enctype="multipart/form-data">
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
  </div>
<div class="form-group col-md-12">
  <button type="submit" class="btn btn-primary" value="save">Save</button>
</div>
</form>
@endsection