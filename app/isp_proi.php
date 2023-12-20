<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use App\Models\conect_ip_syd;
use App\Models\executor;
use App\Models\property_pens;


class isp_proi extends Model
{
    protected $fillable = ['id', 'dateoforderofthewrit', 'dateofreceiptofthewrit', 'documentdetails', 'dateoftransferofthewrit',
     'nameufssp', 'productionexecutionperiod', 'recoverer', 'debtor', 'dateofinitiationofproceedings', 'numberproceedings', 'subjectproduction',
      'dateendofinitiationofproceedings', 'proceedingsend', 'telnumderbailiff', 'commentwork', 'texpole' ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function imtableex()
    {
    return $this->hasMany(executor::class, 'id');
    }
    
    public function imtablecon()
    {
    return $this->hasOne(conect_ip_syd::class, 'id');
    }
    
    public function imtablepro()
    {
    return $this->hasOne(property_pens::class, 'id');
    }

}
