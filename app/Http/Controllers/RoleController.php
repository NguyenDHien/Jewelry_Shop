<?php

namespace App\Http\Controllers;

use App\Models\role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $role = role::all();
        return view('admin.role.index', compact('role'));
    }

    public function create()
    {
        $routes = '';
        return view('admin.role.create', compact('routes'));
    }

    public function p_create(Request $request)
    {
        $add = role::them();
        if ($add) {
            return redirect()->route('role')->with('success', 'Thêm mới thành công!');
        }
        return redirect()->route('role')->with('error', 'Thêm mới thất bại');
    }
    // public function edit($id)
    // {
    //     $prods = product::all();
    //     $color = color::find($id);
    //     return view('admin.color.edit', compact('color'));
    // }
    // public function p_edit($id, Request $request)
    // {
    //     $sua = color::sua($id);
    //     if ($sua) {
    //         # code...
    //         return redirect()->route('color')->with('success', 'Sửa đổi thành công!');
    //     }
    //     return redirect()->route('color')->with('error', 'Sửa đổi thất bại');
    // }
    // public function delete($id)
    // {
    //     $xoa = color::xoa($id);
    //     if ($xoa > 0) {
    //         return redirect()->route('color')->with('error', 'Xoá thất bại');
    //     }
    //     return redirect()->route('color')->with('success', 'Xoá thành công!');
    // }
}
