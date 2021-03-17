<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CategoryManageController extends Controller
{
    public function index()
    {
        $data = Category::paginate(Config::get('constant.PAGINATION'));
        return view('admin.category.categoryManage', ['data' => $data]);
    }

    public function getAdd()
    {
        return view('admin.category.categoryAdd');
    }

    public function postAdd()
    {
        return view('admin.category.categoryAdd');
    }

    public function getEdit(Category $category)
    {
        return view('admin.category.categoryEdit', ['data' => $category]);
    }

    public function postEdit()
    {
        return view('admin.category.categoryEdit');
    }

    public function delete()
    {
        return view('admin.category.categoryDelete');
    }
}
