@extends('layouts.app') @section('title','Product') @section('content')
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


<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group col-md-12">
    <label for="ProductName">Nama</label>
    <input type="text" class="form-control" name="ProductName">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label>Supplier</label>
            <select class="form-control" name="suppliers_id">
                @foreach($suppliers as $row)
                <option value="{{$row->id}}">{{$row->CompanyName}}</option>
                @endforeach
            </select>
    </div>
    <div class="form-group col-md-6">
        <label>Category</label>
            <select class="form-control" name="categories_id">
                @foreach($categorys as $row)
                <option value="{{$row->id}}">{{$row->CategoryName}}</option>
                @endforeach
            </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="">UnitPrice</label>
        <input type="text" class="form-control" name="UnitPrice">
    </div>
    <div class="form-group col-md-4">
      <label for="">Stock</label>
      <input type="text" class="form-control" name="UnitsInStock">
    </div>
    <div class="form-group col-md-4">
      <label for="">Size</label>
      <input type="text" class="form-control" name="Size">
    </div>
  </div>
  <div class="form-group col-md-12">
    <label for="">Picture</label>
    <input type="file" class="form-control" name="Picture">
  </div>
  <div class="form-group col-md-12">
    <label for="">Description</label>
    <textarea class="form-control" rows="3" name="ProductDescription"></textarea>
  </div>
<div class="form-group col-md-12">
  <button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
@endsection