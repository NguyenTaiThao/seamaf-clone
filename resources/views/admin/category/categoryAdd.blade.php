@extends('layouts.admin.layout')

@section('content')
<nav aria-label="breadcrumb" class="">
    <div class="container-fluid breadcrumb-box">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="#">
                    <i class="fal fa-home-alt home-icon"></i>
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Quản lý danh mục</li>
        </ol>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <h1 class="page-title">Quản lý danh mục</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 bg-white">
            <div class="panel panel-default p-md-5 p-2">
                <div class="panel-body">
                    <div class="col-md-8">
                        <form role="form" method="post">
                            @csrf
                            @if($errors->any())
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger text-center">
                                        {{$errors->all()[0]}}
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <label>Tên danh mục:</label>
                                <input required type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{old('name')}}">
                            </div>
                            <div class="mt-3">
                                <button type="submit" name="sbm" class="btn btn-success">Thêm mới</button>
                                <button type="reset" class="btn btn-warning">Làm mới</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div>
    <!--/.main-->
</div>
@endsection