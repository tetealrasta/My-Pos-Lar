<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Admin\Setting_Model;
// use App\Models\Admin\Setting;
use App\Http\Controllers\Controller;
// use App\Http\Requests\Admin\SettingReq;
use Illuminate\Http\Request;

class Setting_Controller extends Controller
{



    /*----------------------Start Setting Functionality-------------------------*/

    public function Setting()
    {
       
        // $Setting = Setting::get(['Cat_Id', 'Cat_Name', 'Cat_Status']);
        // return view("Admin.Setting.Setting", compact('Setting'));
        return view("Admin.Setting.Setting");
    }


    /*----------------------Start Insert Functionality-------------------------*/

    public function store(Request $request)
    {

        // Setting::create(['Cat_Name' => $request->Cat_Name]);
        // return redirect()->back()->with('Setting has added successfully');
        // try {
        // $request->validated();

        // $Setting = Setting::create(['Cat_Name'=> $request->Cat_Name]);
        // return $request;
        //    return redirect()->back()->with(['success'=>"لقد تمت الإضافه بنجاح"]);

        // } catch (\Throwable $th) {
        // return redirect()->back()->with(['error'=>"لقد تمت الإضافه بنجاح"]);
        // }
    }
    /*----------------------End Insert Functionality-------------------------*/

    public function Setting_edit($cat_id)
    {

        // $edit_Cat =  Setting::find($cat_id);

        // if (!$edit_Cat)
        //     $edit_Cat = Setting::select('id', 'Cat_Name', 'Cat_Status')->find($cat_id);
        // return view('Admin.Setting.Setting_edit', compact($edit_Cat));
    }
    public function Setting_delete($cat_id)
    {
        // $del_Cat =  Setting::get()->find($cat_id);
        // return $del_Cat;
    }

    /*----------------------End Setting Functionality-------------------------*/
}
