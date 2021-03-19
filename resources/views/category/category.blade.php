@extends('layouts.layout')

@section('content')
<div class="content product-detail-screen">
    <!-- start breadcrumb -->
    <div class="header navbar-light bg-light row align-items-center">
        <div class="row">
            <div class="col-md-10 offset-md-1 breadcrumb-box">
                <span class="title">BRIDAL ACCESORIES</span>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                        <li class="breadcrumb-item">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- end breadcrumb  -->
    <br>
    <br>
    <br>
    <div class="container category">
        <div class="row">
            <div class="col-md-2 pr-3 category-left">
                <p class="category-title">CATEGORIES</p>
                <br>
                <ul class="list-group list-group-flush">
                    @foreach($categories as $category)
                    <li class="list-group-item">
                        <a href="{{route('category', $category->id)}}">{{$category->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9 category-right">
                <div class="row justify-content-center row-product">
                    <div class="col-md-12">
                        <div class="row justify-content-between">
                            @foreach($data->products as $prd)
                            <div class="col-md-3 col-6">
                                <a href="{{route('product-detail', $prd->id)}}">
                                    <div class="product-item">
                                        <div class="image">
                                            @if($prd->is_top)
                                            <span class="badge rounded-pill bg-success is-new-product">New</span>
                                            @endif
                                            <img src="{{asset('storage/'.$prd->image->path)}}" class="d-block w-100 product-img" alt="...">
                                            <div class="action-btn">
                                                <button type="button" class="btn btn-outline-light">
                                                    <i class="fal fa-cart-plus icon-btn"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-light">
                                                    <i class="fal fa-heart icon-btn"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="discription">
                                            <div class="row">
                                                <div class="col-md-8 name-box">
                                                    <span class="name">{{$prd->name}}</span>
                                                </div>
                                                <div class="col-md-4 price-box">
                                                    <span class="price">${{number_format($prd->price, 2, '.','')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{ $products->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>
@endsection