<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

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

    public function postAdd(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255|unique:categories',
        ]);

        try {
            Category::create($request->all());
        } catch (Exception $e) {
            dd($e);
            return Redirect(back())->withErrors($e->getMessage())->withInput();
        }

        return Redirect(route('category-manage'));
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
