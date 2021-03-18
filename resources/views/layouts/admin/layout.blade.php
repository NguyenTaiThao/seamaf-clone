<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

$curRoute = Route::current();

$user = Auth::user();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeaMaf Admin</title>


    <!-- include resource  -->
    <base href="{{asset('')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome-pro-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="css/admin/app.css">
    <link rel="stylesheet" href="css/admin/dashboard.css">
    <link rel="stylesheet" href="css/admin/productManage.css">


    <!-- inlude javascript -->
    <script src="assets/bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- start header  -->
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{asset('admin/dashboard')}}"><span> SeaMaf</span>Shop</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">

                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item {{$curRoute->named('')}} dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="far fa-user-circle"></i> {{$user->name}}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Hồ sơ</a></li>
                                <li><a class="dropdown-item" href="{{route('admin-logout')}}">Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header  -->



        <div class="row">
            <!-- start nav bar -->
            <ul class="nav flex-column col-md-2 sidebar px-0" id="navbarNavDarkDropdown">
                <div class="search">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Search...">
                </div>
                <li class="nav-item <?php if ($curRoute->named('dashboard')) echo 'active'; ?>">
                    <a class="nav-link" aria-current="page" href="{{route('dashboard')}}">
                        <i class="fal fa-tachometer-alt-average"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item <?php if (
                                        $curRoute->named('user-manage') ||
                                        $curRoute->named('user-manage-add') ||
                                        $curRoute->named('user-manage-edit')
                                    ) echo 'active'; ?>">
                    <a class="nav-link" href="{{route('user-manage')}}">
                        <i class="fal fa-user"></i>
                        Quản lý thành viên
                    </a>
                </li>
                <li class="nav-item <?php if (
                                        $curRoute->named('category-manage') ||
                                        $curRoute->named('category-manage-add') ||
                                        $curRoute->named('category-manage-edit')
                                    ) echo 'active'; ?>">
                    <a class="nav-link" href="{{route('category-manage')}}">
                        <i class="fal fa-folder"></i>
                        Quản lý danh mục
                    </a>
                </li>
                <li class="nav-item <?php if (
                                        $curRoute->named('product-manage') ||
                                        $curRoute->named('product-manage-add')||
                                        $curRoute->named('product-manage-edit')
                                    ) echo 'active'; ?>">
                    <a class="nav-link" href="{{route('product-manage')}}">
                        <i class="fal fa-shopping-bag"></i>
                        Quản lý sản phẩm
                    </a>
                </li>
            </ul>
            <!-- end nav bar -->


            <!-- start content -->
            <div class="col-md-10 px-0 content-box">
                @yield('content')
            </div>
            <!-- end content  -->
        </div>
    </div>


</body>

</html>