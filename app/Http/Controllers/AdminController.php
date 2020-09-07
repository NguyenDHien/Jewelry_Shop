<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('admin.index');
    }
    public function login()
    {

        return view('admin.account.login');
        # code...
    }

    public function p_login()
    {
        $data = [
            'email' => request('email'),
            'password' => request('password')
        ];
        $remember = true;
        $check_login = Auth::attempt($data, $remember);
        if ($check_login) {
            # code...
            return redirect()->route('home');
        }
        return redirect()->back()->with('error', 'Đăng nhập thất bại');
    }
    public function register()
    {

        return view('admin.account.register');
        # code...
    }
    public function p_register()
    {
        $add = User::dangki();
        $remember = true;
        // $check_login = Auth::attempt($data, $remember);
        if ($add) {
            # code...
            return redirect()->route('admin.login')->with('success', 'Đăng kí thành công!');
        }
        return redirect()->back()->with('error', 'Đăng kí thất bại');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
