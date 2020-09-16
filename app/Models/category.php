<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $table = 'category';
    protected $fillable = ['name', 'status', 'parent_id', 'priority', 'slug'];



    public function prods()
    {
        # code...
        return $this->hasMany(product::class, 'category_id', 'id');
    }

    public function scopeThem($query)
    {
        # code...
        $add = $this->create([
            'name' => request()->name,
            'status' => request()->status,
            'parent_id' => request()->parent_id,
            'priority' => request()->priority,
            'slug' => Str::slug(request()->name),
        ]);
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
        if ($n = $query->prods->count() > 0) {
            # code...
            return $n;
        }
        $query->delete();
        return 0;
    }
}
