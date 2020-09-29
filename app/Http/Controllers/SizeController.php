<?php

namespace App\Http\Controllers;

use App\Http\Requests\SizeRequest;
use App\Models\size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        $sizes = Size::all();
        return view('admin.size.index', compact('sizes'));
    }

    public function create()
    {
        return view('admin.size.create');
    }

    public function p_create(SizeRequest $request)
    {
        $add = size::them();
        if ($add) {
            return redirect()->route('admin.size')->with('success', 'Thêm mới thành công!');
        }
        return redirect()->route('admin.size')->with('error', 'Thêm mới thất bại');
    }
    public function edit($id)
    {
        $size = Size::find($id);
        return view('admin.size.edit', compact('size'));
    }
    public function p_edit($id, Request $request)
    {
        $sua = size::sua($id);
        if ($sua) {
            # code...
            return redirect()->route('admin.size')->with('success', 'Sửa đổi thành công!');
        }
        return redirect()->route('admin.size')->with('error', 'Sửa đổi thất bại');
    }
    public function delete($id)
    {
        $xoa = size::xoa($id);
        if ($xoa > 0) {
            return redirect()->route('admin.size')->with('error', 'Xoá thất bại');
        }
        return redirect()->route('admin.size')->with('success', 'Xoá thành công!');
    }
}
