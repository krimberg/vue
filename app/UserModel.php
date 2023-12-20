<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $fillable = [
        'role', 'login', 'password', 'department', 'access'
    ];
}
