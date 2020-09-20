<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function getListView($id, $slug)
    {
        $color = product::getAttr('color', $id);
        $size = product::getAttr('size', $id);
        $cate = category::where('slug', $slug)->first();
        $prod = product::find($id);
        if ($cate) {
            return view('category', compact('cate'));
        } else if ($prod) {
            $prodSale = product::prodsale();
            $cateProd = category::find($prod->category_id);
            $cates = category::paginate(5);
            return view('product', compact('prod', 'color', 'size', 'cateProd', 'prodSale', 'cates'));
        } else {
            return abort(404);
        }
    }

    public function search()
    {
        if (!request()->search_str) {
            return redirect()->route('collection');
        }
        $prodSearch = product::search()->paginate(16);
        return view('search', compact('prodSearch'));
    }
}
