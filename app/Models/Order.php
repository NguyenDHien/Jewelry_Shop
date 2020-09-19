<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $fillable = ['user_id', 'address', 'discount', 'total', 'status', 'name', 'email', 'phone', 'note'];

    public function user()
    {
        # code...
        return $this->hasOne(productDetail::class, 'size_id', 'id');
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
        $query->delete();
        return $query;
    }
}
