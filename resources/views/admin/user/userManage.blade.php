@extends('layouts.admin.layout')

<?php

use Illuminate\Support\Facades\Config;

$PAGINATION =  Config::get('constant.PAGINATION')
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


    <div class="row item-manage container">
        <div class="px-0 mb-3">
            <a href="{{route('user-manage-add')}}">
                <button type="button" class="btn btn-success">
                    <i class="fas fa-plus"></i> Thêm mới người dùng
                </button>
            </a>
        </div>
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>Quyền</th>
                <th>Hành động</th>
            </tr>
            @foreach($data as $index => $item)
            <tr>
                <td>{{($data->currentPage()-1)*$PAGINATION + $index + 1}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>
                    @if($item->is_admin)
                    <span class="badge bg-danger">Admin</span>
                    @else
                    <span class="badge bg-warning">Member</span>
                    @endif
                </td>
                <td>
                    <a href="{{route('user-manage-edit', $item->id)}}">
                        <button type="button" class="btn btn-primary">
                            <i class="far fa-edit"></i>
                        </button>
                    </a>
                    <a href="{{route('user-manage-delete', $item->id)}}">
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