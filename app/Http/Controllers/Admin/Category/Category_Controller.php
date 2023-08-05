<?php

namespace App\Http\Controllers\Admin\Category;

// use App\Admin\Category_Model;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
// use App\Http\Requests\Admin\CategoryReq;
use Illuminate\Http\Request;

class Category_Controller extends Controller
{



    /*----------------------Start Category Functionality-------------------------*/

    public function Category()
    {
       
        $Category = Category::get(['id', 'Cat_Name', 'Cat_Status']);
        return view("Admin.Category.Category", compact('Category'));
    }


    /*----------------------Start Insert Functionality-------------------------*/

    public function store(Request $request)
    {

        Category::create(['Cat_Name' => $request->Cat_Name]);
        return redirect()->back()->with('category has added successfully');
        try {
        $request->validated();

        $Category = Category::create(['Cat_Name'=> $request->Cat_Name]);
        return $request;
           return redirect()->back()->with(['success'=>"لقد تمت الإضافه بنجاح"]);

        } catch (\Throwable $th) {
        return redirect()->back()->with(['error'=>"لقد تمت الإضافه بنجاح"]);
        }
    }
    /*----------------------End Insert Functionality-------------------------*/

    public function Category_edit($cat_id)
    {

        $edit_Cat =  Category::find($cat_id);

        if (!$edit_Cat)
            $edit_Cat = Category::select('id', 'Cat_Name', 'Cat_Status')->find($cat_id);
        return view('Admin.Category.category_edit', compact($edit_Cat));
    }
    public function Category_delete($cat_id)
    {
        $del_Cat =  Category::get()->find($cat_id);
        return $del_Cat;
    }

    /*----------------------End Category Functionality-------------------------*/
}
