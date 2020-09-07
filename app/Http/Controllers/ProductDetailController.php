<?php

namespace App\Http\Controllers;

use App\Http\Requests\product\ProductRequest;
use App\Models\productDetail;
use App\Models\color;
use App\Models\product;
use App\Models\size;

class ProductDetailController extends Controller
{
    public function index()
    {

        $prods = product::all();
        $colors = color::all();
        $sizes = size::all();
        $prodDs = productDetail::all();
        return view('admin.productDetail.index', compact('prodDs', 'prods', 'colors', 'sizes'));
    }

    public function create()
    {
        $colors = color::all();
        $sizes = size::all();
        $prods = product::all();
        return view('admin.productDetail.create', compact('colors', 'sizes', 'prods'));
    }

    public function p_create(ProductRequest $request)
    {
        $add = productDetail::add();
        if ($add) {
            return redirect()->route('product_detail')->with('success', 'Thêm mới thành công!');
        }
        return redirect()->route('product_detail')->with('error', 'Thêm mới thành công!');
    }
    public function edit($id)
    {
        $colors = color::all();
        $sizes = size::all();
        $prods = product::all();
        $prodD = productDetail::find($id);
        return view('admin.productDetail.edit', compact('colors', 'sizes', 'prods', 'prodD'));
    }
    public function p_edit($id, ProductRequest $request)
    {
        $sua = productDetail::sua($id);
        if ($sua) {
            return redirect()->route('product_detail')->with('success', 'Sửa đổi thành công!');
        }
        return redirect()->route('product_detail')->with('error', 'Sửa đổi thành công!');
    }
    public function delete($id)
    {
        $xoa = productDetail::xoa($id);
        if ($xoa) {
            return redirect()->route('product_detail')->with('success', 'Xoá thành công!');
        }
        return redirect()->route('product_detail')->with('error', 'Xoá thất bại');
    }
}
