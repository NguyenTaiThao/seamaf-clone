<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $userCount = User::count();
        $productCount = Product::count();
        $categoryCount = Category::count();

        $data = [
            'userCount'=>$userCount,
            'productCount'=>$productCount,
            'categoryCount'=>$categoryCount,
        ];

        return view('admin.dashboard', $data);
    }
}
