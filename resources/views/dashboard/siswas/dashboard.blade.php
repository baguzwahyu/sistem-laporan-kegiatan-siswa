@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@extends('layouts.master')
@section('content')


{{-- role="main" --}}

 
 <div class="row top_tiles">

  
  <a href="{{url('admin/kegiatan')}}">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="glyphicon glyphicon-edit"></i></div>
            <div class="count">84</div>
            <h3>Report</h3>
            <p>Melaporkan kegiatan keseharian prakerin.</p>
         </div>
        </div>
      </a>

        
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-book"></i></div>
            <div class="count">79</div>
            <h3>Tugas Magang</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="glyphicon glyphicon-sort-by-attributes"></i></div>
            <div class="count">204</div>
            <h3>New Sign ups</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
            <div class="count">143</div>
            <h3>New Sign ups</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>


        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-check-square-o"></i></div>
            <div class="count">211</div>
            <h3>New Sign ups</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        
 </div>
   

@endsection
@endpush