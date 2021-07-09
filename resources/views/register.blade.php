
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LaraSTORE | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('template')}}/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('template')}}/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('template')}}/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="/"><b>Lara</b>STORE</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <form action="{{ route('register') }}" method="post">
          @csrf

          <div class="form-group has-feedback @error('name') has-error @enderror">
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Full name" autofocus required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group has-feedback @error('email') has-error @enderror">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" autofocus required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group has-feedback @error('password') has-error @enderror">
            <input type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group has-feedback @error('password_confirmation') has-error @enderror">
            <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype Password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>

          <div class="row mt-3">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>
        </form>

        <a href="login.html" class="text-center">I already have a membership</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('template')}}/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('template')}}/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="{{asset('template')}}/plugins/iCheck/icheck.min.js"></script>
  </body>
</html>
