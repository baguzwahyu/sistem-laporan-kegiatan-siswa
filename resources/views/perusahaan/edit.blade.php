@extends('layouts.master') @section('title','Tabel Perusahaan') @section('content')
                    
    <form action="{{route('perusahaan.update', $perusahaan ->id)}}" method="POST">
        {{ csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Pembimbing </label>
                  <select class="form-control" name="pembimbing_id" >
                    @foreach ($pembimbing as $post)
                   <option value="{{ $post->id }}">{{ $post->nama }}</option>   
                    @endforeach
                 </select>
                </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama 
                </label>
                  <input type="text" name="nama" id="nama" class="form-control"  value="{{$perusahaan->nama}}">
              </div>
              
                <div class="form-group col-md-12">
              <button class="btn btn-warning" href="index.blade.php">Cancel</button> 
               <button type="submit" value="save" class="btn btn-success">save</button>
              </div>
            </div>

          </div>
        </div>
    </form>
 @endsection
 