<?php

namespace App\Http\Controllers;

use App\Models\color;
use App\Models\product;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = color::all();
        return view('admin.color.index', compact('colors'));
    }

    public function create()
    {
        $prods = product::all();
        return view('admin.color.create', compact('prods'));
    }

    public function p_create(Request $request)
    {
        $add = color::them();
        if ($add) {
            return redirect()->route('color')->with('success', 'Thêm mới thành công!');
        }
        return redirect()->route('color')->with('error', 'Thêm mới thất bại');
    }
    public function edit($id)
    {
        $prods = product::all();
        $color = color::find($id);
        return view('admin.color.edit', compact('color'));
    }
    public function p_edit($id, Request $request)
    {
        $sua = color::sua($id);
        if ($sua) {
            # code...
            return redirect()->route('color')->with('success', 'Sửa đổi thành công!');
        }
        return redirect()->route('color')->with('error', 'Sửa đổi thất bại');
    }
    public function delete($id)
    {
        $xoa = color::xoa($id);
        if ($xoa > 0) {
            return redirect()->route('color')->with('error', 'Xoá thất bại');
        }
        return redirect()->route('color')->with('success', 'Xoá thành công!');
    }
}
