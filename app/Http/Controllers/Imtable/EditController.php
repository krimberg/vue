<?php

namespace App\Http\Controllers\imtable;
use App\Http\Controllers\Controller;

use App\isp_proi;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function store(Request $request)
    {
        $imedit = new isp_proi();

        $response = $imedit->post('imtables/', [
            'enforcementproceedings' => [
                'dateoforderofthewrit' => $request->dateoforderofthewrit,
                'dateofreceiptofthewrit'=> $request->dateofreceiptofthewrit,
                'documentdetails'=>$request->documentdetails,
                'dateoftransferofthewrit'=>$request->dateoftransferofthewrit,
                'nameufssp'=>$request->nameufssp,
                'productionexecutionperiod'=>$request->productionexecutionperiod,
                'recoverer'=>$request->recoverer,
                'debtor'=>$request->debtor,
                'dateofinitiationofproceedings'=>$request->dateofinitiationofproceeding,
                'numberproceedings'=>$request->numberproceedings,
                'subjectproduction'=>$request->subjectproduction,
                'dateendofinitiationofproceedings'=>$request->dateendofinitiationofproceedings,
                'proceedingsend'=>$request->proceedingsend,
                'telnumderbailiff'=>$request->telnumderbailiff,
                'commentwork'=>$request->commentwork,
                'texpole'=>$request->texpole,

            ],
        ]);

            

        return json_decode($response->getBody()->getContents());
    }
}
