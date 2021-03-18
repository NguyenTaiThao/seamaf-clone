<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class UserManageController extends Controller
{
    public function index()
    {
        $data = User::orderBy('id', 'desc')->paginate(Config::get('constant.PAGINATION'));
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
            'is_admin' => 'required',
        ]);

        try {
            $user = new User($request->all());
            $user->save();
        } catch (Exception $e) {
            return Redirect(back())->withErrors($e->getMessage())->withInput();
        }

        return Redirect(route('user-manage'));
    }

    public function getEdit(User $user)
    {
        return view('admin.user.userEdit', ['data' => $user]);
    }

    public function postEdit(Request $request)
    {
        $request->validate([
            'name' => "required|min:8|max:255",
            'email' => "required|email|unique:users,email," . $request->id,
            'is_admin' => 'required',
        ]);

        $user = User::find($request->id);
        $user->update($request->all());

        return Redirect(route('user-manage'));
    }

    public function delete(User $user)
    {
        if ($user->id == Auth::user()->id) {
            return Redirect(route('user-manage'))->withErrors(["You can't remove your own account."]);
        } else {
            try {
                $user->delete();
            } catch (Exception $e) {
                return Redirect(route('user-manage'))->withErrors($e->getMessage());
            }
        }
        return Redirect(route('user-manage'));
    }
}
