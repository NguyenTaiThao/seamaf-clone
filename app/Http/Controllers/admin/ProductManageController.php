<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProductManageController extends Controller
{
    //show
    public function index()
    {
        $data = Product::with(['category', 'image'])->orderBy('id', 'desc')->paginate(Config::get('constant.PAGINATION'));
        return view('admin.product.productManage', ['data' => $data]);
    }

    public function getAdd()
    {
        $categories = Category::all();
        return view('admin.product.productAdd', ['categories' => $categories]);
    }


    //add
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

        try {
            $filepath = $request->file('image')->store("public/products");

            DB::beginTransaction();
            $productId = Product::create($request->all())->id;
            $image = new Image(['product_id' => $productId, 'path' => $filepath]);
            $image->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
            return Redirect(back())->withErrors($e->getMessage())->withInput();
        }

        return Redirect(route('product-manage'));
    }


    //edit
    public function getEdit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.productEdit', ['data' => $product, 'categories' => $categories]);
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

        try {
            $product = Product::find($request->id);
            $product->update($request->all());
        } catch (Exception $e) {
            return Redirect(back())->withErrors($e->getMessage())->withInput();
        }

        return Redirect(route('product-manage'));
    }


    //delete
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
