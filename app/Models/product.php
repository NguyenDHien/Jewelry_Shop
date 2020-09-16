<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product extends Model
{
    //
    protected $table = 'product';
    protected $fillable = ['product_code', 'name', 'discount', 'price', 'category_id', 'status', 'description', 'image'];

    public function img()
    {
        return $this->hasMany(image::class, 'product_id', 'id')->getFirst();
    }
    public function cate()
    {
        return $this->hasOne(category::class, 'id', 'category_id');
    }
    public function prodDs()
    {
        # code...
        return $this->hasMany(productDetail::class, 'product_id', 'id');
    }
    public function scopeGetAttr($query, $attr, $id)
    {
        $attrRs = $query
            ->join('product_detail', 'product_detail.product_id', '=', 'product.id')
            ->join($attr, $attr . '.id', '=', 'product_detail.' . $attr . '_id')
            ->where('product_detail.product_id', '=', $id)
            ->get();
        return $attrRs;
    }
    public function scopeProdSale($query)
    {
        # code...
        $query = $query->where('discount', '>', '0')->orderBy('discount', 'DESC')->get();
        return $query;
    }
    public function scopeThem()
    {
        # code...
        $img_name = '';
        if (request()->has('image')) {
            # code...
            $img_name = request()->image->getClientOriginalName();
            request()->image->move(public_path('uploads/prods'), $img_name);
        }
        $add = $this->create([
            'product_code' => request()->product_code,
            'name' => request()->name,
            'price' => request()->price,
            'discount' => request()->discount,
            'status' => request()->status,
            'category_id' => request()->category_id,
            'description' => request()->description,
            'image' => $img_name,
        ]);
        return $add;
    }
    public function scopeSua($query, $id)
    {
        $query = $query->find($id);
        $img_name = '';
        if (request()->has('image')) {
            # code...
            $img_name = request()->image->getClientOriginalName();
            request()->image->move(public_path('uploads/prods'), $img_name);
        }
        $query = $query->update([
            'product_code' => request()->product_code,
            'name' => request()->name,
            'price' => request()->price,
            'discount' => request()->discount,
            'status' => request()->status,
            'category_id' => request()->category_id,
            'description' => request()->description,
            'image' => $img_name,
        ]);

        return $query;
    }
    public function scopeXoa($query, $id)
    {
        # code...
        $query = $query->find($id);
        if ($n = $query->prodDs->count() > 0) {
            # code...
            return $n;
        }
        $query->delete();
        return 0;
    }
}
