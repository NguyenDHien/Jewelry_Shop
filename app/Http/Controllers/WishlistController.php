<?php

namespace App\Http\Controllers;

use App\Models\wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function add_wishlist($id)
    {
        $add = wishlist::them($id);
        return redirect()->back()->with('success', 'Thêm thành công!');
    }
    public function wishlist()
    {
        $wishlist = 0;
        if (Auth::check()) {
            $wishlist = wishlist::where('user_id', Auth::user()->id)->get();
        }
        return view('wishlist', compact('wishlist'));
    }
    public function wishlist_delete($id)
    {
        $xoa = wishlist::xoa($id);
        if ($xoa > 0) {
            return redirect()->back()->with('error', 'Xoá thất bại');
        }
        return redirect()->back()->with('success', 'Xoá thành công!');
    }
}
