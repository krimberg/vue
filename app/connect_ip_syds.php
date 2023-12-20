<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class connect_ip_syds extends Model
{
    protected $fillable = ['id','id_syd'];

    public function bel()
    {
        return $this->belongsTo(isp_proi::class, 'id');
    }

}
