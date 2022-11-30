<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('super-master/assets/css/demo_1/loginstyle.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,100;1,400;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">



        <form class="form-1" action="{{ url('suserlogin') }}" method="post">
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
            {{ csrf_field() }}
            <img src="{{URL::asset('super-master/assets/images/logo.png')}}" alt="logo" />
            <div class="field">
                <label for="text">Username</label>
                <input type="text" name="name" id="name"  placeholder="Username" />
                <label for="password">Password</label>
                <input type="password" name="password" id="password"  placeholder="Password" />
            </div>
            <div class="b-coll">
                <div class="input-box">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Keep me signed in</label>
                </div>
                <a href="{{url('forgot-password')}}">Forgot Password</a>
            </div>

            <button class="btn" type="submit">Submit</button>

            <div class="icons">
                <a class="facebook" href="https://www.facebook.com/" target="blank"><i
                        class="fab fa-facebook-f"></i> Facebook</a>
                <a class="google" href="https://mail.google.com/" target="blank"><i class="fab fa-google"></i>
                    Google</a>
            </div>
            <div class="bottom-line">
                Don't have an account? <a href="#">Create</a>
            </div>
        </form>
    </div>
</body>

</html>
