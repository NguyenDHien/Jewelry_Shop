<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\color;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        if (request()->color) {
            $color = request()->color;
            $getColor = color::where('name', $color)->first();
            $prod = product::where('color_id', $getColor->id)->get();
            $prod_est = product::orderBy('sold_count', 'DESC')->where('color_id', $getColor->id)->get();
            return view('collection', compact('prod', 'prod_est'));
        }
        if (request()->gender) {
            $gender = (request()->gender == 'male') ? 0 : 1;
            $prod = product::where('sex', $gender)->get();
            $prod_est = product::orderBy('sold_count', 'DESC')->where('sex', $gender)->get();
            return view('collection', compact('prod', 'prod_est'));
        }
        if (!request()->gender && !request()->color) {
            $prod = product::all();
            $prod_est = product::orderBy('sold_count', 'DESC')->get();
            return view('collection', compact('prod', 'prod_est'));
        }
    }

    public function getListView($id, $slug)
    {
        $size = product::getAttr('size', $id);
        $cate = category::where('slug', $slug)->first();
        $prod = product::find($id);
        if ($cate) {
            if (request()->color) {
                $color = request()->color;
                $getColor = color::where('name', $color)->first();
                $prod = product::where([['color_id', $getColor->id], ['category_id', $cate->id]])->get();
                $prod_est = product::orderBy('sold_count', 'DESC')->where([['color_id', $getColor->id], ['category_id', $cate->id]])->get();
                return view('category', compact('cate', 'prod', 'prod_est'));
            }
            if (request()->gender) {
                $gender = (request()->gender == 'male') ? 0 : 1;
                $prod = product::where([['sex', $gender], ['category_id', $cate->id]])->get();
                $prod_est = product::orderBy('sold_count', 'DESC')->where([['sex', $gender], ['category_id', $cate->id]])->get();
                return view('category', compact('cate', 'prod', 'prod_est'));
            }
            if (!request()->gender && !request()->color) {
                $prod = product::where('category_id', $cate->id)->get();
                $prod_est = product::orderBy('sold_count', 'DESC')->where('category_id', $cate->id)->get();
                return view('category', compact('cate', 'prod', 'prod_est'));
            }
        } else if ($prod) {
            $prodSale = product::prodsale();
            $cateProd = category::find($prod->category_id);
            $cates = category::paginate(5);
            return view('product', compact('prod', 'size', 'cateProd', 'prodSale', 'cates'));
        } else {
            return abort(404);
        }
    }

    public function search()
    {
        if (!request()->search_str) {
            return redirect()->route('collection');
        }
        if (request()->color) {
            $color = request()->color;
            $getColor = color::where('name', $color)->first();
            $prodSearch = product::search()->where('color_id', $getColor->id)->get();
            $prod_est = product::search()->orderBy('sold_count', 'DESC')->where('color_id', $getColor->id)->get();
            return view('search', compact('prodSearch', 'prod_est'));
        }
        if (request()->gender) {
            $gender = (request()->gender == 'male') ? 0 : 1;
            $prodSearch = product::search()->where('sex', $gender)->get();
            $prod_est = product::search()->orderBy('sold_count', 'DESC')->where('sex', $gender)->get();
            return view('search', compact('prodSearch', 'prod_est'));
        }
        if (!request()->gender && !request()->color) {
            $prodSearch = product::search()->get();
            $prod_est = product::search()->orderBy('sold_count', 'DESC')->get();
            return view('search', compact('prodSearch', 'prod_est'));
        }
    }
    public function searchBar()
    {
        return view('searchBar');
    }
    public function contact()
    {
        return view('contact');
        # code...
    }
    public function p_contact(Request $req)
    {
        Mail::send('mail.contact', [
            'name' => $req->name,
            'content' => $req->content
        ], function ($mail) use ($req) {
            $mail->to('hienrider@gmail.com', $req->name);
            $mail->from($req->email);
            $mail->subject('Test mail');
        });
        return redirect()->back()->with('success', 'Gửi mail thành công');
    }
}
