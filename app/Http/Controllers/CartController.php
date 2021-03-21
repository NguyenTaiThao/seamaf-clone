<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Brian2694\Toastr\Facades\Toastr;

class CartController extends Controller
{
    //show
    public function index()
    {
        $data = [];
        if (Auth::check()) {
            $data = Auth::user()->products->where(['status', '=', Config::get('constant.CART_STATUS.IN_CART')]);
        }
        return view('cart.cart', ['data' => $data]);
    }

    //add cart
    public function add(Request $request)
    {
        if (Auth::check()) {
            Auth::user()->attachProduct($request->productId, $request->quantity);
            Toastr::success('Product was added to your cart', 'Success');
            return Redirect(route('cart'));
        } else {
            Toastr::warning('Login is required when using cart function.', 'Warning');
            return Redirect(route('sign-in'));
        }
    }
}
