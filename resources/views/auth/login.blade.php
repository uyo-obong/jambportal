<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title> Registration Portal</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ URL::to('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ URL::to('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ URL::to('assets/css/app-style.css') }}" rel="stylesheet"/>
  
</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
  <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
    <div class="card-body">
     <div class="card-content p-2">
      <div class="text-center">
        <img src="assets/images/logo-icon.png">
      </div>
      <div class="card-title text-uppercase text-center py-3">Login</div>
      <form  method="POST" action="{{ route('login') }}">
       @csrf
       <div class="form-group">
         <div class="position-relative has-icon-right">
          <label for="exampleInputUsername" class="sr-only">Email Address</label>
          <input type="email" id="exampleInputUsername" class="form-control form-control-rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email Address" required >
          <div class="form-control-position">
            <i class="icon-user"></i>
          </div>

          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

        </div>
      </div>
      <div class="form-group">
       <div class="position-relative has-icon-right">
        <label for="exampleInputPassword" class="sr-only">Password</label>
        <input type="password" id="exampleInputPassword" class="form-control form-control-rounded @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
        <div class="form-control-position">
          <i class="icon-lock"></i>
        </div>

        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>
    <div class="form-row mr-0 ml-0">
     <div class="form-group col-6">
       <div class="icheck-primary">
        <input type="checkbox" id="user-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
        <label for="user-checkbox">Remember me</label>
      </div>
    </div>
    <div class="form-group col-6 text-right">
      @if (Route::has('password.request'))
      <a href="{{ route('password.request') }}">
        {{ __('Reset Password') }}
      </a>
      @endif
    </div>
  </div>
  <button type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Login</button>
  <div class="text-center pt-3">
    {{-- <p></p> --}}
    <hr>
    <p class="text-muted">You can <a href="{{ route('portal.register') }}"> Apply here</a></p>
  </div>
</form>
</div>
</div>
</div>

<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->
</div><!--wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
<script src="{{ URL::to('assets/js/popper.min.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>

</body>
</html>
