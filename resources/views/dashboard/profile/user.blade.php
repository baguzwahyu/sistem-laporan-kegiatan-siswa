@push('header-scripts')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@extends('layouts.master')
@section('content')

 <!-- page content -->
 
      
      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>User Report <small>Activity report</small></h2>
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
              <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                <div class="profile_img">
                  <div id="crop-avatar">
                    <!-- Current avatar -->
                    @if (Auth::user()->photo!='demo')
                    <img class="img-responsive avatar-view" src="{{ url(auth::user()->photo) }}"  title="Change the avatar">
                    @else
                    <img class="img-responsive avatar-view" src="{{ url('img/avatar.jpg') }}"  title="Change the avatar">
                    @endif
                 
                  </div>
                </div>
                <h3>{{auth::user()->name}}</h3>

                <ul class="list-unstyled user_data">
                  <li><i class="fa fa-map-marker user-profile-icon"></i> {{ auth::user()->alamat}}
                  </li>

                  @if (auth::user()->group_id=='1'||auth::user()->group_id=='2')
                  <li>
                    <i class="fa fa-briefcase user-profile-icon"></i> Administrator
                  </li>    
                  @elseif(auth::user()->group_id=='3')
                  <li>
                    <i class="fa fa-briefcase user-profile-icon"></i> Guru
                  </li>    
                  @elseif(auth::user()->group_id=='4')
                  <li>
                    <i class="fa fa-briefcase user-profile-icon"></i> Pembimbing
                  </li>    
                  @else
                  <li>
                    <i class="fa fa-briefcase user-profile-icon"></i> Siswa
                  </li>    
                  @endif
                  <li class="m-top-xs">
                    <i class="fa fa-external-link user-profile-icon"></i>
                    <a href="http://www.kimlabs.com/profile/" target="_blank">{{ auth::user()->email }}</a>
                  </li>
                </ul>

                <form class="form-horizontal form-label-left" method="POST" action="{{route('user.update',auth::user()->id)}}" >
                  @csrf
                  <input type="hidden" name="_method" value="PATCH">
                  
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Edit profile
                </button>
               
              
               
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="col-md-12 col-sm-24 col-xs-24">
                          <div class="x_panel">
                          
                              <div class="form-group">
                                <label>Nama</label>                          
                                <input type="text" class="form-control" name="name"  value="{{auth::user()->name}}">
                              </div>
                                                
                              <div class="form-group">
                                <label>Alamat</label>                          
                                <input type="text" class="form-control" name="alamat" value="{{auth::user()->alamat}}">                              
                              </div>
                                                
                              <div class="form-group">
                                <label>email</label>                          
                                  <input type="text" class="form-control"  name="mapel" value="{{auth::user()->email}}">
                                </div>          

                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" value="save" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>

              </div>
              <div class="col-md-9 col-sm-9 col-xs-12">

                <div class="profile_title">
                  <div class="col-md-6">
                    <h2>User Activity Report</h2>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span></span> <b class="caret"></b>
                    </div>
                  </div>
                </div>
               

                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                    </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                      <!-- start recent activity -->
                      <ul class="messages">
                        <li>
                          <img src="images/img.jpg" class="avatar" alt="Avatar">
                          <div class="message_date">
                            <h3 class="date text-info">24</h3>
                            <p class="month">May</p>
                          </div>
                          <div class="message_wrapper">
                            <h4 class="heading">Desmond Davison</h4>
                            <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                            <br />
                            <p class="url">
                              <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                              <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                            </p>
                          </div>
                        </li>
                        <li>
                          <img src="images/img.jpg" class="avatar" alt="Avatar">
                          <div class="message_date">
                            <h3 class="date text-error">21</h3>
                            <p class="month">May</p>
                          </div>
                          <div class="message_wrapper">
                            <h4 class="heading">Brian Michaels</h4>
                            <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                            <br />
                            <p class="url">
                              <span class="fs1" aria-hidden="true" data-icon=""></span>
                              <a href="#" data-original-title="">Download</a>
                            </p>
                          </div>
                        </li>
                        <li>
                          <img src="images/img.jpg" class="avatar" alt="Avatar">
                          <div class="message_date">
                            <h3 class="date text-info">24</h3>
                            <p class="month">May</p>
                          </div>
                          <div class="message_wrapper">
                            <h4 class="heading">Desmond Davison</h4>
                            <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                            <br />
                            <p class="url">
                              <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                              <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                            </p>
                          </div>
                        </li>
                        <li>
                          <img src="images/img.jpg" class="avatar" alt="Avatar">
                          <div class="message_date">
                            <h3 class="date text-error">21</h3>
                            <p class="month">May</p>
                          </div>
                          <div class="message_wrapper">
                            <h4 class="heading">Brian Michaels</h4>
                            <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                            <br />
                            <p class="url">
                              <span class="fs1" aria-hidden="true" data-icon=""></span>
                              <a href="#" data-original-title="">Download</a>
                            </p>
                          </div>
                        </li>

                      </ul>
                      <!-- end recent activity -->

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                      <!-- start user projects -->
                      <table class="data table table-striped no-margin">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Client Company</th>
                            <th class="hidden-phone">Hours Spent</th>
                            <th>Contribution</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>New Company Takeover Review</td>
                            <td>Deveint Inc</td>
                            <td class="hidden-phone">18</td>
                            <td class="vertical-align-mid">
                              <div class="progress">
                                <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>New Partner Contracts Consultanci</td>
                            <td>Deveint Inc</td>
                            <td class="hidden-phone">13</td>
                            <td class="vertical-align-mid">
                              <div class="progress">
                                <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Partners and Inverstors report</td>
                            <td>Deveint Inc</td>
                            <td class="hidden-phone">30</td>
                            <td class="vertical-align-mid">
                              <div class="progress">
                                <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>New Company Takeover Review</td>
                            <td>Deveint Inc</td>
                            <td class="hidden-phone">28</td>
                            <td class="vertical-align-mid">
                              <div class="progress">
                                <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- end user projects -->

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
  <!-- /page content -->

{{-- modal bootstrap --}}
@endsection
@endpush
