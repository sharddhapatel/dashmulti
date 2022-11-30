<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.bootstrapdash.com/demo/plus/jquery/template/demo_1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 05:59:30 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Plus Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{URL::asset('super-master/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('super-master/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('super-master/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{URL::asset('super-master/assets/vendors/jsgrid/jsgrid.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('super-master/assets/vendors/jsgrid/jsgrid-theme.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('super-master/assets/vendors/jquery-bar-rating/css-stars.css')}}">
    <link rel="stylesheet" href="{{URL::asset('super-master/assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{URL::asset('super-master/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">

    

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{URL::asset('super-master/assets/css/demo_1/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{URL::asset('super-master/assets/images/favicon.png')}}" />
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile border-bottom">

                </li>
                <li class="nav-item pt-3">
                    <a class="nav-link d-block" href="{{url('superindex')}}">
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
                    <a class="nav-link" href="{{url('superdashboard')}}">
                        <i class="mdi mdi-compass-outline menu-icon"></i>
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
                            <li class="nav-item"> <a class="nav-link" href="{{url('super-watchlist')}}">Watchlist</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('super-trades')}}">Trades</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('super-portfolio')}}">Portfolio/Position</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('super-banned')}}">Banned/Blocked Scripts</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('super-maxquantity')}}">Max Quantity Details</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('super-marginmanagement')}}">Margin management</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('super-summaryreport')}}">Summary Report</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="games.html">
                        <i class="mdi mdi-gamepad menu-icon"></i>
                        <span class="menu-title">Games</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        
                        <i class="mdi mdi-account-plus menu-icon"></i>
                        <span class="menu-title">Users</span>   
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{url('userlisting')}}">User Listing</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('masterlisting')}}">Master Listing</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('brokerlisting')}}">Broker Listing</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('addaccount')}}">Add Account</a></li>
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
                            <li class="nav-item"> <a class="nav-link" href="{{url('bulktrading')}}">Bulk Trading</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('tradeeditdeletelog')}}">Trade Edit/Delete Log</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('usereditlog')}}">User Edit Log</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('autosquareuplog')}}">Auto SquareUp Log</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('crosstradelog')}}">Cross Trade(s) Log</a></li>
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
                            <li class="nav-item"> <a class="nav-link" href="{{url('super-ledger')}}">Ledger</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('super-cashledger')}}">Cash Ledger</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('super-cashentry')}}">Cash Entry</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('super-jv')}}">JV</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('trialbalance')}}">Trial Balance</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
                        <i class="mdi mdi-star-box menu-icon"></i>
                        <span class="menu-title">Settings</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{url('orderlimit')}}">Order Limit</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('blockallowscripts')}}">Block/Allow Scripts</a></li>
                            <!-- <li class="nav-item"> <a class="nav-link" href="">Validation</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Wizard</a></li> -->
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('super-login')}}">
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
                           
                            <li class="nav-item"> <a class="nav-link" href="{{url('super-login')}}"> Login  </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('super-register')}}"> Register  </a></li>
                          
                        </ul>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                    <div class="img-ss rounded-circle bg-light border me-3"></div>Default
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles default primary"></div>
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles light"></div>
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_navbar.html -->
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
                                        <img src="{{URL::asset('super-master/assets/images/faces/face1.jpg')}}" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                                        <p class="text-gray mb-0"> 1 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{URL::asset('super-master/assets/images/faces/face6.jpg')}}" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                                        <p class="text-gray mb-0"> 15 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{URL::asset('super-master/assets/images/faces/face7.jpg')}}" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
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
                                {{Session::get('login_name')}} <i class="mdi mdi-account"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list right-drop" aria-labelledby="notificationDropdown">

                                <ul class="profile_ul">
                                    <h6 class="px-3 py-3 font-weight-semibold mb-0">{{Session::get('login_name')}} </h6>
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
                                <a class="dropdown-item preview-item" href="{{url('adminlogout')}}">
                                    <div class="preview-thumbnail">
                                        <i class="mdi mdi-link-variant"></i>
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject font-weight-normal mb-0">Logout</h6>
                                    </div>
                                </a>
                                
                            </div>
                        </li>
                        <!-- <li class="nav-item nav-logout d-none d-lg-block">
      <a class="nav-link" href="index.html">
        <i class="mdi mdi-home-circle"></i>
      </a>
    </li> -->
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
                </div>
            </nav>

            <!-- login Modal -->
            <div class="modal fade" id="loginexampleModal" tabindex="-1" aria-labelledby="loginexampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginexampleModalLabel">Link Account</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
            </div>

            @yield('super-master')

            <script src="{{URL::asset('super-master/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{URL::asset('super-master/assets/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
    <script src="{{URL::asset('super-master/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{URL::asset('super-master/assets/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('super-master/assets/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{URL::asset('super-master/assets/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{URL::asset('super-master/assets/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{URL::asset('super-master/assets/vendors/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{URL::asset('super-master/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{URL::asset('super-master/assets/js/off-canvas.js')}}"></script>
    <script src="{{URL::asset('super-master/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{URL::asset('super-master/assets/js/misc.js')}}"></script>
    <script src="{{URL::asset('super-master/assets/js/settings.js')}}"></script>
    <script src="{{URL::asset('super-master/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{URL::asset('super-master/assets/js/dashboard.js')}}"></script>
    <script src="{{URL::asset('super-master/assets/js/js-grid.js')}}"></script>
    <script src="{{URL::asset('super-master/assets/vendors/jsgrid/jsgrid.min.js')}}"></script>
    <script src="{{URL::asset('super-master/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
   
    <script>
        $('.datepicker').datepicker({
            weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            showMonthsShort: true
        })
    </script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>
</html>
