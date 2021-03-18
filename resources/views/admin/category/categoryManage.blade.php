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
            <li class="breadcrumb-item active" aria-current="page">Quản lý danh mục</li>
        </ol>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <h1 class="page-title">Quản lý danh mục</h1>
    </div>


    <div class="row category-manage container">
        <div class="px-0 mb-3">
            <a href="{{route('category-manage-add')}}">
                <button type="button" class="btn btn-success">
                    <i class="fas fa-plus"></i> Thêm mới danh mục
                </button>
            </a>
        </div>

        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Hành động</th>
            </tr>
            @foreach($data as $index => $item)
            <tr>
                <td>{{($data->currentPage()-1) *$PAGINATION + $index + 1}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <a href="{{route('category-manage-edit', $item->id)}}">
                        <button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                        </button>
                    </a>
                    <a href="{{route('category-manage-delete', $item->id)}}">
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