<?php

namespace App;

use App\Models\Order;
use App\Models\role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'phone', 'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders()
    {
        # code...
        return $this->hasMany(Order::class, 'user_id', 'id');
    }

    public function scopeDangKi()
    {
        # code...
        $add = $this->create([
            'name' => request('name'),
            'phone' => request('phone'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);
        if ($add) {
            $data = [
                'email' => request('email'),
                'password' => request('password')
            ];
            $remember = true;
            $check_login = Auth::attempt($data, $remember);
            return $check_login;
        }
        return $add;
    }
    public function hasPermission($route)
    {
        $routes = $this->routes();
        return in_array($route, $routes) ? true : false;
    }
    public function routes()
    {
        $data = [];
        foreach ($this->getRoles as $role) {
            $permission = json_decode($role->permissions);
            foreach ($permission as $item) {
                if (!in_array($item, $data)) {
                    array_push($data, $item);
                }
            }
        }
        return $data;
        # code...
    }
    public function getRoles()
    {
        return $this->belongsToMany(role::class, 'user_roles', 'user_id', 'role_id');
    }
}
