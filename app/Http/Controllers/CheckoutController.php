<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Order;
use App\Models\orderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }
    public function submit(Request $req, cart $cart)
    {
        $c_id = Auth::user()->id;
        $total_price = $cart->total_price;
        $add = Order::them($c_id, $total_price);
        if ($add) {
            $order_id = $add->id;
            foreach ($cart->items as $prod_id => $item) {
                $quantity = $item['quantity'];
                $price = $item['price'];
                orderDetail::them($order_id, $prod_id, $quantity, $price);
            }
            session(['cart' => '']);
            return redirect()->route('home')->with('success', 'Đặt hàng thành công');
        } else {
            return redirect()->back()->with('error', 'Đặt hàng thất bại');
        }
    }
}
