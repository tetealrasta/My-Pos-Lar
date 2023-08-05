<?php

namespace App\Http\Controllers\Admin\Mothasil;

use App\Http\Controllers\Controller;
use App\Models\Admin\motahasil;
use Illuminate\Http\Request;

class motahasil_Controller extends Controller
{

    


    /*----------------------Start Mothasilen Functionality-------------------------*/

    public function index()
    {

        return view("Admin.Mothasilen.Mot");
    }


    /*----------------------Start Insert Functionality-------------------------*/

    public function store(Request $request)
    {


        motahasil::create([

            "Mo_Name" => $request->Mo_Name,
            "Mo_Phone" => $request->Mo_Number,
            "Mo_Email" => $request->Mo_Email,
            "Mo_Address" => $request->Mo_Address,
            "Mo_User" => $request->Mo_username,
            "unit_id" => $request-> Mo_unit_id
        ]);
        // return redirect()->back()->with('category has added successfully');
        return $request;
    }
    /*----------------------End Insert Functionality-------------------------*/



    /*----------------------End Category Functionality-------------------------*/
}
