<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\ProductRequest;
use App\Models\category;
use App\Models\product;

class ProductController extends Controller
{
    public function index()
    {
        $cates = category::all();
        $prods = product::all();
        return view('admin.product.index', compact('prods', 'cates'));
    }

    public function create()
    {
        $cates = Category::all();

        return view('admin.product.create', compact('cates'));
    }

    public function p_create(ProductRequest $request)
    {
        $add = product::them();
        if ($add) {
            return redirect()->route('product')->with('success', 'Thêm mới thành công!');
        }
        return redirect()->route('product')->with('error', 'Thêm mới thất bại');
    }
    public function edit($id)
    {
        $cates = category::all();
        $prod = product::find($id);
        return view('admin.product.edit', compact('prod', 'cates'));
    }
    public function p_edit($id, ProductRequest $request)
    {
        $sua = product::sua($id);
        if ($sua) {
            return redirect()->route('product')->with('success', 'Sửa đổi thành công!');
        }
        return redirect()->route('product')->with('error', 'Sửa đổi thất bại');
    }
    public function delete($id)
    {
        $xoa = product::xoa($id);
        if ($xoa > 0) {
            return redirect()->route('product')->with('error', 'Xoá thất bại');
        }
        return redirect()->route('product')->with('success', 'Xoá thành công!');
    }
}
