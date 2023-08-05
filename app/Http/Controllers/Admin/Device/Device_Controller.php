<?php

namespace App\Http\Controllers\Admin\Device;


use App\Http\Controllers\Controller;
use App\Models\Admin\Blag;
use App\Models\Admin\Device;
use App\Models\Admin\Category;
use App\Models\Admin\company;
use App\Models\Admin\motahasil;
use App\Models\Admin\Problem;
use App\Models\Admin\unit;
use App\Models\Admin\user;
// use App\Http\Requests\Admin\DeviceReq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Device_Controller extends Controller
{




    /*----------------------Start Device Functionality-------------------------*/

    public function Device()
    {
        $Blags = Blag::get();
        $category = Category::get();
        $device = Device::get();
        $unit = unit::get();
        $user = user::get();
        $problem = problem::get();
        $mohasil = motahasil::get();
        $company = company::get();

        $Device = Device::get(['id', 'Dev_Parcode', 'Dev_Name', 'Dev_Cat', 'Dev_comp', 'Dev_Mo', 'Dev_Unit', 'Dev_status', 'Dev_Pic', 'Dev_Status']);
        // $Device = Device::get();
        // return $Device;
        return view("Admin.Device.Device", compact('Blags', 'device', 'category', 'unit', 'user', 'problem', 'mohasil', 'company'));
    }


    /*----------------------Start Insert Functionality-------------------------*/

    public function store(Request $request)
    {

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
    /*----------------------End Insert Functionality-------------------------*/

    public function view($id)
    {
        $edit_Cat = Device::get();
        return view('Admin.Device.Device_view', compact($edit_Cat));
    }
    public function Device_edit($cat_id)
    {

        $edit_Cat =  Device::find($cat_id);

        if (!$edit_Cat)
            $edit_Cat = Device::select('Dev_Id', 'Dev_Parcode', 'Dev_Type', 'Dev_Name', 'Dev_Cat', 'Dev_User', 'Dev_Unit', 'Dev_Problem', 'Dev_Pic', 'Dev_Status')->find($cat_id);
        return view('Admin.Device.Device_edit', compact($edit_Cat));
    }
    public function Device_delete($cat_id)
    {
        $del_Cat =  Device::get()->find($cat_id);
        return $del_Cat;
    }
    public function about()
    {
        return view('Admin.Device.About_Device');
    }

    /*----------------------End Device Functionality-------------------------*/
}
