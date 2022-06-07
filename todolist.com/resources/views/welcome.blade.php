<!doctype html>
<html lang="{{ app()->getLocale() }}">
<section class="h-100 gradient-form" style="background-color: #eee;">  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> 

        <!-- Styles 
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
              
                font-weight: 500;
                
                margin: 0;
            
            }



        

            .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
            }

            @media (min-width: 768px) {
            .gradient-form {
            height: 100vh !important;
            }
            }
            @media (min-width: 769px) {
            .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
            }
            }
        </style>
    

    

        
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10" style= "margin-top:10px; margin-bottom:50px;">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
            <div class="card mb-4 box-shadow h-100">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
               
                <img src="https://is1-ssl.mzstatic.com/image/thumb/Purple125/v4/e0/f5/ba/e0f5ba04-9365-4933-db64-2f8ab0204242/AppIcon-1x_U007emarketing-0-10-0-85-220.png/400x400.png"
                    style="width: 95px;" alt="logo">
                
                  <h4 class="mt-1 mb-3 pb-1">TODOLIST APP</h4>
                </div>

                <p class="text-dark">{{ __('Please login to your account') }}</p>
                  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                   
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="{{ __('Password') }}" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            
                                <div class="custom-control custom-checkbox small">
                            
                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                        
                        <div class="form-group">
                           
                                <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
                                {{ __('Login') }}
                                </button>
                                </div>
                            
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                  
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a href="{{ url('/register') }}" class="btn btn-outline-danger" style= margin-left:20px;>Register</button>
                   </a>
                  </div>
                  </div>
                  </div>
                </form>
                </div>
            
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2" style= margin-left:-14px;>
                            
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Plan your days safely</h4>
                <p class="small mb-0"> Get your work done. Create a to-do list that helps you organize and keep track of things to do. Instead of worrying about what is still left for you to do, you can look at your current to-do list and get organized </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </section>
   <!-- <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ route('home') }}">Tasks</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <span class="glyphicon glyphicon-tasks home-logo" aria-hidden="true"></span>
                <div class="title m-b-md">
                    Intermediate Task List
                </div>  
            </div>
        </div>-->
    
</html>
