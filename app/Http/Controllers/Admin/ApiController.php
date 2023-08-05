<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\GeneralTrits;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    use GeneralTrits;

    public function categorys()
    {

        $cats = Category::get();

        return response()->json($cats);
    }
    public function category()
    {

        $cat = Category::get()->find(7);

        if (!$cat)


            return  $this->Return_Error(101, 'There-is-some-Problems-Things ok bro');


            return $this->Return_Data('category',$cat,200,'GOOD JOB MAN') ;
    }
}
