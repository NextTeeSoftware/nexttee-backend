<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('vendor/coreui/css/coreui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/coreui/fontawesome/css/fontawesome.min.css') }}">

    <title>Login</title>
</head>
<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <h1>Register</h1>
                    <p class="text-muted">Create your account</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="fa fa-user"></i>
                        </span>
                        </div>
                        <input class="form-control" type="text" placeholder="Username">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <input class="form-control" type="text" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="fa fa-lock"></i>
                            </span>
                        </div>
                        <input class="form-control" type="password" placeholder="Password">
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="fa fa-redo"></i>
                            </span>
                        </div>
                        <input class="form-control" type="password" placeholder="Repeat password">
                    </div>
                    <button class="btn btn-block btn-success" type="button">Create Account</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery first, then Popper.js, Bootstrap, then CoreUI  -->
<script src="{{ asset('vendor/coreui/js/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/popper.min.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/coreui.min.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/coreui-utilities.min.js') }}"></script>
</body>
</html>
