<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table = 'product';
    protected $fillable = ['product_code', 'name', 'discount', 'price', 'category_id', 'status', 'description'];

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

    public function scopeThem()
    {
        # code...
        $add = $this->create(request()->all());
        return $add;
    }
    public function scopeSua($query, $id)
    {
        $query = $query->find($id);
        # code...
        $query = $query->update(request()->all());
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
