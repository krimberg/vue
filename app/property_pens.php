<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class property_pens extends Model
{
    protected $fillable = ['id', 'principaldebt', 'penalties', 'сourtcosts'];

    public function bel()
    {
    return $this->belongsTo(isp_proi::class, 'id_ip');
    }
    
}
