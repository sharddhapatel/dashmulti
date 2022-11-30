<!DOCTYPE html>
<html class="h-100" lang="en">


<!-- Mirrored from demo.themefisher.com/quixlab/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 05:45:38 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL:: asset('dashbord1/assets/images/favicon.html')}}">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="{{URL:: asset('dashbord1/assets/css/style.css')}}" rel="stylesheet">

</head>

<body class="h-100">

    <!--******************* Preloader start ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************  Preloader end ********************-->

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index-2.html">
                                    <h4>LOGIN</h4>
                                </a>

                                @if(Session::has('message'))
                                <div class="alert alert-success">
                                    <i class="fa-lg fa fa-warning"></i>
                                    {!! session('message') !!}
                                </div>
                                @elseif(Session::has('error'))
                                <div class="alert alert-danger">
                                    <i class="fa-lg fa fa-warning"></i>
                                    {!! session('error') !!}
                                </div>
                                @endif
                                <form class="mt-5 mb-5 login-input" action="{{url('adminlogin')}}" method="POST">
                                    {{csrf_field ()}}

                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer">Dont have account? <a href="{{url('adminregister')}}" class="text-primary">Sign Up</a> Now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************  Scripts  ***********************************-->
    <script src="{{URL:: asset('dashbord1/assets/plugins/common/common.min.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/js/custom.min.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/js/settings.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/js/gleek.js')}}"></script>
    <script src="{{URL:: asset('dashbord1/assets/js/styleSwitcher.js')}"></script>
</body>

<!-- Mirrored from demo.themefisher.com/quixlab/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 05:45:38 GMT -->

</html>
