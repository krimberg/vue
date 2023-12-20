<?php

namespace App\Http\Controllers\imtable;
use stdClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImTableRequest;

use App\isp_proi;
use App\connect_ip_syds;
use App\court_case;
use App\executor;
use App\Isptable;
use App\organ_admins;
use App\property_pens;
use Illuminate\Http\Request;

class ImTableIspProiController extends Controller
{
    public function index()
    {
        $isp_prois = isp_proi::where('texpole', 1)->get();
        $propertyItems = [];
        foreach ($isp_prois as $isp) {
            $temp = new stdClass();
            $temp->isp_proi = $isp;
            array_push($propertyItems, $temp);
        }

        foreach ($propertyItems as $item) {
            $item->property_pens = property_pens::where('id', $item->isp_proi->id)->first();
            $item->connect_ip_syds  = connect_ip_syds::where('id', $item->isp_proi->id)->first();
            $item->court_case = court_case::where('id', $item->connect_ip_syds->id_syd)->first();
            $item->executor = executor::where('id', $item->isp_proi->id)->first();
            $item->organ_admins = organ_admins::where('id', $item->executor->id_organ)->first();
        }
        return $propertyItems;
        
    }

    public function store(Request $request)
     { 
        $property_item = new isp_proi($request->isp_proi);
        $property_item->save();
        $connecnt_ip_syds_item = new connect_ip_syds($request->connect_ip_syds);
        $connecnt_ip_syds_item->save();
        $court_case_item = new court_case($request->court_case);
        $court_case_item->save();
        $property_pens_item = new property_pens($request->property_pens);
        $property_pens_item->save();
        $executor_item = new executor($request->executor);
        $executor_item->save();
        $organ_admins_item = new organ_admins($request->organ_admins);
        $organ_admins_item->save();
        return "successfull";
     }

     /*public function show( ImTableRequest $request)
     {
       return $propertyItems = isp_proi::findOrFail('id');
     }*/

     public function update(Request $request)
     {
        // return response()->json($request);
        $item_temp = new isp_proi($request->isp_proi);
        $item = isp_proi::where('id', $item_temp->id)->get()[0];
        $item->update($request->isp_proi);
        $item_connect_ip_syds = connect_ip_syds::where('id', $item->id)->get()[0];
        $item_connect_ip_syds->update($request->connect_ip_syds);
        $item_court_case = court_case::where('id', $item_connect_ip_syds->id_syd)->get()[0];
        $item_court_case->update($request->court_case);
        $item_property_pens = property_pens::where('id', $item->id)->get()[0];
        $item_property_pens->update($request->property_pens);
        $item_executor = executor::where('id', $item->id)->get()[0];
        $item_executor->update($request->executor);
        $item_organ_admins = organ_admins::where('id', $item_executor->id_organ)->get()[0];
        $item_organ_admins->update($request->organ_admins);   
        return 'success';
     }

     public function destroy( Request $request)
     {
        $propertyItems = isp_proi::findOrFail('id');
         if($propertyItems->delete()) return response(null, 204);
     }

     public function getDepartments( Request $request ){
        return response()->json(organ_admins::all());
     }
}