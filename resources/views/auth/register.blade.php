<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Register | StarWars</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="StarWars" name="description" />
        <meta content="Ayomide Adebayo" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.js.map">
        <link href="{{asset('assets/css/registermain.css')}}"   rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">

    </head>

    <body>
        <div class="home-btn d-none d-sm-block">
            <a href="/" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-sm-5">
             <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-9 col-xl-7">
                <div class="card overflow-hidden">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class=" col -md-6 text-primary p-4">
                                        <h4 id ="logotext">StarWars</h4>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                
                            </div>
                        
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="p-2">
                            <form class="form-horizontal" action="{{route('register')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" class="form-control" name="firstname" id="firstname"
                                                   placeholder="First Name" required value="" required autofocus>
                                                @if ($errors->has('firstname'))
                                                    <span class="errorinput invalid feedback"role="alert">
                                                        <strong>{{ $errors->first('firstname') }}.</strong>
                                                    </span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" class="form-control" name="lastname" id="lastname"
                                                   placeholder="Last Name" required value="">
                                                @if ($errors->has('lastname'))
                                                    <span class="errorinput invalid feedback"role="alert">
                                                        <strong>{{ $errors->first('lastname') }}.</strong>
                                                    </span>
                                                @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="username">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                            placeholder="email" required value="">
                                            @if ($errors->has('email'))
                                                <span class=" errorinput invalid feedback"role="alert">
                                                    <strong>{{ $errors->first('email') }}.</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                   <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="display_name">Display Name</label>
                                            <input type="text" class="form-control" placeholder="Display Name" name="displayname" id="displayname" required value="">
                                            @if ($errors->has('displayname'))
                                                <span class=" errorinput invalid feedback"role="alert">
                                                    <strong>{{ $errors->first('displayname') }}.</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                   placeholder="Password" required value=""  >
                                                @if ($errors->has('password'))
                                                    <span class=" errorinput invalid feedback"role="alert">
                                                        <strong>{{ $errors->first('password') }}.</strong>
                                                    </span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation" required>
                                            @if ($errors->has('password_confirmation'))
                                                <span class="errorinput invalid feedback text-danger" role="alert">
                                                    <strong class = "text-danger">{{ $errors->first('password_confirmation') }}.</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button class="btn btn-primary btn-block waves-effect waves-light rounded-pill bg-dark" type="submit">
                                        Create an Account
                                    </button>
                                </div>

                                {{--<div class="mt-4 text-center">
                                    <p class="mb-0">By registering you agree to the Secured Investment <a href="#" class="text-primary">Terms of Use</a></p>
                                </div>--}}

                            </form>
                        </div>

                        <div class="mt-5 text-center">
                            <p>Already have an account with us? <a href="{{route('login')}}"
                                class="font-weight-medium text-dark"> Login</a>
                            </p>
                            <p>© 2021 <a href="" class = "text-dark font-weight-medium">StarWars</a>. All right reserved</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        
        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>


        <script src="{{asset('assets/libs/toastr/build/toastr.min.js')}}"></script>
        <script type="text/javascript">
          
        </script>

    </body>

    </html>
            

