<?php

namespace App\Http\Controllers\Admin\Blag;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blag;
use App\Models\Admin\Category;
use App\Models\Admin\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\VarDumper\Cloner\Data;

class Blag_controller extends Controller
{
    public function Blag()
    {


        $Blag = Blag::get([
            'id',
            'Blag_Number',
            'category_id',
            'device_id',
            'unit_id',
            'mothasil_id',
            'Type_Of_Error',
            'company_id',
            'blag_status_id',
            'Number_of_ment',
            'commentss',
            'created_at',
            'updated_at'
        ]);
        // $category = Category::get(['id','Cat_Name']);
        
        
        return view('Admin.blag.blag', compact('Blag'));
    }
    public function store(Request $request)
    {
        // return $request->mo_id;

        $validation = Validator::make(
            [$request->all()],
            [
                'Blag_Number' => 'required|numeric|unique:blags,Blag_Number',
                'Dev_Type' => 'required|numeric|max:20',
                'Devv_id' => 'required|numeric|max:20',
                'Type_Of_Error' => 'required|numeric|max:20',
                'Unit_Id' => 'required|numeric|max:20',

            ],
            []
        );
        Blag::create([
            'Blag_Number' => $request->Blag_Id,
            'Dev_Type' => $request->Dev_type,
            'Devv_id' => $request->Device_Id,
            'company_id' => $request->comp,
            'Type_Of_Error' => $request->prob,
            'Unit_Id' => $request->unit_id,
            'mo_id' => $request->mothasilee,
            'user_id' => $request->user_id
        ]);
        // return $request;
        return redirect()->back();
    }
    public function edit(Request $request)
    {


        $data = Blag::find($request->id);
        if (!$data)
            return response()->json([
                'status' => "true",
                'msg' => "no"
            ]);
        $data = Blag::select('Blag_Number', 'Dev_Type', 'Devv_id', 'Type_Of_Error', 'Unit_Id', 'Device_Status', 'company_id', 'user_id', 'mo_id')->find($request->id);

        return view('Admin.blag.blag_edit', compact('data'));
    }
    public function done(Request $request)
    {

        $data = Blag::where('id', $request->id)->update(['blag_st_id' => 2]);
        return response()->json([
            'status' => "true",
            'msg' => "test",
            'datta' => $data,
        ]);
    }


    public function view(Request $request)
    {

        // $data =  Blag::with('get_mot')->find($request->id);
        $data =  Blag::find($request->id);

        return view('Admin.Blag.Blag_view', compact('data'));
    }
    public function Blag2(Request $request)
    {

        // $device =  Blag::find(1)->with(['category_id','Devicess'])->get();

        return view('Admin.Blag.Blag2');
        // return $device;


        // worked

        // $device =  Blag::with('Devicess')->get();
    }
}
