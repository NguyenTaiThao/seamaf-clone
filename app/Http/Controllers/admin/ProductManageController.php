<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Echo_;

class ProductManageController extends Controller
{
    public function index()
    {
        $data = Product::with(['category', 'image'])->orderBy('id', 'desc')->paginate(Config::get('constant.PAGINATION'));
        return view('admin.product.productManage', ['data' => $data]);
    }

    public function getAdd()
    {
        return view('admin.product.productAdd');
    }

    public function postAdd(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|unique:products|',
            'discription' => 'required',
            'price' => 'required|gte:0',
            'is_top' => 'required|in:0,1',
            'on_sale' => 'required|in:0,1',
        ]);

        try{
            Product::create($request->all());
        }catch(Exception $e){
            return Redirect(back())->withErrors($e->getMessage())->withInput();
        }

        return Redirect(route('product-manage'));
    }

    public function getEdit(Product $product)
    {
        return view('admin.product.productEdit', ['data' => $product]);
    }

    public function postEdit(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|unique:products|',
            'discription' => 'required',
            'price' => 'required|gte:0',
            'is_top' => 'required|in:0,1',
            'on_sale' => 'required|in:0,1',
        ]);

        try{
            $product = Product::find($request->id);
            $product->update($request->all());
        }catch(Exception $e){
            return Redirect(back())->withErrors($e->getMessage())->withInput();
        }

        return Redirect(route('product-manage'));
    }

    public function delete(Product $product)
    {
        try {
            $product->delete();
        } catch (Exception $e) {
            return Redirect(back())->withErrors($e->getMessage());
        }

        return Redirect(route('product-manage'));
    }
}
