<?php

namespace App\Http\Controllers\Admin\Fixed;

// use App\Admin\Fixed_Model;
use App\Models\Admin\Device;
use App\Models\Admin\Blag;
use App\Http\Controllers\Controller;
// use App\Http\Requests\Admin\FixedReq;
use Illuminate\Http\Request;

class Fixed_Controller extends Controller
{



    /*----------------------Start Fixed Functionality-------------------------*/

    public function Fixed()
    {


        // $Fixed = Device::get('id', 'Dev_Parcode', 'Dev_Type', 'Dev_Name', 'Dev_Cat', 'Dev_User', 'Dev_Unit', 'Dev_Problem', 'Dev_Pic', 'Dev_Status');
        // $Blags = Blag::get()->where('blag_st_id',2);
        // return view("Admin.has_fixed.has_fixed", compact('Fixed','Blags'));
        return view("Admin.reports.Report_has_fixed");
    }
    public function print()
    {
        return view("Admin.reports.Report_has_fixed");
    }

    /*----------------------Start Insert Functionality-------------------------*/


    /*----------------------End Insert Functionality-------------------------*/


    public function droped()
    {
        return view("Admin.reports.Report_Droped");
    }
    public function not_yet()
    {
        return view("Admin.reports.Report_Problem");
    }

    /*----------------------End Fixed Functionality-------------------------*/
}
