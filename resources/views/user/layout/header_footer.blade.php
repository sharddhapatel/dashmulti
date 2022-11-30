<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.themefisher.com/focus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Mar 2022 05:13:44 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('user/assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{URL::asset('user/assets/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('user/assets/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{URL::asset('user/assets/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('user/assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.min.css">
    <!-- Daterange picker -->
    <link href="{{URL::asset('user/assets/vendor/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{URL::asset('user/assets/vendor/clockpicker/css/bootstrap-clockpicker.min.css')}}" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{URL::asset('user/assets/vendor/jquery-asColorPicker/css/asColorPicker.min.css')}}" rel="stylesheet">
    <!-- Material color picker -->
    <link href="{{URL::asset('user/assets/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="{{URL::asset('user/assets/vendor/pickadate/themes/default.css')}}">
    <link rel="stylesheet" href="{{URL::asset('user/assets/vendor/pickadate/themes/default.date.css')}}">
    <link href="{{URL::asset('user/assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{url('usermaindash')}}" class="brand-logo">
                <img class="logo-abbr" src="{{URL::asset('user/assets/images/logo.png')}}" alt="">
                <img class="logo-compact" src="{{URL::asset('user/assets/images/logo-text.png')}}" alt="">
                <img class="brand-title" src="{{URL::asset('user/assets/images/logo-text.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                           

                            <li class="nav-item dropdown header-profile">
                            {!!Session::get('username')!!}
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="profile_ul">
                                        <h6 class="px-3 py-3 font-weight-semibold mb-0">{!!Session::get('username')!!}</h6>
                                        <h6 class="px-3  font-weight-semibold mb-0">Master</h6>
                                        <li class="profile_li">NSE: 1000/1,000</li>
                                        <li class="profile_li">MCX: 1000/1,000</li>
                                        <li class="profile_li">OPT: 1000/1,000</li>
                                        <li class="profile_li">GLB: 1000/1,000</li>
                                    </ul>
                                    <a href="rules.html" class="dropdown-item">
                                        <i class="icon-star"></i>
                                        <span class="ml-2">Rules</span>
                                    </a>
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#loginexampleModal">
                                        <i class="icon-plus"></i>
                                        <span class="ml-2">Link Account</span>
                                    </a>
                                    <a href="changepassword.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Change password </span>
                                    </a>
                                    <a href="{{url('suserlogout')}}" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
           
        </div>


        <!-- login Modal -->
        <!-- <div class="modal fade" id="loginexampleModal" tabindex="-1" aria-labelledby="loginexampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginexampleModalLabel">Link Account</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="mdi mdi-close menu-icon"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">USER ID</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary">LINK</button>
                        </form>
                    </div>

                </div>
            </div>
        </div> -->

        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="{{url('userdashboard')}}" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>

                    </li>
                    <!-- <li class="nav-label">Trading</li> -->
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="mdi mdi-eye"></i><span class="nav-text">Trading</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('userwatchlist')}}">Watchlist</a></li>
                            <li><a href="{{url('usertrades')}}">Trades</a></li>
                            <li><a href="{{url('userportfolioposition')}}">Portfolio/Position</a></li>
                            <li><a href="{{url('userbannedblocked')}}">Banned/Blocked Scripts</a></li>
                            <li><a href="{{url('usermaxquantitydetails')}}">Max Quantity Details</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="mdi mdi-credit-card-multiple menu-icon"></i><span class="nav-text">Utilities</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('usertradeeditdeletelog')}}">Trade Edit/Delete Log</a></li>
                            <li><a href="{{url('userrejectionlog')}}">Rejection Log</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="mdi mdi-contacts menu-icon"></i><span class="nav-text">Accounts</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('userledger')}}">Ledger</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="{{url('userlogout')}}" aria-expanded="false"><i
                        class="mdi mdi-logout menu-icon"></i><span class="nav-text">Logout</span></a>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('userregister')}}">Register</a></li>
                            <li><a href="{{url('userlogin')}}">Login</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
           


        </div>


        @yield('user')

        <script src="{{URL::asset('user/assets/vendor/global/global.min.js')}}"></script>
        <script src="{{URL::asset('user/assets/js/quixnav-init.js')}}"></script>
        <script src="{{URL::asset('user/assets/js/custom.min.js')}}"></script>


        <!-- Vectormap -->
        <script src="{{URL::asset('user/assets/vendor/raphael/raphael.min.js')}}"></script>
        <script src="{{URL::asset('user/assets/vendor/morris/morris.min.js')}}"></script>


        <script src="{{URL::asset('user/assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
        <script src="{{URL::asset('user/assets/vendor/chart.js/Chart.bundle.min.js')}}"></script>

        <script src="{{URL::asset('user/assets/vendor/gaugeJS/dist/gauge.min.js')}}"></script>

        <!--  flot-chart js -->
        <script src="{{URL::asset('user/assets/vendor/flot/jquery.flot.js')}}"></script>
        <script src="{{URL::asset('user/assets/vendor/flot/jquery.flot.resize.js')}}"></script>

        <!-- Owl Carousel -->
        <script src="{{URL::asset('user/assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

        <!-- Counter Up -->
        <script src="{{URL::asset('user/assets/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
        <script src="{{URL::asset('user/assets/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
        <script src="{{URL::asset('user/assets/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>


        <script src="{{URL::asset('user/assets/js/dashboard/dashboard-1.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="{{URL::asset('user/assets/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{URL::asset('user/assets/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
        <script src="{{URL::asset('user/assets/vendor/pickadate/picker.js')}}"></script>
        <script src="{{URL::asset('user/assets/vendor/pickadate/picker.time.js')}}"></script>
        <script src="{{URL::asset('user/assets/vendor/pickadate/picker.date.js')}}"></script>
        <script src="{{URL::asset('user/assets/js/plugins-init/bs-daterange-picker-init.js')}}"></script>
        <!-- Clockpicker init -->
        <script src="{{URL::asset('user/assets/js/plugins-init/clock-picker-init.js')}}"></script>
        <!-- asColorPicker init -->
        <script src="{{URL::asset('user/assets/js/plugins-init/jquery-asColorPicker.init.js')}}"></script>
        <!-- Material color picker init -->
        <script src="{{URL::asset('user/assets/js/plugins-init/material-date-picker-init.js')}}"></script>
        <!-- Pickdate -->
        <script src="{{URL::asset('user/assets/js/plugins-init/pickadate-init.js')}}"></script>
        <script src="{{URL::asset('user/assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{URL::asset('user/assets/js/plugins-init/datatables.init.js')}}"></script>

        </body>


<!-- Mirrored from demo.themefisher.com/focus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Mar 2022 05:13:44 GMT -->

</html>