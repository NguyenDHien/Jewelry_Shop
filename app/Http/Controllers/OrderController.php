<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    public function create()
    {
        return view('admin.order.create');
    }

    public function p_create(Request $request)
    {
        $add = Order::them();
        if ($add) {
            return redirect()->route('order')->with('success', 'Thêm mới thành công!');
        }
        return redirect()->route('order')->with('error', 'Thêm mới thất bại');
    }
    public function edit($id)
    {
        $order = Order::find($id);
        return view('admin.order.edit', compact('order'));
    }
    public function p_edit($id, Request $request)
    {
        $sua = Order::sua($id);
        if ($sua) {
            # code...
            return redirect()->route('order')->with('success', 'Sửa đổi thành công!');
        }
        return redirect()->route('order')->with('error', 'Sửa đổi thất bại');
    }
    public function delete($id)
    {
        $xoa = Order::xoa($id);
        if ($xoa) {
            return redirect()->route('order')->with('success', 'Xoá thành công!');
        }
        return redirect()->route('order')->with('error', 'Xoá thất bại');
    }
}
