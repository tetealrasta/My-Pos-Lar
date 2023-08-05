<?php

namespace App\Http\Controllers\Admin\Units;

use App\Http\Controllers\Controller;
// use App\Models\Admin\motahasil;
use App\Models\Admin\unit;
use Illuminate\Http\Request;

class Units_Controller extends Controller
{



    /*----------------------Start Category Functionality-------------------------*/

    public function Units()
    {
        // $Units = unit::with('mothasils')->get();
        $Units = unit::get();
        // $Units = unit::with('mothasils')->find(6);
        // $mot = $Units->mothasils;

        
        return view("Admin.Unit.Units", compact('Units'));
    }


    /*----------------------Start Insert Functionality-------------------------*/

    public function store(Request $request)
    {

        unit::create(['Local_Name' => $request->Unit_Name]);
        return redirect()->back()->with(['succes' => 'unit add successfully']);
    }
    /*----------------------End Insert Functionality-------------------------*/



    /*----------------------End Category Functionality-------------------------*/
}
