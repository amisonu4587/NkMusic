<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Fully Responsive Bootstrap 4 Admin Dashboard Template" name="description">
    <meta content="Spruko" name="author">
    <meta content="{{ csrf_token() }}" name="csrf-token">

    {{-- Title --}}
    {{-- <title>Adon - Creative Admin Multipurpose Responsive Dashboard Template</title> --}}
    <title>@yield('title')</title>

    {{-- Favicon --}}
    <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

    {{-- Icons --}}
    <link href="assets/css/icons.css" rel="stylesheet">

    {{-- Bootstrap.min css --}}
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    {{-- Dashboard CSS --}}
    <link href="assets/css/dashboard.css" rel="stylesheet" type="text/css">

    {{-- Tabs CSS --}}
    <link href="assets/plugins/tabs/style.css" rel="stylesheet" type="text/css">

    {{-- Custom scroll bar css --}}
    <link href="assets/plugins/customscroll/jquery.mCustomScrollbar.css" rel="stylesheet" />

    {{-- Sidemenu Css --}}
    <link href="assets/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">
    {{-- form Uploads --}}
    <link href="assets/plugins/fileuploads/css/dropify.css" rel="stylesheet" type="text/css" /> <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    {{-- Select2 css --}}
    <link rel="stylesheet" href="assets/plugins/select2/select2.css">
    {{-- Data table css --}}
    <link href="assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Material-Toast-master/mdtoast.min.css" />
    @toastr_css

    <style>
        .app-sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: 230px;
            overflow: auto;
            z-index: 10;
            background-color: #170f2b;
            -webkit-box-shadow: 0 8px 20px 0 rgb(40 37 89 / 10%) !important;
            box-shadow: 0 8px 20px 0 rgb(40 37 89 / 10%) !important;
            -webkit-transition: left 0.3s ease, width 0.3s ease;
            -o-transition: left 0.3s ease, width 0.3s ease;
            transition: left 0.3s ease, width 0.3s ease;
        }


        .side-menu__item {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 14px 24px;
            font-size: 0.9em;
            font-weight: 300;
            -webkit-transition: border-left-color 0.3s ease, background-color 0.3s ease;
            -o-transition: border-left-color 0.3s ease, background-color 0.3s ease;
            transition: border-left-color 0.3s ease, background-color 0.3s ease;
            color: rgb(240 234 249);
        }

        .slide.is-expanded a {
            color: rgb(225 224 236);
        }

        .slide a:hover {
            background: #18161b;
        }

        .slide.is-expanded .slide-menu .active a {
            color: #ad59ff;
            background: #18161b;
        }

        .slide.is-expanded li a:hover {
            background: #18161b;
        }

    </style>
</head>

<body class="app sidebar-mini rtl">
    <div id="global-loader"></div>
    <div class="page">
        <div class="page-main">
            {{-- Sidebar menu --}}
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar ">
                <div class="sidebar-img">
                    <a class="navbar-brand" href="/">
                        <h2>LOGO</h2>
                    </a>
                    <ul class="side-menu">
                        <li class="slide
                            <?php if (basename($_SERVER['REQUEST_URI']) == 'adminDashboard' || basename($_SERVER['REQUEST_URI']) == '') {
                                echo 'is-expanded';
                            } ?>">
                            <a class="side-menu__item" href="/">
                                {{-- <i class="side-menu__icon fe fe-home"></i> --}}
                                <i class="fas fa-tachometer-alt side-menu__icon"></i>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#">
                                {{-- <i class="side-menu__icon fe fe-grid"></i> --}}
                                <i class="far fa-file-alt side-menu__icon"></i>
                                <span class="side-menu__label">Content Upload Details</span>
                                <i class="angle fa fa-angle-right"></i>
                            </a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="/content_details" class="slide-item">View Content Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="fas fa-file-upload side-menu__icon"></i>
                                <span class="side-menu__label">Content Live Status</span>
                                <i class="angle fa fa-angle-right"></i>
                            </a>
                            <ul class="slide-menu">

                                <li>
                                    <a href="/add_content_status" class="slide-item">Add Content Status</a>
                                </li>
                                <li>
                                    <a href="/view_content_status" class="slide-item">View Content Status</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="fas fa-user-check side-menu__icon"></i>
                                <span class="side-menu__label">Registered User List</span>
                                <i class="angle fa fa-angle-right"></i>
                            </a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="/viewregister" class="slide-item">View All Register</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="fas fa-file-invoice-dollar side-menu__icon"></i>
                                <span class="side-menu__label">Payout</span>
                                <i class="angle fa fa-angle-right"></i>
                            </a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="/add_payout" class="slide-item">Add Payout</a>
                                </li>
                                <li>
                                    <a href="/view_payout_partner" class="slide-item">View All Payout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#">
                                {{-- <i class="side-menu__icon fe  fe-bar-chart-2"></i> --}}
                                <i class="fas fa-chart-line side-menu__icon"></i>
                                <span class="side-menu__label">Revenue Report</span>
                                <i class="angle fa fa-angle-right"></i>
                            </a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="/music_revenue" class="slide-item">Add Revenue Report</a>
                                </li>
                                <li>
                                    <a href="/view_music_distribution" class="slide-item">View Revenue Report</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="fas fa-images side-menu__icon"></i>
                                <span class="side-menu__label">Gallery</span>
                                <i class="angle fa fa-angle-right"></i>
                            </a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="/add_image" class="slide-item">Add Gallery Image</a>
                                </li>
                                <li>
                                    <a href="/gallery" class="slide-item">View Gallery Images</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="fab fa-spotify side-menu__icon"></i>
                                <span class="side-menu__label">Platforms</span>
                                <i class="angle fa fa-angle-right"></i>
                            </a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="/add_platform" class="slide-item">Add Platform</a>
                                </li>
                                <li>
                                    <a href="/platform" class="slide-item">View Platform</a>
                                </li>
                            </ul>
                        </li>
                </div>
            </aside>
            {{-- Sidebar menu --}}

            {{-- app-content --}}
            <div class="app-content ">
                <div class="side-app">
                    <div class="main-content">
                        <div class="p-2 d-block d-sm-none navbar-sm-search">
                            {{-- Form --}}
                            <form class="navbar-search navbar-search-dark form-inline ml-lg-auto">
                                <div class="form-group mb-0">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                                        </div><input class="form-control" placeholder="Search" type="text">
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{-- Top navbar --}}
                        <nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
                            <div class="container-fluid">
                                <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar"
                                    href="#"></a>
                                {{-- Horizontal Navbar --}}
                                {{-- Brand --}}
                                <a class="navbar-brand pt-0 d-md-none" href="index.html">
                                    <h3>NK Music</h3>
                                </a>
                                {{-- User --}}
                                <ul class="navbar-nav align-items-center ">
                                    <li class="nav-item dropdown">
                                        <a aria-expanded="false" aria-haspopup="true"
                                            class="nav-link pr-md-0 mr-md-2 pl-1" data-toggle="dropdown" href="#"
                                            role="button">
                                            <div class="media align-items-center">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="assets/img/z.png"></span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                            <div class=" dropdown-header noti-title text-center border-bottom pb-3">
                                                <h3 class="text-capitalize text-dark mb-1">Administrator</h3>

                                            </div>

                                            <a class="dropdown-item" href="/admin_logout"><i
                                                    class="ni ni-support-16"></i> <span>Log Out</span></a>

                                        </div>
                                    </li>

                                    <li class="nav-item d-none d-md-flex">
                                        <div class="dropdown d-none d-md-flex mt-2 ">
                                            <a class="nav-link full-screen-link  pr-0"><i
                                                    class="fe fe-maximize-2 floating " id="fullscreen-button"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        {{-- Top navbar --}}
                        <div class="container-fluid pt-8">
                            @yield('content')
                            {{-- Footer --}}
                            <footer class="footer">
                                <div class="row align-items-center justify-content-xl-between">
                                    <div class="col-xl-6">
                                        <div class="copyright text-center text-xl-left text-muted">
                                            <p class="text-sm font-weight-500">Copyright 2021 © All Rights Reserved.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <p class="float-right text-sm font-weight-500">Designed &amp; Passion With: <a
                                                href="###">NK Music</a></p>
                                    </div>
                                </div>
                            </footer>
                            {{-- Footer --}}
                        </div>

                    </div>
                </div>
            </div>
            {{-- app-content --}}
        </div>
    </div>
    {{-- Back to top --}}
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    {{-- Adon Scripts --}}

    {{-- Core --}}
    @jquery
    @toastr_js
    @toastr_render
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/chart-circle/circle-progress.min.js"></script>



    {{-- Optional JS --}}
    <script src="assets/plugins/chart.js/dist/Chart.min.js"></script>
    <script src="assets/plugins/chart.js/dist/Chart.extension.js"></script>
    {{-- Data tables --}}
    <script src="assets/plugins/datatable/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatable/responsive.bootstrap4.min.js"></script>


    {{-- Fullside-menu Js --}}
    <script src="assets/plugins/toggle-sidebar/js/sidemenu.js"></script>
    {{-- file uploads js --}}
    <script src="assets/plugins/fileuploads/js/dropify.min.js"></script>
    {{-- jquery-ui min js --}}
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>


    {{-- Custom scroll bar Js --}}
    <script src="assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>

    {{-- peitychart --}}
    <script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="assets/plugins/peitychart/peitychart.init.js"></script>

    {{-- Select2 js --}}
    <script src="assets/plugins/select2/select2.full.js"></script>
    {{-- Adon JS --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/dashboard-finance.js"></script>
    <script src="assets/js/datatable.js"></script>
    <script src="assets/js/othercharts.js"></script>
    <script src="assets/js/select2.js"></script>
    <script src="/Material-Toast-master/mdtoast.min.js"></script>




    <script type="text/javascript">
        function validateImage(id) {
            //alert(id);
            var formData = new FormData();

            var file = document.getElementById(id).files[0];

            formData.append("Filedata", file);
            var t = file.type.split("/").pop().toLowerCase();
            console.log(t)
            if (t != "jpeg" && t != "jpg" && t != "png") {
                swal("Error!!", "Please select a valid image file!", "error");
                //alert('Please select a valid image file');
                // mdtoast("Please select a valid pdf file.", {
                //     type: "warning",
                // });
                document.getElementById(id).value = "";
                return false;
            }
            if (file.size > 1024000) {
                alert('Max Upload size is 1MB only');
                // mdtoast("Max Upload size is 2MB only.", {
                //     type: "warning",
                // });
                document.getElementById(id).value = "";
                return false;
            }
            return true;
        }
    </script>
