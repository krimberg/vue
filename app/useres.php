<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class useres extends Model
{
    protected $users = ['id', 'fio', 'organization', 'login', 'pas', 'rol', 'cont'];
}
