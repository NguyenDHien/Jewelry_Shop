<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    //
    protected $table = 'color';
    protected $fillable = ['name', 'hex_color'];

    public function prodDs()
    {
        # code...
        return $this->hasMany(productDetail::class, 'color_id', 'id');
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