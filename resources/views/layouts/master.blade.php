<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ url('img/logo.png') }}" type="image/ico" />

    <title>| SMK TELKOM DU | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

     
   
    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css')}}" rel="stylesheet">
  </head>
 
<body class="nav-md" >
<div class="container body">

    <div class="main_container">

    {{--top nav--}}
    @include('layouts.partials.sidebar')
    {{--/topnav--}}

    <!-- top navigation -->
    @include('layouts.partials.header1')
    <!-- /top navigation -->
    
        <!-- page content -->
        <div class="right_col" role="main" >
            <div class="page-title">
                <div class="title_left">
                    <h3>@yield('title')</h3>
                </div>
               
            </div>
            <div class="clearfix"></div>
            <div class="data-pjax">
                @yield('content')
            </div>
        </div>
        <!-- /page content -->
       
        <!-- footer content -->
        @include('layouts.partials.footercontent') 
        <!-- footer button -->
@include('layouts.partials.menubutton')
    <!-- /footer content -->
  
    </div>
</div>

    <!-- jQuery -->
    <script src="{{URL('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{URL('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{URL('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{URL('vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{URL('vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{URL('vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{URL('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}/"></script>
    <!-- iCheck -->
    <script src="{{URL('vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{URL('vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{URL('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{URL('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{URL('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{URL('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{URL('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{URL('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{URL('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{URL('vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{URL('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{URL('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{URL('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{URL('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{URL('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <script src="{{ url('vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{ url('vendors/morris.js/morris.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{URL('build/js/custom.min.js')}}"></script>

@stack('scripts')

</body>
</html>