@extends("layouts.layout")

@section('content')
<div class="content product-detail-screen">
    <!-- start breadcrumb -->
    <div class="header navbar-light bg-light row align-items-center">
        <div class="row">
            <div class="col-md-10 offset-md-1 breadcrumb-box">
                <span class="title">BRIDAL ACCESORIES</span>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Library</li>
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
                        <span class="name">CHIPPED SHELL BEADS</span>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-12 col-6 price-box">
                            <span class="price">$4.00</span>
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
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
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
            <div class="carousel-item active" data-bs-interval="3000">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="row justify-content-between">
                            <div class="col-md-3 col-6">
                                <a href="http://">
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
                                <a href="http://">
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
                                <a href="http://">
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
                                <a href="http://">
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
                                <a href="http://">
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
                                <a href="http://">
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
                                <a href="http://">
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
                                <a href="http://">
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
                                <a href="http://">
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
                                <a href="http://">
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
                                <a href="http://">
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
                                <a href="http://">
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
    <!-- end related product  -->

</div>
@endsection