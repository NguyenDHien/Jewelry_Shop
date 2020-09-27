<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class wishlist extends Model
{
    public $timestamps = false;
    protected $table = 'wish_list';
    protected $fillable = ['product_id', 'user_id'];

    public function prod()
    {
        return $this->hasOne(product::class, 'id', 'product_id');
    }

    public function scopeThem($query, $id, $user_id)
    {
        $add = 1;
        $exist = $query->where('product_id', $id)->where('user_id', $user_id)->first();
        if (!$exist) {
            $add = $this->create([
                'product_id' => $id,
                'user_id' => $user_id,
            ]);
        }
        return $add;
    }
    public function scopeXoa($query, $id)
    {
        $query = $query->find($id);
        $query->delete();
        return 0;
    }
}
