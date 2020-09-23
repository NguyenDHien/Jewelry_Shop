<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $cates = Category::all();
        return view('admin.category.index', compact('cates'));
    }

    public function create()
    {
        $cates = Category::all();
        return view('admin.category.create', compact('cates'));
    }

    public function p_create(CategoryRequest $request)
    {
        $add = Category::them();
        if ($add) {
            return redirect()->route('admin.cate')->with('success', 'Thêm mới thành công!');
        }
        return redirect()->route('admin.cate')->with('error', 'Thêm mới thất bại');
    }
    public function edit($id)
    {
        $cates = Category::all();
        $cate = Category::find($id);
        return view('admin.category.edit', compact('cates', 'cate'));
    }
    public function p_edit($id, CategoryRequest $request)
    {
        $sua = Category::sua($id);
        if ($sua) {
            # code...
            return redirect()->route('admin.cate')->with('success', 'Sửa đổi thành công!');
        }
        return redirect()->route('admin.cate')->with('error', 'Sửa đổi thất bại');
    }
    public function delete($id)
    {
        $xoa = Category::xoa($id);
        if ($xoa > 0) {
            return redirect()->route('admin.cate')->with('error', 'Xoá thất bại');
        }
        return redirect()->route('admin.cate')->with('success', 'Xoá thành công!');
    }
}
