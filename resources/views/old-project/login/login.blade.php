@extends('layouts.master')
@section('title','NK Music | Login Now')
@section('add-css')
<style>
.row {
    margin-right: 1px; 
     margin-left: 1px;
}


</style>
@endsection
@section('content')
<div class="main-content">
    <!-- Section: inner-header -->



    <section class="page-header" data-bg-image="media/background/7.jpg">
        <div class="tim-container">
            <div class="page-header-title text-center">
                <h3>Login Now</h3>
            </div>

            <div class="breadcrumbs">
                <a href="#">Home</a>
                <span>/</span>
                <span>Login Now</span>
            </div>
        </div>
        <!-- /.tim-container -->
    </section>




    <section>
      <div class="container">
        <div class="row">
        <div class="col-md-3 col-md-push-3"></div>
          <div class="col-md-6 col-md-push-3" style="box-shadow: 0 0 10px 5px;margin-top: 46px;">
            <h4 class="text-gray mt-0 pt-5"> Login</h4>
            <hr>
            <p>Enter Your Email and Password</p>
            <form name="login-form" class="clearfix" method="POST" action="{{ route('login_now_action') }}">
            @csrf
            

            @if ($message = Session::get('error'))
							<div class="alert alert-danger" role="alert">
								<button type="button" class="close" data-dismiss="alert">×</button>	
									<strong>{{ $message }}</strong>
							</div>
							
							@endif
              <div class="row">
              
                <div class="form-group col-md-12">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email.">
                  <div class="text-danger"><strong id="email_error"></strong></div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password.">
                  <!--<input type="checkbox" onclick="myFunction()">Show Password-->
                  <div class="text-danger"><strong id="password_error"></strong></div>
                </div>
              </div>
              
              
              <button type="submit" class="btn btn-dark btn-lg btn-block mt-15" style="margin-bottom: 20px;">
                                    {{ __('Login') }}
                                </button>
              
              <!-- <div class="clear text-center pt-10">
                <a class="text-theme-colored font-weight-600 font-12" href="#">Forgot Your Password?</a>
              </div> -->
              
            </form>
          </div>
          <div class="col-md-3 col-md-push-3"></div>
        </div>
      </div>
    </section>
    <br><br><br>
  </div>
  
  <script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
@endsection


    
