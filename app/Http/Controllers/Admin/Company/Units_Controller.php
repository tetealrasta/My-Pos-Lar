<?php

namespace App\Http\Controllers\Admin\Category;

// use App\Http\Requests\Admin\CategoryReq;
// use App\Admin\Category_Model;

// use App\Models\Admin\Category\Units;
use App\Http\Controllers\Controller;
use App\Models\Admin\unit;
use Illuminate\Http\Request;

class Units_Controller extends Controller
{



    /*----------------------Start Category Functionality-------------------------*/

    public function Units()
    {
        // return $request;
        // $Category = Category::get(['Cat_Id', 'Cat_Name', 'Cat_Status']);
        // return view("Admin.Category.Category", compact('Category'));
        $Units = unit::get(['Local_Id', 'Local_Name']);
        // $Units = unit::get(['Local_Id','Local_Name']);
        return view("Admin.Unit.Units", compact('Units'));
    }


    /*----------------------Start Insert Functionality-------------------------*/

    public function store(Request $request)
    {

        unit::create(['Local_Name' => $request->Unit_Name]);
        return redirect()->back()->with(['succes' => 'unit add successfully']);

        // try {
        // $request->validated();
        // $Category = Category::create(['Cat_Name'=> $request->Cat_Name]);
        //    return redirect()->back()->with(['success'=>"لقد تمت الإضافه بنجاح"]);
        // } catch (\Throwable $th) {
        // return redirect()->back()->with(['error'=>"لقد تمت الإضافه بنجاح"]);
        // }
    }
    /*----------------------End Insert Functionality-------------------------*/



    /*----------------------End Category Functionality-------------------------*/
}
