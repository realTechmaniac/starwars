
<!doctype html>
<html lang="en">
<head>

    <title>Starwars | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <link href="{{asset('assets/css/loginmain.css')}}"   rel="stylesheet" type="text/css" />

</head>

<body>
<div class="home-btn d-none d-sm-block">
            <a href="/" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden shadow-sm p-3 mb-5 bg-white rounded" >
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-6 text-primary p-4 col-sm-2">
                                        <div class = "text-center">
                                            <h4 id = "logotext">StarWars</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-2">
                                         
                                    </div>
                                    
                                </div>
                                
                            </div>

                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="p-2">
                            <form class="form-horizontal" action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <!-- <label for="username">Email</label> -->
                                    <input type="text" class="form-control" name="email" id="username" placeholder="Email Address" value="{{ old('email') }}"
                                           required autocomplete="email">
                                    @if ($errors->has('email'))
                                        <span class="errorinput invalid feedback"role="alert">
                                            <strong>{{ $errors->first('email') }}.</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <!-- <label for="password">Password</label> -->
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{ old('password') }}"
                                           required autocomplete="password">
                                    @if ($errors->has('password'))
                                        <span class="errorinput invalid feedback"role="alert">
                                            <strong>{{ $errors->first('password') }}.</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-dark btn-block waves-effect waves-light rounded-pill" type="submit">Login to your account</button>
                                </div>

                                {{--<div class="mt-4 text-center">
                                    <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                </div>--}}
                            </form>
                        </div>

                        <div class="mt-3 text-center">
                            <p>Don't have an account ? <a href="{{route('register')}}" class="font-weight-medium text-dark"> Sign Up here </a> </p>
                            <p>© 2021 <a href="" class ="text-dark font-weight-medium">StarWars</a>. All right reserved</p>
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
