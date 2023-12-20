<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class executor extends Model
{
    protected $fillable = ['id','number_ip', 'id_organ'];

    public function bel()
    {
        return $this->belongsTo(isp_proi::class, 'number_ip');
    }
}
