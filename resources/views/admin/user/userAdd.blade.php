@extends('layouts.admin.layout')

<?php
?>

@section('content')
<nav aria-label="breadcrumb" class="">
    <div class="container-fluid breadcrumb-box">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="#">
                    <i class="fal fa-home-alt home-icon"></i>
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Quản lý tài khoản</li>
        </ol>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <h1 class="page-title">Quản lý tài khoản</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 bg-white">
            <div class="panel panel-default m-md-5 m-2">
                <div class="panel-body">
                    <div class="col-md-8">
                        <form role="form" method="post">
                            @csrf
                            <!-- show error  -->
                            @if ($errors->any())
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger text-center">
                                        {{$errors->all()[0]}}
                                    </div>
                                </div>
                            </div>
                            @endif
                            <!-- end show error  -->
                            <div class="form-group mb-2">
                                <label>Họ & Tên</label>
                                <input name="name" required class="form-control" placeholder="" value="{{old('name')}}">
                            </div>
                            <div class="form-group mb-2">
                                <label>Email</label>
                                <input name="email" required type="email" class="form-control" value="{{old('email')}}">
                            </div>
                            <div class="form-group mb-2">
                                <label>Mật khẩu</label>
                                <input name="password" required type="password" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label>Nhập lại mật khẩu</label>
                                <input name="password_confirmation" required type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Quyền</label>
                                <select name="is_admin" class="form-control" value="{{}}">
                                    <option <?php if (old('is_admin') == 1) echo "selected"; ?> value=1>Admin</option>
                                    <option <?php if (old('is_admin') == 0) echo "selected"; ?> value=0>Member</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                                <button type="reset" class="btn btn-warning">Làm mới</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</div>
@endsection