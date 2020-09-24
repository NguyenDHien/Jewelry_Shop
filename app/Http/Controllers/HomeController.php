<?php

namespace App\Http\Controllers;

use App\Models\category;
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
        # code...
        $prod = product::all();
        $prod_est = product::orderBy('sold_count', 'DESC')->get();
        return view('collection', compact('prod', 'prod_est'));
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
        $prodSearch = product::search()->get();
        $prod_est = product::search()->orderBy('sold_count', 'DESC')->get();
        return view('search', compact('prodSearch', 'prod_est'));
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
