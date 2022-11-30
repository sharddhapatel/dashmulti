<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Plus Admin</title>
    <link rel="stylesheet" href="{{ URL::asset('super-master/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('super-master/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('super-master/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('super-master/assets/css/demo_1/style.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.min.css">

    <link rel="shortcut icon" href="{{ URL::asset('super-master/assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-12 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo">
                                <img src="https://www.bootstrapdash.com/demo/plus/jquery/template/assets/images/logo.svg"
                                    alt="logo">
                            </div>
                            <h4 class="brand-logo1">Welcome back!</h4>
                            <h6 class="font-weight-light">Happy to see you again!</h6>

                            @if (Session::has('message'))
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


                            <form class="pt-3"   action="{{url('suserlogin') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-account-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg border-left-0" id=""
                                            placeholder="Username" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg border-left-0"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                                    </div>
                                    <a href="../../changepassword.html" class="auth-link text-black">Forgot
                                        password?</a>
                                </div>
                                <div class="my-3">
                                    <button type="submit"  class="btn btn-primary"> Submit</button>
                                </div>
                                <div class="mb-2 d-flex">
                                    <button type="button" class="btn btn-facebook auth-form-btn flex-grow me-1">
                                        <i class="mdi mdi-facebook me-2"></i>Facebook </button>
                                    <button type="button" class="btn btn-google auth-form-btn flex-grow ms-1">
                                        <i class="mdi mdi-google me-2"></i>Google </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Don't have an account? <a
                                        href="{{ url('super-register') }}" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

    <script src="{{ URL::asset('super-master/assets/vendors/js/vendor.bundle.base.js') }}"></script>

    <script src="{{ URL::asset('super-master/assets/js/off-canvas.js') }}"></script>
    <script src="{{ URL::asset('super-master/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ URL::asset('super-master/assets/js/misc.js') }}"></script>
    <script src="{{ URL::asset('super-master/assets/js/settings.js') }}"></script>
    <script src="{{ URL::asset('super-master/assets/js/todolist.js') }}"></script>

</body>

</html>
