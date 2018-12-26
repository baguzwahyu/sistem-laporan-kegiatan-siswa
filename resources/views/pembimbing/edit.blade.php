@extends('layouts.master') @section('title','Pembimbing') @section('content')
                    
    <form action="{{route('pembimbing.update', $pembimbing ->id)}}" method="POST">
        {{ csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="form-group">
            <label>id</label>
            <input type="text" name="id" class="form-control" value="{{ $pembimbing->id }}"> 
        </div>

        <div class="form-group">
            <label>nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $pembimbing->nama }}"> 
        </div>
            <div class="form-group">
            <input type="submit" value="save" name="save" class="btn btn-warning">
        </div>
    </form>
 @endsection
 