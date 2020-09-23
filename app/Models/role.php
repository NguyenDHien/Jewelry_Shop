<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table = 'role';
    protected $fillable = ['name', 'permissions'];

    public function scopeThem($query)
    {
        $routes = json_encode(request()->route);
        $add = $this->create([
            'name' => request()->name,
            'permissions' => $routes
        ]);
        return $add;
    }
    public function scopeSua($query, $id)
    {
        $query = $query->find($id);
        $routes = json_encode(request()->route);
        $query = $query->update([
            'name' => request()->name,
            'permissions' => $routes
        ]);
        return $query;
    }
}
