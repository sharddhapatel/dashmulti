<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.bootstrapdash.com/demo/plus/jquery/template/demo_1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 05:59:30 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Plus Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{URL::asset('master/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('master/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('master/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{URL::asset('master/assets/vendors/jsgrid/jsgrid.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('master/assets/vendors/jsgrid/jsgrid-theme.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('master/assets/vendors/jquery-bar-rating/css-stars.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{URL::asset('master/assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{URL::asset('master/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{URL::asset('master/assets/css/demo_1/style.css')}}">
    <!-- End layout styles -->
    <!-- <link rel="shortcut icon" href="{{URL::asset('master/assets/images/favicon.png')}}"> -->
</head>

<body>

    <div class="container-scroller">

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile border-bottom">

                </li>
                <li class="nav-item pt-3">
                    <a class="nav-link d-block" href="{{url('dashboard')}}">
                        <img class="sidebar-brand-logo" src="https://www.bootstrapdash.com/demo/plus/jquery/template/assets/images/logo.svg" alt="">
                        <img class="sidebar-brand-logomini" src="https://www.bootstrapdash.com/demo/plus/jquery/template/assets/images/logo-mini.svg" alt="">
                        <div class="small font-weight-light pt-1">Responsive Dashboard </div>
                    </a>
                    <form class="d-flex align-items-center" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control border-0" placeholder="Search">
                        </div>
                    </form>
                </li>
                <li class="pt-2 pb-1">
                    <span class="nav-item-head">Template Pages</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('dashboard')}}">
                       <i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#apps" aria-expanded="false" aria-controls="apps">
                        <i class="mdi mdi-eye menu-icon"></i>
                        <span class="menu-title">Trading</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="apps">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{url('watchlist')}}">Watchlist</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('trades')}}">Trades</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('portfolio')}}">Portfolio/Position</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('banned')}}">Banned/Blocked Scripts</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('maxquantity')}}">Max Quantity Details</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                        <i class="mdi mdi-credit-card-multiple menu-icon"></i>
                        <span class="menu-title">Utilities</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{url('tradeeditdeletelog')}}">Trade Edit/Delete Log</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('rejectionlog')}}">Rejection Log</a></li>
                            <!-- <li class="nav-item"> <a class="nav-link" href="">Cricket Rejection Log</a></li> -->
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                        <i class="mdi mdi-contacts menu-icon"></i>
                        <span class="menu-title">Accounts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{url('ledger')}}">Ledger</a></li>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('smasterlogout')}}">
                        <i class="mdi mdi-logout menu-icon"></i>
                        <span class="menu-title">Logout</span>
                        <!-- <i class="menu-arrow"></i> -->
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="mdi mdi-lock menu-icon"></i>
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                           
                            <li class="nav-item"> <a class="nav-link" href="{{url('login')}}"> Login </a></li>
                          
                            <li class="nav-item"> <a class="nav-link" href="{{url('register')}}"> Register </a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-chevron-double-left"></span>
                    </button>
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="https://www.bootstrapdash.com/demo/plus/jquery/template/assets/images/logo-mini.svg" alt="logo" /></a>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email-outline"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                <h6 class="p-3 mb-0 font-weight-semibold">Messages</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{URL::asset('master/assets/images/faces/face1.jpg')}}" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message
                                        </h6>
                                        <p class="text-gray mb-0"> 1 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{URL::asset('master/assets/images/faces/face6.jpg')}}" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message
                                        </h6>
                                        <p class="text-gray mb-0"> 15 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{URL::asset('master/assets/images/faces/face7.jpg')}}" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated
                                        </h6>
                                        <p class="text-gray mb-0"> 18 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <h6 class="p-3 mb-0 text-center text-primary font-13">4 new messages</h6>
                            </div>
                        </li>
                        <li class="nav-item dropdown ms-3">
                            <a class="nav-link" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                <h6 class="px-3 py-3 font-weight-semibold mb-0">Notifications</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="mdi mdi-calendar"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject font-weight-normal mb-0">New order recieved</h6>
                                        <p class="text-gray ellipsis mb-0"> 45 sec ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="mdi mdi-settings"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject font-weight-normal mb-0">Server limit reached</h6>
                                        <p class="text-gray ellipsis mb-0"> 55 sec ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi-link-variant"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject font-weight-normal mb-0">Kevin karvelle</h6>
                                        <p class="text-gray ellipsis mb-0"> 11:09 PM </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <h6 class="p-3 font-13 mb-0 text-primary text-center">View all notifications</h6>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown ms-3 drop"> 
                            <a class="nav-link" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                                {{Session::get('mastername')}}<i class="mdi mdi-account"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list right-drop" aria-labelledby="notificationDropdown">

                                <ul class="profile_ul">
                                    <h6 class="px-3 py-3 font-weight-semibold mb-0">{{Session::get('mastername')}}</h6>
                                    <h6 class="px-3  font-weight-semibold mb-0">Master</h6>
                                    <li class="profile_li">NSE: 1000/1,000</li>
                                    <li class="profile_li">MCX: 1000/1,000</li>
                                    <li class="profile_li">OPT: 1000/1,000</li>
                                    <li class="profile_li">GLB: 1000/1,000</li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="rules.html">
                                    <div class="preview-thumbnail">
                                        <i class="mdi mdi-star-circle"></i>
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject font-weight-normal mb-0">Rules</h6>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="changepassword.html">
                                    <div class="preview-thumbnail">
                                        <i class="mdi mdi-star-circle"></i>
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject font-weight-normal mb-0">Change Password</h6>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" data-bs-toggle="modal" data-bs-target="#loginexampleModal">
                                    <div class="preview-thumbnail">
                                        <i class="mdi mdi-plus"></i>
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject font-weight-normal mb-0">Link Account</h6>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="{{url('smasterlogout')}}">
                                    <div class="preview-thumbnail">
                                        <i class="mdi mdi-link-variant"></i>
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject font-weight-normal mb-0">Logout</h6>
                                    </div>
                                </a>
                            </div>
                        </li>

                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>
        
    @yield('master')

    <script src="{{URL::asset('master/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{URL::asset('master/assets/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
    <script src="{{URL::asset('master/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{URL::asset('master/assets/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('master/assets/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{URL::asset('master/assets/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{URL::asset('master/assets/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{URL::asset('master/assets/vendors/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{URL::asset('master/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{URL::asset('master/assets/js/off-canvas.js')}}"></script>
    <script src="{{URL::asset('master/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{URL::asset('master/assets/js/misc.js')}}"></script>
    <script src="{{URL::asset('master/assets/js/settings.js')}}"></script>
    <script src="{{URL::asset('master/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{URL::asset('master/assets/js/dashboard.js')}}"></script>
    <script src="{{URL::asset('master/assets/js/js-grid.js')}}"></script>
    <script src="{{URL::asset('master/assets/vendors/jsgrid/jsgrid.min.js')}}"></script>
    <script src="{{URL::asset('master/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>

</body>

</html>