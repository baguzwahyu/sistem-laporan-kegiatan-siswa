@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@extends('layouts.master')
@section('title','home')
@section('content')
    
<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>PROFILE SCHOOL</h2>
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

        <div class="col-md-6 col-sm-16 col-xs-12">
          <div class="product-image">
            <img src="{{ url('img/logo.png')}}" alt="..." />
          </div>
          <div class="product_gallery">
            <a>
              <img src="{{url('img/tlkm.jpg')}}" alt="..." />
            </a>
            <a>
              <img src="{{ url('img/pondok2.png')}}" alt="..." />
            </a>
            <a>
              <img src="{{ url('img/prakerin.jpg')}}" alt="..." />
            </a>
            <a>
            <img src="{{ url('img/logo-osis.png')}}" alt="..." />
            </a>
          </div>
        </div>

          <h3 class="prod_title">Visi&Misi SMK Telkom DU </h3>
          <h4>Visi</h4>
          <p>Menjadi Sekolah Menengah Kejuruan berstandar mutu Nasional/ Internasional yang mampu bersaing di tingkat regional maupun global berlandaskankan nilai-nilai keislaman.</p>
         <h4>Misi</h4>
           <p> 1. Menyelenggarakan pendidikan menengah kejuruan terpadu dengan pendidikan pondok pesantren dalam rangka mencetak sumber daya manusia yang beriman dan bertaqwa, profesional, kompeten, mandiri dan berkepribadian islami.</p>
           <p> 2. Meningkatkan mutu pendidikan berbasis pesantren/keagamaan sesuai dengan tuntutan masyarakat dan perkembangan ilmu pengetahuan dan teknologi. </p> 
          <p>  3. Melaksanakan pendidikan dan pelatihan dengan mengacu pada standar mutu nasional/internasional. </p>
           <p> 4.  Meningkatkan kerjasama dengan dunia usaha dan industri untuk menjamin adanya Link and Match dalam penyelenggaraan pendidikan dan latihan (diklat).</p> 
           <p> 5. Meningkatkan daya serap lulusan di dunia usaha dan industri atau melanjutkan ke perguruan tinggi yang relevan. </p>
          
          <br />

          
          <div class="product_social">
            <ul class="list-inline">
              <li><a href="#"><i class="fa fa-facebook-square"></i></a>
              </li>
              <li><a href="#"><i class="fa fa-twitter-square"></i></a>
              </li>
              <li><a href="#"><i class="fa fa-envelope-square"></i></a>
              </li>
              <li><a href="#"><i class="fa fa-rss-square"></i></a>
              </li>
            </ul>
          </div>

        </div>


        <div class="col-md-12">

          <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
              <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Home</a>
              </li>
              <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>
              </li>
              <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
              </li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                  synth. Cosby sweater eu banh mi, qui irure terr.</p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                  booth letterpress, commodo enim craft beer mlkshk aliquip</p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                  photo booth letterpress, commodo enim craft beer mlkshk </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection
@endpush