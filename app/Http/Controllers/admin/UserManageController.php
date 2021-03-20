<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class UserManageController extends Controller
{
    public function index()
    {
        $data = Admin::orderBy('id', 'desc')->paginate(Config::get('constant.PAGINATION'));
        return view('admin.user.userManage', ['data' => $data]);
    }

    public function getAdd()
    {
        return view('admin.user.userAdd');
    }

    public function postAdd(Request $request)
    {
        $request->validate([
            'name' => "required|min:8|max:255",
            'email' => "required|email|unique:users",
            'password' => 'required|min:8|confirmed',
        ]);

        try {
            $admin = new Admin($request->all());
            $admin->save();
        } catch (Exception $e) {
            return Redirect(back())->withErrors($e->getMessage())->withInput();
        }

        return Redirect(route('user-manage'));
    }

    public function getEdit(Admin $admin)
    {
        return view('admin.user.userEdit', ['data' => $admin]);
    }

    public function postEdit(Request $request)
    {
        $request->validate([
            'name' => "required|min:8|max:255",
            'email' => "required|email|unique:users,email," . $request->id,
        ]);

        $admin = Admin::find($request->id);
        $admin->update($request->all());

        return Redirect(route('user-manage'));
    }

    public function delete(Admin $admin)
    {
        if ($admin->id == Auth::guard('admin')->user()->id) {
            return Redirect(route('user-manage'))->withErrors(["You can't remove your own account."]);
        } else {
            try {
                $admin->delete();
            } catch (Exception $e) {
                return Redirect(route('user-manage'))->withErrors($e->getMessage());
            }
        }
        return Redirect(route('user-manage'));
    }
}
