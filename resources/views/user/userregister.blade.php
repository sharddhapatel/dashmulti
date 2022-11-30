<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from demo.themefisher.com/focus/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Mar 2022 05:14:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('user/assets/images/favicon.png')}}">
    <link href="{{URL::asset('user/assets/css/style.css')}}" rel="stylesheet">

</head>

<body class="h-100 loginbg">
    <div class="authincation h-100 ">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign up your account</h4>
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
                                    <form action="{{url('adduser')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" class="form-control" placeholder="username" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="{{url('userlogin')}}">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{URL::asset('user/assets/vendor/global/global.min.js')}}"></script>
    <script src="{{URL::asset('user/assets/js/quixnav-init.js')}}"></script>
    <!--endRemoveIf(production)-->
</body>


<!-- Mirrored from demo.themefisher.com/focus/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Mar 2022 05:14:43 GMT -->

</html>