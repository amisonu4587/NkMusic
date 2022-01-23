<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Responsive Bootstrap 5 Dashboard Template" />
        <meta name="author" content="ParkerThemes" />
        <link rel="shortcut icon" href="img/fav.png" />
        <title>Admin Login</title>
        <link rel="stylesheet" href="user/css/bootstrap.min.css" />
        <link rel="stylesheet" href="user/css/animate.css" />
        <link rel="stylesheet" href="user/fonts/icomoon/icomoon.css" />
        <link rel="stylesheet" href="user/css/main.css" />
    </head>
    <body class="login-container">
        <div id="loading-wrapper">
            <div class="spinner-border"></div>
            <div class="loading-messsage"><span>L</span><span>o</span><span>a</span><span>d</span><span>i</span><span>n</span><span>g</span></div>
        </div>
        <div class="container">
              <!-- Session Status -->
        
        <form method="POST" action="{{ route('userLoginAction') }}">
            @csrf
            
                <div class="login-box">
                    <div class="login-blocks-img"></div>
                    <div class="login-form">
                        <a href="#" class="login-logo">
                            <!-- <img src="user/img/logo-white.svg" alt="Cliq Admin" /> -->
                            <h4 style="color:white;">NK Music Distribution</h4>
                        </a>
                        <x-auth-session-status class="mb-4" :status="session('status')" style="color: red;font-family: Merriweather;" />
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors"  style="color: red;font-family: Merriweather;"/>
                        <div class="login-welcome">
                            Welcome back, <br />
                            Please login to your account.
                        </div>
                        <div class="login-form-block"><label class="login-form-label">Username</label><input type="text" id="email" type="email"  class="login-form-control" name="email" required autofocus autocomplete="off"/></div>
                        <div class="login-form-block"><label class="login-form-label">Password</label><input id="password" type="password" class="login-form-control"  type="password"name="password" required autocomplete="off"/></div>
                        <div class="login-form-actions">
                            <a href="{{ route('password.request') }}" class="btn-link">Forgot password?</a>

                            <button type="submit" class="btn">
                                <span class="icon"><i class="icon-login"></i></span>Login
                            </button>
                            <!-- <button type="submit" class="btn">
                                Login
                            </button> -->
                        </div>
                        <!-- <div class="login-form-actions2">
                            <button type="submit" class="btn"><img src="user/img/google.svg" class="login-icon" alt="Login with Google" />Google</button>
                            <button type="submit" class="btn"><img src="user/img/facebook.svg" class="login-icon" alt="Login with Facebook" />Facebook</button>
                        </div> -->
                        <!-- <div class="login-form-footer">
                            <div class="additional-link">Don't have an account? <a href="signup.html" class="btn">Signup</a></div>
                        </div> -->
                    </div>
                </div>
            </form>
        </div>
        <script src="user/js/jquery.min.js"></script>
        <script src="user/js/main.js"></script>
    </body>
</html>
