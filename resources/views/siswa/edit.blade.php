@extends('layouts.master') @section('title','siswa') @section('content')
                    
    <form action="{{route('siswa.update', $siswa ->id)}}" method="POST">
        {{ csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="form-group">
            <label>id</label>
            <input type="text" name="id" class="form-control" value="{{ $siswa->id }}"> 
        </div>

        <div class="form-group">
            <label>nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}"> 
        </div>

        <div class="form-group">
            <label>jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="{{ $siswa->jurusan }}"> 
        </div>

        <div class="form-group">
            <label>kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ $siswa->kelas }}"> 
        </div>

        <div class="form-group">
            <label>id guru</label>
            <input type="text" name="id guru" class="form-control" value="{{ $siswa->guru_id }}"> 
        </div>

        <div class="form-group">
            <label>id pembimbing</label>
            <input type="text" name="id nama" class="form-control" value="{{ $siswa->pembimbing_id }}"> 
        </div>

            <div class="form-group">
            <input type="submit" value="save" name="save" class="btn btn-warning">
        </div>
    </form>
 @endsection
 