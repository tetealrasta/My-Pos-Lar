<?php

namespace App\Http\Controllers\Admin\User;

// use App\Admin\User_Model;
use App\Models\Admin\User;
use App\Http\Controllers\Controller;
// use App\Http\Requests\Admin\UserReq;
use Illuminate\Http\Request;

class User_Controller extends Controller
{



    /*----------------------Start User Functionality-------------------------*/

    public function Users()
    {
       
        // $User = User::get(['Cat_Id', 'Cat_Name', 'Cat_Status']);
        // return view("Admin.User.User", compact('User'));
        return view("Admin.Users.Users");
    }


    /*----------------------Start Insert Functionality-------------------------*/

    public function store(Request $request)
    {

        // User::create(['Cat_Name' => $request->Cat_Name]);
        // return redirect()->back()->with('User has added successfully');
        // try {
        // $request->validated();

        // $User = User::create(['Cat_Name'=> $request->Cat_Name]);
        // return $request;
        //    return redirect()->back()->with(['success'=>"لقد تمت الإضافه بنجاح"]);

        // } catch (\Throwable $th) {
        // return redirect()->back()->with(['error'=>"لقد تمت الإضافه بنجاح"]);
        // }
    }
    /*----------------------End Insert Functionality-------------------------*/

    public function User_edit($cat_id)
    {

        // $edit_Cat =  User::find($cat_id);

        // if (!$edit_Cat)
        //     $edit_Cat = User::select('id', 'Cat_Name', 'Cat_Status')->find($cat_id);
        // return view('Admin.User.User_edit', compact($edit_Cat));
    }
    public function User_delete($cat_id)
    {
        // $del_Cat =  User::get()->find($cat_id);
        // return $del_Cat;
    }

    /*----------------------End User Functionality-------------------------*/
}
