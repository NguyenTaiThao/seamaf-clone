<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>

    <base href="{{asset('')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome-pro-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="css/admin/login.css">


    <!-- inlude javascript -->
    <script src="assets/bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="h-100 w-100">
    <div class="container h-100 w-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-5 col-10 login-admin">
                <form method="post">
                    @csrf
                    <div class="row mb-3 text-center">
                        <i class="fas fa-scanner logo"></i>
                    </div>

                    <!-- show error  -->
                    @if ($errors->any())
                    <div class="row">
                        <div class="alert alert-danger text-center">
                            {{$errors->all()[0]}}
                        </div>
                    </div>
                    @endif
                    <!-- end show error  -->

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary w-50">Đăng nhập</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>