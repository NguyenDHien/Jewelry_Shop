<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
        session(['link' => url()->previous()]);
        $check_login = Auth::check();
        if ($check_login) {
            # code...
            return redirect()->back()->with('success', 'Bạn đã đăng nhập');
        }
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
            return redirect()->intended(session('link'))->with('success', 'Đăng nhập thành công!');
        }
        return redirect()->back()->with('error', 'Đăng nhập thất bại');
    }
    public function register()
    {
        $check_login = Auth::check();
        session(['link' => url()->previous()]);
        if ($check_login) {
            # code...
            return redirect()->back();
        }
        return view('admin.account.register');
        # code...
    }
    public function p_register(UserRequest $UReq)
    {
        $add = User::dangki();
        $remember = true;
        // $check_login = Auth::attempt($data, $remember);
        if ($add) {
            # code...
            return redirect(session('link'))->with('success', 'Đăng kí thành công!');
        }
        return redirect()->back()->with('error', 'Đăng kí thất bại');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
    public function error()
    {
        $code = request()->code;
        return view('admin.error');
    }
}
