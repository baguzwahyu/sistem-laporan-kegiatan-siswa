<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}" class="site_title"><i class="fa fa-paw"></i> <span>{{config('app.name')}}</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="/images/img.jpg" alt="..." class="img-circle profile_img">
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
                    <li><a href="#"><i class="fa fa-home"></i> Daftar Pembimbing</a>
                    </li>
                    <li><a><i class="fa fa-shopping-cart"></i>Order <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#"><i class="fa fa-cart-plus"></i>New Order</a></li>
                        </ul>
                    </li>                    
                    <li><a><i class="fa fa-table"></i>Table <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Table Supplier</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-list-alt"></i>Form Input <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Supplier</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-cogs"></i>Settings <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Role Managment</a></li>
                            <li><a href="#">Configuration</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

    </div>
</div>