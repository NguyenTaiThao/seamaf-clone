@extends('layouts.admin.layout')

<?php

use Illuminate\Support\Facades\Config;

$PAGINATION = Config::get('constant.PAGINATION');
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
            <li class="breadcrumb-item active" aria-current="page">Quản lý sản phẩm</li>
        </ol>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <h1 class="page-title">Quản lý sản phẩm</h1>
    </div>


    <div class="row product-manage container">
        <div class="px-0 mb-3">
            <a href="{{route('product-manage-add')}}">
                <button type="button" class="btn btn-success">
                    <i class="fas fa-plus"></i> Thêm mới sản phẩm
                </button>
            </a>
        </div>

        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Ảnh sản phẩm</th>
                <th>Trạng thái</th>
                <th>Danh mục</th>
                <th>Hành động</th>
            </tr>
            @foreach($data as $index=>$item)
            <tr>
                <td>{{($data->currentPage()-1)*$PAGINATION + $index + 1}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>
                    <div class="image">
                        <img src="{{asset('assets/img/product/'.$item->image->path)}}" class="w-100" alt="">
                    </div>
                </td>
                <td>
                    @if($item->is_top)
                    <span class="badge bg-danger">hot</span>
                    @endif
                    @if($item->on_sale)
                    <span class="badge bg-success">sale</span>
                    @endif
                </td>
                <td>{{$item->category->name}}</td>
                <td>
                    <a href="{{route('product-manage-edit', $item->id)}}">
                        <button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                        </button>
                    </a>
                    <a href="{{route('product-manage-delete', $item->id)}}">
                        <button type="button" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="pagination-box">
            {{ $data->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>
@endsection