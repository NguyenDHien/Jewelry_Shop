<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table = 'role';
    protected $fillable = ['name', 'permissions'];

    public function scopeThem($query)
    {
        $arr = ["account"];
        if (!empty(request()->route)) {
            $arr = array_merge($arr, request()->route);
        }
        $routes = json_encode($arr);
        $add = $this->create([
            'name' => request()->name,
            'permissions' => $routes
        ]);
        return $add;
    }
    public function scopeSua($query, $id)
    {
        $query = $query->find($id);
        array_push(request()->route, 'account');
        $routes = json_encode(request()->route);
        $query = $query->update([
            'name' => request()->name,
            'permissions' => $routes
        ]);
        return $query;
    }
}
