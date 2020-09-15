<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\color;
use App\Models\product;
use App\Models\productDetail;
use App\Models\size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prods = product::all();
        return response($prods);
    }

    public function getOne($id)
    {
        $prod = product::find($id);
        return response($prod);
        # code...
    }
    public function getOneDt($id)
    {
        $prods = product::find($id)->prodDs()->get();
        return response($prods);
        # code...
    }
    public function getColor($id)
    {
        $color = color::find($id);
        return response($color);
        # code...
    }
    public function getSize($id)
    {
        $size = size::find($id);
        return response($size);
        # code...
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
