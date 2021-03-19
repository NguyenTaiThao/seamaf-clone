@extends("layouts.layout")

<?php
$itemNum = 4;
$slideNum = ceil(count($relatedPrds) / $itemNum);
?>

@section('content')
<div class="content product-detail-screen">
    <!-- start breadcrumb -->
    <div class="header navbar-light bg-light row align-items-center">
        <div class="row">
            <div class="col-md-10 offset-md-1 breadcrumb-box">
                <span class="title">BRIDAL ACCESORIES</span>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('homepage')}}"><i class="fas fa-home-lg-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item">{{$data->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- end breadcrumb  -->


    <!-- start product detail  -->
    <div class="row product-detail">
        <div class="col-md-10 offset-md-1 mt-4">
            <div class="row">
                <div class="col-md-6 image">
                    <img src="{{asset('assets/img/product/1.webp')}}" class="w-100">
                </div>
                <div class="col-md-6 discription">
                    <div class="row name-box">
                        <span class="name text-uppercase">{{$data->name}}</span>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-12 col-6 price-box">
                            <span class="price">${{number_format($data->price, 2, '.','')}}</span>
                        </div>
                        <div class="col-md-12 col-6 avaibility-box">
                            <span class="text">Avaibility:</span>
                            <span class="avaibility">In Stock</span>
                        </div>
                    </div>
                    <div class="quantity-box">
                        <div class="row align-items-center">
                            <div class="col-md-2 col-4">
                                <span class="text">QUANTITY</span>
                            </div>
                            <div class="col-md-2 col-3">
                                <input type="number" name="" class="form-control" id="" value="1">
                            </div>
                        </div>
                    </div>
                    <div class="cart-btn-box d-flex justify-content-md-start justify-content-center">
                        <button type="button" class="btn btn-danger cart-btn">ADD TO CART</button>
                    </div>
                    <div class="discription-text">
                        <div class="toggle-box d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDiscription" aria-expanded="false" aria-controls="collapseExample">
                            <span>DISCRIPTION</span>
                            <i class="far fa-chevron-down"></i>
                        </div>
                        <div class="collapse" id="collapseDiscription">
                            <div class="card card-body">
                                {{$data->discription}}
                            </div>
                        </div>
                    </div>
                    <div class="shipping-return">
                        <div class="toggle-box d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseShippingReturn" aria-expanded="false" aria-controls="collapseExample">
                            <span>SHIPPING & RETURN</span>
                            <i class="far fa-chevron-down"></i>
                        </div>
                        <div class="collapse" id="collapseShippingReturn">
                            <div class="card card-body">
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product detail  -->


    <!-- start related product  -->
    <div class="product-type">
        <span class="title-text">RELATED PRODUCT</span>
    </div>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @for($i=0; $i<$slideNum; $i++) <div class="carousel-item {{$i==0 ? 'active' :''}}" data-bs-interval="{{$i!=$slideNum-1 ||$i!=0 ? '3000' : ''}}">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="row justify-content-between">
                            @for($j = $i*$itemNum; $j < ($i+1)*$itemNum && $j < count($relatedPrds); $j++) <div class="col-md-3 col-6">
                                <a href="{{route('product-detail', $relatedPrds[$j]->id)}}">
                                    <div class="product-item">
                                        <div class="image">
                                            @if($relatedPrds[$j]->is_top == 1)
                                            <span class="badge rounded-pill bg-success is-new-product">New</span>
                                            @endif
                                            <img src="{{asset('storage/'.$relatedPrds[$j]->image->path)}}" class="d-block w-100 product-img" alt="...">
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
                                                    <span class="name">{{$relatedPrds[$j]->name}}</span>
                                                </div>
                                                <div class="col-md-4 price-box">
                                                    <span class="price">${{number_format($relatedPrds[$j]->price, 2, '.','')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                        </div>
                    </div>
                    @endfor
                </div>
        </div>
    </div>
    @endfor

</div>
</div>
<!-- end related product  -->

</div>
@endsection