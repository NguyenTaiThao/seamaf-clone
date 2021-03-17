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
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <h1 class="page-title">Dashboard</h1>
    </div>
    <div class="row dashboard">
        <div class="col-md-3">
            <div class="dashboard-info product">
                <div class="row h-100">
                    <div class="col-md-5 icon">
                        <i class="fal fa-shopping-bag dashboard-icon"></i>
                    </div>
                    <div class="col-md-7 info">
                        <div class="quantity">{{$productCount}}</div>
                        <div class="discription"> Sản phẩm</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-info comment">
                <div class="row h-100">
                    <div class="col-md-5 icon">
                        <i class="fal fa-comment dashboard-icon"></i>
                    </div>
                    <div class="col-md-7 info">
                        <div class="quantity">{{$categoryCount}}</div>
                        <div class="discription"> Loại sản phẩm</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-info user">
                <div class="row h-100">
                    <div class="col-md-5 icon">
                        <i class="fal fa-user-chart dashboard-icon"></i>
                    </div>
                    <div class="col-md-7 info">
                        <div class="quantity">{{$userCount}}</div>
                        <div class="discription"> Người dùng</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-info advertisement">
                <div class="row h-100">
                    <div class="col-md-5 icon">
                        <i class="fal fa-ad dashboard-icon"></i>
                    </div>
                    <div class="col-md-7 info">
                        <div class="quantity">23,4k</div>
                        <div class="discription"> Quảng cáo</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection