<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $data = $category;
        $products = Product::where('id', '=', $category->id)->paginate(Config::get('constant.PAGINATION'));
        $categories = Category::all();
        return view(
            'category.category',
            [
                'data' => $category,
                'categories' => $categories,
                'products' => $products
            ]
        );
    }
}
