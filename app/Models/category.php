<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $table = 'category';
    protected $fillable = ['name', 'status', 'parent_id', 'priority'];

    public function prods()
    {
        # code...
        return $this->hasMany(product::class, 'category_id', 'id');
    }

    public function scopeThem($query)
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
        if ($n = $query->prods->count() > 0) {
            # code...
            return $n;
        }
        $query->delete();
        return 0;
    }
}
