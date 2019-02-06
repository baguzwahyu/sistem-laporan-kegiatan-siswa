<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}" class="site_title"><i class="fa fa-paw"></i> <span>{{config('app.name')}}</span></a>
        </div>

        <div class="clearfix" color="red"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ url('img/logo.png')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="{{url('home')}}"><i class="fa fa-home"></i> HOME</a>
            @if(auth::user()->admind)                
                    <li><a><i class="fa fa-table"></i>Table <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="{{URL('admin/siswa')}}">Siswa</a></li>
                        <li><a href="{{URL('admin/guru')}}">Guru</a></li>
                        <li><a href="{{URL('admin/pembimbing')}}">pembimbing</a></li>
                        <li><a href="{{URL('admin/perusahaan')}}">Perusahaan</a></li>
                        </ul>
                    </li>
                    @endif
                    <li><a><i class="fa fa-users"></i>Kelompok <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">MAGANG</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-cogs"></i>Settings <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Role Managment</a></li>
                            <li><a href="#">Configuration</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="#">Fixed Sidebar</a></li>
                          <li><a href="#">Fixed Footer</a></li>
                        </ul>
                      </li>
                      <div class="menu_section">
                            <h3>Live On</h3>
                            <ul class="nav side-menu">
                              <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                  <li><a href="e_commerce.html">E-commerce</a></li>
                                  <li><a href="projects.html">Projects</a></li>
                                  <li><a href="project_detail.html">Project Detail</a></li>
                                  <li><a href="contacts.html">Contacts</a></li>
                                  <li><a href="http://smktelkomdu.sch.id/">Profile</a></li>
                                </ul>
                              </li>
                            </ul>
                     </div>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

    </div>
</div>