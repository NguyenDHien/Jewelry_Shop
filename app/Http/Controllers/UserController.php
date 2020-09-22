<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\userRole;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('admin.user.index', compact('data'));
    }

    // public function create()
    // {
    //     $prods = product::all();
    //     return view('admin.color.create', compact('prods'));
    // }

    // public function p_create(Request $request)
    // {
    //     $add = color::them();
    //     if ($add) {
    //         return redirect()->route('color')->with('success', 'Thêm mới thành công!');
    //     }
    //     return redirect()->route('color')->with('error', 'Thêm mới thất bại');
    // }
    public function edit($id)
    {
        $user = User::find($id);
        $roles = role::all();
        return view('admin.user.edit', compact('user', 'roles'));
    }
    public function p_edit($id, Request $request)
    {
        $user = User::find($id);
        $user->update($request->only('name', 'email', 'phone'));
        if (is_array($request->role)) {

            foreach ($request->role as $role_id) {
                userRole::create(['user_id' => $user->id, 'role_id' => $role_id]);
            }
        }
    }
    public function delete($id)
    {
        // $xoa = color::xoa($id);
        // if ($xoa > 0) {
        //     return redirect()->route('color')->with('error', 'Xoá thất bại');
        // }
        // return redirect()->route('color')->with('success', 'Xoá thành công!');
    }
}
