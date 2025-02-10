<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.css')}}">
    
    <link rel="shortcut icon" href="{{asset('user/assets/images/favicon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('user/assets/css/app.css')}}">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="{{asset('user/assets/images/favicon.svg')}}" height="48" class='mb-4'>
                        <h3>Sign Up</h3>
                        <p>Please fill the form to register.</p>
                    </div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" id="first-name-column" class="form-control"  name="username">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="last-name-column" class="form-control"  name="email">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="password-column">Password</label>
                                    <input type="password" id="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input type="password" id="password-confirm" class="form-control" name="password_confirmation">
                                </div>
                            </div>
                        </diV>

                                <a href="auth-login.html">Have an account? Login</a>
                        <div class="clearfix">
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="{{asset('user/assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('user/assets/js/app.js')}}"></script>
    
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>