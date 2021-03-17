<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class UserManageController extends Controller
{
    public function index()
    {
        $data = User::paginate(Config::get('constant.PAGINATION'));
        return view('admin.user.userManage', ['data' => $data]);
    }

    public function getAdd(){
        return view('admin.user.userAdd');
    }

    public function postAdd(){
        return view('admin.user.userAdd');
    }

    public function edit(){
        return view('admin.user.userEdit');
    }

    public function delete(){
        return view('admin.user.userDelete');
    }
}
