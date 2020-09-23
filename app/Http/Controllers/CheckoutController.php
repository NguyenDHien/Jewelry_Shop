<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Order;
use App\Models\orderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = new cart();
        if (count($cart->items) == 0) {
            return redirect()->back()->with('error', 'bạn cần có sản phẩm trong giỏ hàng!');
        }
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
            Mail::send('mail.order', [
                'name' => $req->name,
                'order' => $add,
                'total' => $total_price,
                'items' => $cart->items,
                'address' => $req->address,
                'phone' => $req->phone,
                'city' => $req->city,
                'email' => $req->email
            ], function ($mail) use ($req) {
                $mail->to($req->email, $req->name);
                $mail->from('hienrider@gmail.com');
                $mail->subject('Order');
            });
            session(['cart' => '']);
            return redirect()->route('home')->with('success', 'Đặt hàng thành công');
        } else {
            return redirect()->back()->with('error', 'Đặt hàng thất bại');
        }
    }
}