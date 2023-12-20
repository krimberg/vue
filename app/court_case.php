<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class court_case extends Model
{
    protected $fillable = ['id','name_syd', 'num_del', 'plaintiff', 'defendant', 'pred_spor', 'date_vin_syd_akt'];
}
