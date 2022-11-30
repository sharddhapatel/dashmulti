<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{URL::asset('super-master/assets/css/demo_1/loginstyle.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,100;1,400;1,900&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    <form class="form-1">
      <input type="text" placeholder="Email id"/>
      <input type="password" placeholder="New Password"/>
      <input type="password" placeholder="Retype Password"/>
      <button class="btn" type="button">Submit</button><br><br>
    <p class="message">Already registered? <a href="{{url('super-login')}}">Sign In</a></p>
  </form>
</div>
</body>
</html>