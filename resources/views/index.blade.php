@extends("layouts.layout")

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

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <div class="row justify-content-between">
                                <div class="col-md-3 col-6">
                                    <a href="{{asset('product-detail')}}">
                                        <div class="product-item">
                                            <div class="image">
                                                <span class="badge rounded-pill bg-success is-new-product">New</span>
                                                <img src="{{asset('assets/img/product/1.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                                        <span class="name">sparkling earrings</span>
                                                    </div>
                                                    <div class="col-md-4 price-box">
                                                        <span class="price">$3.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a href="{{asset('product-detail')}}">
                                        <div class="product-item">
                                            <div class="image">
                                                <span class="badge rounded-pill bg-success is-new-product">New</span>
                                                <img src="{{asset('assets/img/product/2.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                                        <span class="name">sparkling earrings</span>
                                                    </div>
                                                    <div class="col-md-4 price-box">
                                                        <span class="price">$3.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a href="{{asset('product-detail')}}">
                                        <div class="product-item">
                                            <div class="image">
                                                <span class="badge rounded-pill bg-success is-new-product">New</span>
                                                <img src="{{asset('assets/img/product/3.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                                        <span class="name">sparkling earrings</span>
                                                    </div>
                                                    <div class="col-md-4 price-box">
                                                        <span class="price">$3.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a href="{{asset('product-detail')}}">
                                        <div class="product-item">
                                            <div class="image">
                                                <span class="badge rounded-pill bg-success is-new-product">New</span>
                                                <img src="{{asset('assets/img/product/1.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                                        <span class="name">sparkling earrings</span>
                                                    </div>
                                                    <div class="col-md-4 price-box">
                                                        <span class="price">$3.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <div class="row justify-content-between">
                                <div class="col-md-3 col-6">
                                    <a href="{{asset('product-detail')}}">
                                        <div class="product-item">
                                            <div class="image">
                                                <span class="badge rounded-pill bg-success is-new-product">New</span>
                                                <img src="{{asset('assets/img/product/1.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                                        <span class="name">sparkling earrings</span>
                                                    </div>
                                                    <div class="col-md-4 price-box">
                                                        <span class="price">$3.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a href="{{asset('product-detail')}}">
                                        <div class="product-item">
                                            <div class="image">
                                                <span class="badge rounded-pill bg-success is-new-product">New</span>
                                                <img src="{{asset('assets/img/product/2.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                                        <span class="name">sparkling earrings</span>
                                                    </div>
                                                    <div class="col-md-4 price-box">
                                                        <span class="price">$3.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a href="{{asset('product-detail')}}">
                                        <div class="product-item">
                                            <div class="image">
                                                <span class="badge rounded-pill bg-success is-new-product">New</span>
                                                <img src="{{asset('assets/img/product/3.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                                        <span class="name">sparkling earrings</span>
                                                    </div>
                                                    <div class="col-md-4 price-box">
                                                        <span class="price">$3.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a href="{{asset('product-detail')}}">
                                        <div class="product-item">
                                            <div class="image">
                                                <span class="badge rounded-pill bg-success is-new-product">New</span>
                                                <img src="{{asset('assets/img/product/1.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                                        <span class="name">sparkling earrings</span>
                                                    </div>
                                                    <div class="col-md-4 price-box">
                                                        <span class="price">$3.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="row justify-content-center">
                        <div class="col-md-9">
                            <div class="row justify-content-between">
                                <div class="col-md-3 col-6">
                                    <a href="{{asset('product-detail')}}">
                                        <div class="product-item">
                                            <div class="image">
                                                <span class="badge rounded-pill bg-success is-new-product">New</span>
                                                <img src="{{asset('assets/img/product/1.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                                        <span class="name">sparkling earrings</span>
                                                    </div>
                                                    <div class="col-md-4 price-box">
                                                        <span class="price">$3.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a href="{{asset('product-detail')}}">
                                        <div class="product-item">
                                            <div class="image">
                                                <span class="badge rounded-pill bg-success is-new-product">New</span>
                                                <img src="{{asset('assets/img/product/2.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                                        <span class="name">sparkling earrings</span>
                                                    </div>
                                                    <div class="col-md-4 price-box">
                                                        <span class="price">$3.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a href="{{asset('product-detail')}}">
                                        <div class="product-item">
                                            <div class="image">
                                                <span class="badge rounded-pill bg-success is-new-product">New</span>
                                                <img src="{{asset('assets/img/product/3.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                                        <span class="name">sparkling earrings</span>
                                                    </div>
                                                    <div class="col-md-4 price-box">
                                                        <span class="price">$3.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a href="{{asset('product-detail')}}">
                                        <div class="product-item">
                                            <div class="image">
                                                <span class="badge rounded-pill bg-success is-new-product">New</span>
                                                <img src="{{asset('assets/img/product/1.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                                        <span class="name">sparkling earrings</span>
                                                    </div>
                                                    <div class="col-md-4 price-box">
                                                        <span class="price">$3.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                    <div class="col-md-3 col-6">
                        <a href="{{asset('product-detail')}}">
                            <div class="product-item">
                                <div class="image">
                                    <span class="badge rounded-pill bg-success is-new-product">New</span>
                                    <img src="{{asset('assets/img/product/1.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                            <span class="name">sparkling earrings</span>
                                        </div>
                                        <div class="col-md-4 price-box">
                                            <span class="price">$3.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{asset('product-detail')}}">
                            <div class="product-item">
                                <div class="image">
                                    <span class="badge rounded-pill bg-success is-new-product">New</span>
                                    <img src="{{asset('assets/img/product/1.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                            <span class="name">sparkling earrings</span>
                                        </div>
                                        <div class="col-md-4 price-box">
                                            <span class="price">$3.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{asset('product-detail')}}">
                            <div class="product-item">
                                <div class="image">
                                    <span class="badge rounded-pill bg-success is-new-product">New</span>
                                    <img src="{{asset('assets/img/product/1.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                            <span class="name">sparkling earrings</span>
                                        </div>
                                        <div class="col-md-4 price-box">
                                            <span class="price">$3.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{asset('product-detail')}}">
                            <div class="product-item">
                                <div class="image">
                                    <span class="badge rounded-pill bg-success is-new-product">New</span>
                                    <img src="{{asset('assets/img/product/1.webp')}}" class="d-block w-100 product-img" alt="...">
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
                                            <span class="name">sparkling earrings</span>
                                        </div>
                                        <div class="col-md-4 price-box">
                                            <span class="price">$3.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
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