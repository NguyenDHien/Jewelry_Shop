<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        # code...
        $prod = product::orderBy('id', 'DESC')->limit(6)->get();
        $prod_est = product::orderBy('sold_count', 'DESC')->limit(5)->get();
        return view('index', compact('prod', 'prod_est'));
    }
    public function collection()
    {
        # code...
        $prod = product::all();
        return view('collection', compact('prod'));
    }
}
