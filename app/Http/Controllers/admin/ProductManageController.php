<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ProductManageController extends Controller
{
    public function index()
    {
        $data = Product::paginate(Config::get('constant.PAGINATION'));
        return view('admin.product.productManage', ['data' => $data]);
    }

    public function getAdd()
    {
        return view('admin.product.productAdd');
    }

    public function postAdd()
    {
        return view('admin.product.productAdd');
    }

    public function getEdit(Product $product)
    {
        return view('admin.product.productEdit', ['data' => $product]);
    }

    public function postEdit()
    {
        return view('admin.product.productEdit');
    }

    public function delete()
    {
        return view('admin.product.productDelete');
    }
}
