<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signup2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 May 2019 10:50:36 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title> Registration Portal</title>
  <!--favicon-->
  <link rel="icon" href="{{ URL::to('assets/images/favicon.ico') }}" type="image/x-icon">
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

 @if(session()->has('status'))
 <div class="load"></div>
 <script>
  window.addEventListener('load', function(event) {
    swal("Oopz!", "{{ session()->get('status') }}", "error");
  });
</script>
@endif

<!-- Start wrapper-->
<div id="wrapper">
 <div class="card-authentication2 mx-auto my-3">
  <div class="card-group">
    <div class="card mb-0">
     <div class="bg-signup2"></div>
     <div class="card-img-overlay rounded-left my-5">
       <h2 class="text-white">Online Payment Portal</h2>
       <p class="card-text text-white pt-3">You can make payment online with your details or you can visit the nearest bank to make payment after return to the site to proceed your Registration.</p>
     </div>
   </div>

   <div class="card mb-0">
    <div class="card-body">
      <div class="card-content p-3">
        <div class="text-center">
          <img src="{{ URL::to('assets/images/logo-icon.png') }}">
        </div>
        <div class="card-title text-uppercase text-center py-3">Make Payment</div>
        <form id="signupForm"  method="POST" action="{{ route('portal.create') }}">
          @csrf
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
               <div class="position-relative has-icon-left">
                <label for="input-1" class="sr-only">Name</label>
                <input type="text" id="input-1" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off" placeholder="First Name">
                <div class="form-control-position">
                  <i class="icon-user"></i>
                </div>

                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="position-relative has-icon-left">
                <label for="input-14" class="sr-only">Amount</label>
                <input type="text" id="input-14" name="amount" value="{{ old('amount') }}" class="form-control" placeholder="Amount" autocomplete="off" required>
                <div class="form-control-position">
                  <i class="icon-user"></i>
                </div>
              </div>
            </div>
          </v-container>
        </div>
      </div>
      <div class="form-group">
       <div class="position-relative has-icon-left">
        <label for="exampleInputEmailId" class="sr-only">Email Address</label>
        <input type="text" id="exampleInputEmailId" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address" autocomplete="off" required>
        <div class="form-control-position">
          <i class="icon-envelope-open"></i>
        </div>
      </div>
    </div>
    <div class="form-group">
     <div class="position-relative has-icon-left">
      <label for="exampleInputPassword" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
      <div class="form-control-position">
        <i class="icon-lock"></i>
      </div>
    </div>
  </div>
  <div class="form-group">
   <div class="position-relative has-icon-left">
    <label for="exampleInputRetryPassword" class="sr-only">Retype Password</label>
    <input type="password" id="exampleInputRetryPassword" name="password_confirmation" class="form-control" placeholder="Retry Password" autocomplete="off" required>
    <div class="form-control-position">
      <i class="icon-lock"></i>
    </div>
  </div>
</div>
<div class="form-group">
 <div class="icheck-primary">
  <input type="checkbox" id="user-checkbox" checked="" />
  <label for="user-checkbox">I Accept terms & conditions</label>
</div>
</div>
<button type="submit" class="btn btn-outline-primary btn-block waves-effect waves-light">Continue</button>
<div class="text-center pt-3">
 <hr>
 <p class="text-muted">Already make payment? <a href="{{ route('login') }}"> Proceed here</a></p>
</div>
</form>
</div>
</div>
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

<!--Sweet Alerts -->
<script src="{{ URL::to('assets/plugins/alerts-boxes/js/sweetalert.min.js') }}"></script>
<script src="assets/plugins/alerts-boxes/js/sweet-alert-script.js"></script>

<!--Form Validatin Script-->
<script src="{{ URL::to('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
<script>

  $().ready(function() {

    $("#personal-info").validate();

   // validate signup form on keyup and submit
   $("#signupForm").validate({
    rules: {
      name: "required",
      age: {
        required: true,
      },
      password: {
        required: true,
        minlength: 6
      },
      password_confirmation: {
        required: true,
        minlength: 6,
        equalTo: "#password"
      },
      email: {
        required: true,
        email: true
      },
      agree: "required"
    },
    messages: {
      name: "Please enter your first name",
      age: {
        required: "Please enter your age",
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long"
      },
      password_confirmation: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long",
        equalTo: "Please enter the same password as above"
      },
      email: "Please enter a valid email address",
    }
  });

 });

</script>

</body>
</html>
