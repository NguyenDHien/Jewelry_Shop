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
    //         return redirect()->route('admin.color')->with('success', 'Thêm mới thành công!');
    //     }
    //     return redirect()->route('admin.color')->with('error', 'Thêm mới thất bại');
    // }
    public function edit($id)
    {
        $perArray = [];
        $per = userRole::where('user_id', $id)->get();
        foreach ($per as $item) {
            array_push($perArray, $item->role_id);
        }
        $user = User::find($id);
        $roles = role::all();
        return view('admin.user.edit', compact('user', 'roles', 'perArray'));
    }
    public function p_edit($id, Request $request)
    {
        $sua = User::sua($id);
        if ($sua) {
            # code...
            return redirect()->route('admin.user')->with('success', 'Sửa đổi thành công!');
        }
        return redirect()->route('admin.user')->with('error', 'Sửa đổi thất bại');
    }
    public function delete($id)
    {
        // $xoa = color::xoa($id);
        // if ($xoa > 0) {
        //     return redirect()->route('admin.color')->with('error', 'Xoá thất bại');
        // }
        // return redirect()->route('admin.color')->with('success', 'Xoá thành công!');
    }
}
