<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        return view('account');
    }
    public function address()
    {
        return view('address');
    }
    public function u_address(Request $request)
    {
        $id = Auth::user()->id;
        $edit = User::editAddress($id);
        if ($edit) {
            # code...
            return redirect()->route('account')->with('success', 'Sửa đổi thành công!');
        }
        return redirect()->route('account')->with('error', 'Sửa đổi thất bại');
    }
}
