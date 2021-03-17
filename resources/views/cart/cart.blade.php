@extends('layouts.layout')

@section('content')
<div class="content">
    <div class="cart">
        <div class="row justify-content-center">
            <div class="col-md-10 py-4">
                <div class="row">
                    <div class="col-md-8">
                        <div class="list-products">
                            <div class="row">
                                <span class="title">Your cart</span>
                            </div>
                            <div class="row">
                                <div class="col-6 cart-title product-title"><span>Product</span></div>
                                <div class="col-2 cart-title quantity-title"><span>Quantity</span></div>
                                <div class="col-2 cart-title size-title"><span>Size</span></div>
                                <div class="col-md-1 col-2 cart-title price-title"><span>Price</span></div>
                            </div>
                            <div class="row align-items-center cart-item">
                                <div class="col-6 name">
                                    <span>sparkling earring (type3)</span>
                                </div>
                                <div class="col-2 quantity">
                                    <input type="number" class="form-control" id="" value="1" min="0">
                                </div>
                                <div class="col-2 size">
                                    <span>L</span>
                                </div>
                                <div class="col-md-1 col-2 price">
                                    <span>$3.00</span>
                                </div>
                                <div class="col-md-1 del-btn">
                                    <button type="button" class="btn btn-outline-danger">Xóa</button>
                                </div>
                            </div>
                            <div class="row align-items-center cart-item">
                                <div class="col-6 name">
                                    <span>sparkling earring (type3)</span>
                                </div>
                                <div class="col-2 quantity">
                                    <input type="number" class="form-control" id="" value="1" min="0">
                                </div>
                                <div class="col-2 size">
                                    <span>L</span>
                                </div>
                                <div class="col-md-1 col-2 price">
                                    <span>$3.00</span>
                                </div>
                                <div class="col-md-1 del-btn">
                                    <button type="button" class="btn btn-outline-danger">Xóa</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex flex-column justify-content-end">
                        <div class="row icon-box">
                            <i class="fab fa-amazon-pay pay-icon"></i>
                        </div>
                        <div class="row">
                            <div class="input-group mb-4 px-0">
                                <input type="text" class="form-control promo-input" placeholder="Enter promo code" aria-label="Recipient's username" aria-describedby="apply-btn">
                                <button class="input-group-text btn btn-outline-danger promo-btn" id="apply-btn">SUBMIT</button>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-danger checkout-btn">PROCEED CHECKOUT</button>
                            <button type="button" class="btn btn-dark continue-btn">CONTINUE SHOPPING</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection