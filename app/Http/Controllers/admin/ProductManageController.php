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
use Illuminate\Support\Facades\Storage;

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
            'on_sale' => 'required|in:0,1',
            'image' => 'required|image|mimes:jpg,bmp,png,webp,jpeg|max:10240',
        ]);

        try {
            $filepath = $request->file('image')->store("products");

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
            'name' => 'required|unique:products,name,' . $request->id,
            'discription' => 'required',
            'price' => 'required|gte:0',
            'is_top' => 'in:0,1',
            'on_sale' => 'required|in:0,1',
            'image' => 'image|mimes:jpg,bmp,png,webp,jpeg|max:10240'
        ]);

        $request->merge([
            'is_top' => $request->is_top ? 1 : 0
        ]);

        try {
            if ($request->hasFile('image')) {

                DB::beginTransaction();

                $product = Product::find($request->id);
                $product->update($request->all());

                $newFilePath = $request->file('image')->store("products");
                $image = Image::find($product->image->id);
                $image->update(['path' => $newFilePath]);
                Storage::delete($product->image->path);

                DB::commit();
            } else {
                $product = Product::find($request->id);
                $product->update($request->all());
            }
        } catch (Exception $e) {
            if ($request->hasFile('image')) {
                DB::rollBack();
            }
            dd($e);
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
