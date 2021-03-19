<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        $relatedPrds = Product::where('category_id', '=', $product->category_id)->limit(4)->get();
        return view('product.productDetail', ['data' => $product, 'relatedPrds'=>$relatedPrds]);
    }
}
