<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    protected $table = 'rating';
    protected $fillable = ['product_id', 'user_id', 'score', 'name', 'content'];

    public function scopeThem($query, $id, $user_id)
    {
        $add = 1;
        $exist = $query->where('product_id', $id)->where('user_id', $user_id)->first();
        if (!$exist) {
            $add = $this->create([
                'product_id' => $id,
                'user_id' => $user_id,
                'score' => request()->score,
                'name' => request()->name,
                'content' => request()->content,
            ]);
        }
        return $add;
    }
}
