<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Responsive Bootstrap 5 Dashboard Template" />
        <meta name="author" content="ParkerThemes" />
        <link rel="shortcut icon" href="user/img/fav.png" />
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="user/css/bootstrap.min.css" />
        <link rel="stylesheet" href="user/css/animate.css" />
        <link rel="stylesheet" href="user/fonts/icomoon/icomoon.css" />
        <link rel="stylesheet" href="user/css/main.css" />
        <link rel="stylesheet" href="user/vendor/overlay-scroll/OverlayScrollbars.min.css" />
    </head>
    <body>
        <div id="loading-wrapper">
            <div class="spinner-border"></div>
            <div class="loading-messsage"><span>L</span><span>o</span><span>a</span><span>d</span><span>i</span><span>n</span><span>g</span></div>
        </div>
        <div class="page-wrapper">
            <nav class="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="javascript:void(0);" class="logo">
                        <h4 style="font-size: 12px;
    font-weight: 900;
    font-family: none;">NK Music Distribution</h4>
                        <!-- <img src="user/img/logo.svg" alt="Cliq Admin Dashboard" /> -->
                    </a>
                </div>
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">
                        <ul>
                            <!-- <li class="sidebar-dropdown active">
                                <a href="/userDashboard"><i class="icon-house_siding gradient-orange"></i><span class="menu-text">Dashboards</span></a>
                                
                            </li> -->

                            <li>
                                <a href="/userDashboard"><i class="icon-house_siding gradient-orange"></i><span class="menu-text">Dashboard</span></a>
                            </li>

                            <li>
                                <a href="/content_status"><i class="icon-settings_input_svideo gradient-teal"></i><span class="menu-text">Content Status</span></a>
                            </li>
                            <li>
                                <a href="/all_revenue"><i class="icon-model_training gradient-pink"></i><span class="menu-text">Revenue Report</span></a>
                            </li>
                            <li>
                                <a href="/all_payout"><i class="icon-photo_filter gradient-green"></i><span class="menu-text">All Payout</span></a>
                            </li>
                          
                            
                            <!-- <li class="sidebar-dropdown">
                                <a href="#"><i class="icon-model_training gradient-pink"></i><span class="menu-text">Pages</span></a>
                                <div class="sidebar-submenu">
                                    <ul>
                                       
                                        <li><a href="javascript:void(0);">Profile</a></li>
                                        <li><a href="javascript:void(0);">Account Settings</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar-dropdown">
                                <a href="#"><i class="icon-edit_road gradient-yellow"></i><span class="menu-text">Forms</span></a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li><a href="javascript:void(0);">Controls</a></li>
                                      
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar-dropdown">
                                <a href="#"><i class="icon-pie_chart_outlined gradient-blue"></i><span class="menu-text">Graphs</span></a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li><a href="javascript:void(0);">Apex</a></li>
                                        <li><a href="javascript:void(0);">Morris</a></li>
                                        <li><a href="javascript:void(0);">Maps</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar-dropdown">
                                <a href="#"><i class="icon-lock_outline gradient-violet"></i><span class="menu-text">Authentication</span></a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li><a href="javascript:void(0);">Login</a></li>
                                        <li><a href="javascript:void(0);">Signup</a></li>
                                        <li><a href="javascript:void(0);">Error</a></li>
                                        <li><a href="javascript:void(0);">Maintenance</a></li>
                                    </ul>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="main-container">
                <div class="page-header">
                    <div class="breadcrumb-container">
                        <div class="toggle-sidebar" id="toggle-sidebar"><i class="icon-menu"></i></div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><i class="icon-house_siding"></i><a href="/userDashboard">Home</a></li>
                            <li class="breadcrumb-item breadcrumb-active" aria-current="page">@yield('text')</li>
                        </ol>
                    </div>
                    <div class="header-actions-container">
                        <div class="search-container">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." /><button class="btn" type="button"><i class="icon-search"></i></button>
                            </div>
                        </div>
                        <ul class="header-actions">
                            <!-- <li class="dropdown d-none d-md-block">
                                <a href="#" id="countries" data-toggle="dropdown" aria-haspopup="true"><img src="user/img/flags/1x1/gb.svg" class="flag-img" alt="Great Britain" /></a>
                                <div class="dropdown-menu dropdown-menu-end mini" aria-labelledby="countries">
                                    <div class="country-container">
                                        <a href="javascript:void(0);"><img src="user/mg/flags/1x1/us.svg" alt="USA" /></a><a href="javascript:void(0);"><img src="user/img/flags/1x1/in.svg" alt="India" /></a>
                                        <a href="javascript:void(0);"><img src="user/img/flags/1x1/br.svg" alt="Brazil" /></a><a href="javascript:void(0);"><img src="user/img/flags/1x1/tr.svg" alt="Turkey" /></a>
                                        <a href="javascript:void(0);"><img src="user/img/flags/1x1/id.svg" alt="Indonesia" /></a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown d-none d-md-block">
                                <a href="#" id="bookmarks" data-toggle="dropdown" aria-haspopup="true"><i class="icon-star_outline"></i></a>
                                <div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="bookmarks">
                                    <div class="bookmarks-container">
                                        <a href="#" class="bookmark-block">
                                            <img src="user/img/social/dribbble.svg" alt="Dribbble" />
                                            <h5>Dribbble</h5>
                                        </a>
                                        <a href="#" class="bookmark-block">
                                            <img src="user/img/social/behance.svg" alt="Behance" />
                                            <h5>Behance</h5>
                                        </a>
                                        <a href="#" class="bookmark-block">
                                            <img src="user/img/social/evernote.svg" alt="Evernote" />
                                            <h5>Evernote</h5>
                                        </a>
                                        <a href="#" class="bookmark-block">
                                            <img src="user/img/social/dropbox.svg" alt="Dropbox" />
                                            <h5>Dropbox</h5>
                                        </a>
                                        <a href="#" class="bookmark-block">
                                            <img src="user/img/social/amazon.svg" alt="Amazon" />
                                            <h5>Amazon</h5>
                                        </a>
                                        <a href="#" class="bookmark-block">
                                            <img src="user/img/social/youtube.svg" alt="Youtube" />
                                            <h5>Youtube</h5>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown d-none d-md-block">
                                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                    <i class="icon-notifications_none animate__animated animate__swing animate__infinite infinite"></i>
                                    <span class="count-label gradient-red animate__animated animate__heartBeat animate__infinite infinite">7</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="notifications">
                                    <div class="scroll240">
                                        <ul class="header-notifications">
                                            <li class="gradient-grey">
                                                <a href="#">
                                                    <div class="user-img"><img src="user/img/user.png" alt="User" /></div>
                                                    <div class="details">
                                                        <div class="user-title">Larkyn</div>
                                                        <div class="noti-details">Check out every table in detail.</div>
                                                        <div class="noti-date">Aug 25, 03:00 pm</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="gradient-grey">
                                                <a href="#">
                                                    <div class="user-img"><img src="user/img/user2.png" alt="User" /></div>
                                                    <div class="details">
                                                        <div class="user-title">Braxten</div>
                                                        <div class="noti-details">Approved new design.</div>
                                                        <div class="noti-date">Aug 21, 12:00 am</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="gradient-grey">
                                                <a href="#">
                                                    <div class="user-img"><img src="user/img/user3.png" alt="User" /></div>
                                                    <div class="details">
                                                        <div class="user-title">Maria</div>
                                                        <div class="noti-details">Membership has been ended.</div>
                                                        <div class="noti-date">Aug 18, 09:30 am</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="gradient-grey">
                                                <a href="#">
                                                    <div class="user-img"><img src="user/img/user5.png" alt="User" /></div>
                                                    <div class="details">
                                                        <div class="user-title">Alex</div>
                                                        <div class="noti-details">Design Review.</div>
                                                        <div class="noti-date">Aug 15, 09:30 am</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="gradient-green">
                                                <a href="#">
                                                    <div class="user-img"><img src="user/img/user6.png" alt="User" /></div>
                                                    <div class="details">
                                                        <div class="user-title">Sunny</div>
                                                        <div class="noti-details">UI Discussion</div>
                                                        <div class="noti-date">Aug 10, 09:30 am</div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li> -->

                            @php($admin=DB::table('users')->where('id',auth()->user()->id)->first())


                            <li class="dropdown">
                                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                    <span class="user-name d-none d-md-block">{{$admin->name}}</span><span class="avatar">
                                        @if($admin->user_image=="")
                                        <img src="assets/img/z.png" alt="User Avatar" />
                                        @else
                                        <img src="user/{{$admin->user_image}}" alt="User Avatar" />
                                        @endif
                                       
                                        <span class="status online"></span></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                                    <div class="header-profile-avatar">
                                    @if($admin->user_image=="")
                                        <img src="assets/img/z.png" alt="User Avatar" />
                                        @else
                                        <img src="user/{{$admin->user_image}}" alt="User Avatar" />
                                        @endif
                                    </div>
                                    <div class="header-profile-block">
                                        <h5>{{$admin->name}}</h5>
                                        <p>User</p>
                                    </div>
                                    <div class="header-profile-actions">
                                        <a href="/profile" class="gradient-blue"><i class="icon-person_outline"></i>Profile</a>
                                        <!-- <a href="javascript:void(0);" class="gradient-green"><i class="icon-edit_road"></i>Settings</a> -->
                                        <a href="/u_logout"  class="gradient-red"><i class="icon-power_settings_new"></i>Logout</a>
                                   
                                </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            @yield('content')

            <div class="app-footer"><span>© CLIQ admin 2021</span></div>
                </div>
            </div>
        </div>
        <script src="user/js/jquery.min.js"></script>
        <script src="user/js/bootstrap.bundle.min.js"></script>
        <script src="user/js/modernizr.js"></script>
        <script src="user/js/moment.js"></script>
        <script src="user/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
        <script src="user/vendor/overlay-scroll/custom-scrollbar.js"></script>
        <script src="user/vendor/apex/apexcharts.min.js"></script>
        <script src="user/vendor/apex/custom/home2/byDeviceGraph.js"></script>
        <script src="user/vendor/apex/custom/home2/earningsGraph.js"></script>
        <script src="user/vendor/apex/custom/home2/salesGraph.js"></script>
        <script src="user/vendor/apex/custom/home2/sparklineGraphs.js"></script>
        <script src="user/js/main.js"></script>
    </body>
</html>
