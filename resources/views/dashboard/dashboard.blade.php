@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@extends('layouts.master')
@section('content')


{{-- role="main" --}}

 
 <div class="row top_tiles">

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-pencil"></i></div>
            <div class="count">179</div>
            <h3>kegiatan</h3>
            
          </div>
        </div>

        <a href="{{url('siswa')}}">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-book"></i></div>
            <div class="count">179</div>
            <h3>Tugas Magang</h3>
          </div>
        </div></a>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
            <div class="count">179</div>
            <h3>New Sign ups</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
            <div class="count">179</div>
            <h3>New Sign ups</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>


        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-check-square-o"></i></div>
            <div class="count">179</div>
            <h3>New Sign ups</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        
 </div>
   

@endsection
@endpush