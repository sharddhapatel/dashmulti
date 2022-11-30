<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 05:44:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL:: asset('dashbord1/assets/images/favicon.png')}}">
    <!-- Pignose Calender -->
    <link href="{{URL:: asset('dashbord1/assets/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{URL:: asset('dashbord1/assets/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="{{URL:: asset('dashbord1/assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <link href="{{URL:: asset('dashbord1/assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{URL:: asset('dashbord1/assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    <link href="{{URL:: asset('dashbord1/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{URL:: asset('dashbord1/assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{URL:: asset('dashbord1/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
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
            <div class="brand-logo">
                <a href="{{url('admindashboard')}}">
                    <b class="logo-abbr"><img src="{{URL:: asset('dashbord1/assets/images/logo.png')}}" alt=""> </b>
                    <span class="logo-compact"><img src="{{URL:: asset('dashbord1/assets/images/logo-compact.png')}}" alt=""></span>
                    <span class="brand-title">
                        <img src="{{URL:: asset('dashbord1/assets/images/logo-text.png')}}" alt="">
                    </span>
                </a>
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
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">3</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="{{URL:: asset('dashbord1/assets/images/avatar/1.jpg')}}" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="{{URL:: asset('dashbord1/assets/images/avatar/2.jpg')}}" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Adam Smith</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="{{URL:: asset('dashbord1/assets/images/avatar/3.jpg')}}" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Barak Obama</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="{{URL:: asset('dashbord1/assets/images/avatar/4.jpg')}}" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Hilari Clinton</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hello</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">5</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </li>

                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                {{Session::get('login_name')}}<i class="mdi mdi-account" style="font-size: 25px;"></i>
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <ul class="profile_ul">
                                            <h6 class="px-3 py-3 font-weight-semibold mb-0">{{Session::get('login_name')}}</h6>
                                            <h6 class="px-3  font-weight-semibold mb-0">Master</h6>
                                            <li class="profile_li">NSE: 1000/1,000</li>
                                            <li class="profile_li">MCX: 1000/1,000</li>
                                            <li class="profile_li">OPT: 1000/1,000</li>
                                            <li class="profile_li">GLB: 1000/1,000</li>
                                        </ul>
                                        <hr class="my-2">
                                        <li>
                                            <a href="rules.html"><i class="icon-star"></i> <span>Rules</span></a>
                                        </li>
                                        <li>
                                            <a href="changepassword.html">
                                                <i class="icon-envelope-open"></i> <span>Change Password</span>
                                            </a>
                                        </li>

                                        <hr class="my-2">
                                        <li>
                                            <a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="icon-plus"></i> <span>Link Account</span></a>
                                        </li>
                                        <li><a href="{{url('adminlogout')}}"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- login code link account -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">LINK ACCOUNT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">USER ID:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">PASSWORD:</label>
                                <input type="password" class="form-control" id="recipient-name">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                        <button type="button" class="btn btn-primary">LINK</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="{{url('admindashboard')}}" aria-expanded="false">
                            <i class="mdi mdi-compass-outline menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="mdi mdi-eye"></i><span class="nav-text">Trading</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('adminwatchlist')}}">Watchlist</a></li>
                            <li><a href="{{url('admintrades')}}">Trades</a></li>
                            <li><a href="{{url('adminportfolioposition')}}">Portfolio/Position</a></li>
                            <li><a href="{{url('adminbannedblockedscripts')}}">Banned/Blocked Scripts</a></li>
                            <li><a href="{{url('adminmaxquantitydetails')}}">Max Quantity Details</a></li>
                            <li><a href="{{url('adminmarginmanagement')}}">Margin management</a></li>
                            <li><a href="{{url('adminsummaryreport')}}">Summary Report</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="{{url('admingames')}}" aria-expanded="false">
                            <i class="mdi mdi-gamepad menu-icon"></i><span class="nav-text">Games</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="mdi mdi-account-plus menu-icon"></i><span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('adminuserlisting')}}">User Listing</a></li>
                            <li><a href="{{url('adminmasterlisting')}}">Master Listing</a></li>
                            <li><a href="{{url('adminbrokerlisting')}}">Broker Listing</a></li>
                            <li><a href="{{url('adminaddaccout')}}">Add Account</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="mdi mdi-credit-card-multiple menu-icon"></i><span class="nav-text">Utilities</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('adminbulktrading')}}">Bulk Trading</a></li>
                            <li><a href="{{url('admintradeeditdeletelog')}}">Trade Edit/Delete Log</a></li>
                            <li><a href="{{url('adminusereditlog')}}">User Edit Log</a></li>
                            <li><a href="{{url('adminautosquare')}}">Auto SquareUp Log</a></li>
                            <li><a href="{{url('admincrosstradelog')}}">Cross Trade(s) Log</a></li>
                            <li><a href="{{url('adminrejectionlog')}}">Rejection Log</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="mdi mdi-contacts menu-icon"></i><span class="nav-text">Accounts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('adminledger')}}">Ledger</a></li>
                            <li><a href="{{url('admincashledger')}}">Cash Ledger</a></li>
                            <li><a href="{{url('admincashentry')}}">Cash Entry</a></li>
                            <li><a href="{{url('adminjv')}}">JV</a></li>
                            <li><a href="{{url('admintrialbalance')}}">Trial Balance</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="mdi mdi-star-box menu-icon"></i><span class="nav-text">Settings</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('adminorderlimit')}}">Order Limit</a></li>
                            <li><a href="{{url('adminblockallowscripts')}}">Block/Allow Scripts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="{{url('adminlogout')}}" aria-expanded="false">
                            <i class="mdi mdi-logout menu-icon"></i><span class="nav-text">Logout</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">User Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/')}}">Login</a></li>
                            <li><a href="{{url('adminregister')}}">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    @yield('content')

    <!--********************************** Scripts ***********************************-->
    <script src="{{URL:: asset('dashbord1/assets/plugins/common/common.min.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/js/custom.min.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/js/settings.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/js/gleek.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/js/styleSwitcher.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{URL:: asset('dashbord1/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{URL:: asset('dashbord1/assets/plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{URL:: asset('dashbord1/assets/plugins/d3v3/index.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/plugins/datamaps/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{URL:: asset('dashbord1/assets/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{URL:: asset('dashbord1/assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{URL:: asset('dashbord1/assets/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/plugins/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="{{URL:: asset('dashbord1/assets/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js')}}"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="{{URL:: asset('dashbord1/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="{{URL:: asset('dashbord1/assets/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <script src="{{URL:: asset('dashbord1/assets/js/plugins-init/form-pickers-init.js')}}"></script>

    <script src="{{URL:: asset('dashbord1/assets/plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/js/dashboard/dashboard-1.js')}}"></script>



</body>
<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 05:45:24 GMT -->

</html>
