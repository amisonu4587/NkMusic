<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Fully Responsive Bootstrap 4 Admin Dashboard Template">
	<meta name="author" content="Creative Tim">

	<!-- Title -->
	<title>Login </title>

	<!-- Favicon -->
	<link href="assets/img/brand/favicon.png" rel="icon" type="image/png">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

	<!-- Icons -->
	<link href="assets/css/icons.css" rel="stylesheet">

	<!--Bootstrap.min css-->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Adon CSS -->
	<link href="assets/css/dashboard.css" rel="stylesheet" type="text/css">

	<!-- Single-page CSS -->
	<link href="assets/plugins/single-page/css/main.css" rel="stylesheet" type="text/css">

</head>

<body class="bg-gradient-primary">
	<div class="page">
		<div class="page-main">
			<div class="limiter">
				<div class="container-login100">
						
					<div class="wrap-login100 p-5">
                        <form method="POST" action="{{ route('adminLoginAction') }}">
                            @csrf
							<div class="logo-img text-center pb-3">
								{{-- <img src="assets/img/brand/logo-dark1.png" alt="logo-img"> --}}
                            NK Music
                            </div>
                            <span class="login100-form-title">
								Admin Login
							</span>


							@if ($message = Session::get('error'))
							<div class="alert alert-danger" role="alert">
								<button type="button" class="close" data-dismiss="alert">×</button>	
									<strong>{{ $message }}</strong>
							</div>
							
							@endif
							

							
                                {{-- <input class="input100" type="hidden" name="email" placeholder="Email"> --}}
                                {{-- <input id="email" type="hidden" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$admin_details->email}}" required autocomplete="email" autofocus> --}}
								
								<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                    <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" />

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </span>
                                </div>

							<div class="wrap-input100 validate-input" data-validate = "Password is required">
                                {{-- <input class="input100" type="password" name="pass" placeholder="Password"> --}}
                                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-lock" aria-hidden="true"></i>
								</span>
							</div>

							<div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </div>
                           
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Adon Scripts -->
	<!-- Core -->
	<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
