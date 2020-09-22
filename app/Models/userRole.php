<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userRole extends Model
{
    public $timestamps = false;
    protected $table = 'user_roles';
    protected $fillable = ['user_id', 'role_id'];
}
