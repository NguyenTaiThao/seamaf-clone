@extends("layouts.layout")

<?php
$count = count($latestPrds);
$itemNum = 4;
$slideNum = ceil($count / $itemNum);
?>

@section('content')
<!-- start slider -->
@include("layouts.slider")
<!-- end slider  -->


<!-- start feature section  -->
@include("layouts.feature")
<!-- end feature section  -->
<div class="content">

    <!-- start latest product  -->
    <div class="latest-product">
        <div class="product-type">
            <span class="title-text">LATEST PRODUCT</span>
        </div>

        <div id="latestProductsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @for($i=0; $i<$slideNum; $i++) <div class="carousel-item {{$i==0 ? 'active' :''}}" data-bs-interval="{{$i!=$slideNum-1 ||$i!=0 ? '3000' : ''}}">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <div class="row">
                                @for($j = $i*$itemNum; $j < ($i+1)*$itemNum && $j < $count; $j++) <div class="col-md-3 col-6">
                                    <a href="{{route('product-detail',$latestPrds[$j]->id)}}">
                                        <div class="product-item">
                                            <div class="image">
                                                @if($latestPrds[$j]->is_top == 1)
                                                <span class="badge rounded-pill bg-success is-new-product">New</span>
                                                @endif
                                                <img src="{{asset('storage/'.$latestPrds[$j]->image->path)}}" class="d-block w-100 product-img" alt="...">
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
                                                        <span class="name">{{$latestPrds[$j]->name}}</span>
                                                    </div>
                                                    <div class="col-md-4 price-box">
                                                        <span class="price">${{number_format($latestPrds[$j]->price, 2, '.','')}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                            </div>
                            @endfor
                        </div>
                    </div>
            </div>
        </div>
        @endfor
    </div>
</div>
</div>
<!-- end latest product  -->


<!-- start ad section  -->
<div class="ad-section"></div>
<!-- end ad section  -->


<!-- start top selling product  -->
<div class="top-selling-product">
    <div class="product-type">
        <span class="title-text">BROWSE TOP SELLING PRODUCTS</span>
    </div>
    <div class="row justify-content-center row-product">
        <div class="col-md-9">
            <div class="row justify-content-between">
                @foreach($topSellingPrds as $prd)
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
<!-- end top selling product  -->


<!-- start ad section 2 -->
<div class="ad-section"></div>
<!-- end ad section 2 -->

</div>
@endsection