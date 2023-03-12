        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">

            <div class="brand-logo ">
                <img src="{{ asset('logo-white.png') }}" alt="" width="70px" class="mx-auto">
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>

                <div class="header-right">
                    <ul class="clearfix">

                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{ asset('images/profile/' . Auth::user()->image) }}" height="40"
                                    width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="{{ route('profile', Auth::id()) }}"><i class="icon-user"></i>
                                                <span>Profile</span></a>
                                        </li>

                                        <hr class="my-2">

                                        <li><a href="{{ route('logout') }}"><i class="icon-key"></i>
                                                <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="{{ Auth::user()->is_admin ? route('admin_home') : route('home') }}">
                            <i class="fa fa-address-card  menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    @if (Auth::user()->is_admin)
                        <li class="mega-menu mega-menu-sm">
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="fa fa-user menu-icon"></i><span class="nav-text">Users</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ route('all_users') }}">View All</a></li>
                                <li><a href="{{ route('add_user') }}">Add User</a></li>
                            </ul>
                        </li>
                    @endif
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-industry menu-icon"></i> <span class="nav-text">Test Machine</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all_test_machine') }}">View All</a></li>
                            <li><a href="{{ route('add_test_machine') }}">Add</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-building menu-icon"></i><span class="nav-text">Applicant</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all_applicant') }}">View All</a></li>
                            <li><a href="{{ route('add_applicant') }}">Add</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-signature menu-icon"></i><span class="nav-text">Signature</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all_signature') }}">View All</a></li>
                            <li><a href="{{ route('add_signature') }}">Add</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-file menu-icon"></i> <span class="nav-text">Generate Reports</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all_reports') }}">View ECE R 117</a></li>
                            <li><a href="{{ route('add_reports') }}">Generate ECE R 117</a></li>
                        </ul>

                        <ul aria-expanded="false">
                            <hr>
                            <li><a href="{{ route('all_reports_AIS') }}">View AIS 142</a></li>
                            <li><a href="{{ route('add_reports_ais') }}">Generate AIS 142</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
