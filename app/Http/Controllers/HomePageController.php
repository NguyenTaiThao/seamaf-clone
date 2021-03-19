<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $latestPrds = Product::latest()->limit(12)->get();
        $topSellingPrds = Product::limit(8)->get();
        return view('index', ['latestPrds' => $latestPrds, 'topSellingPrds' => $topSellingPrds]);
    }
}
