<?php

namespace App\Http\Controllers\Admin\Super_Visor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Super extends Controller
{

    public function index(){
        return view('Admin.Super_Visor.Super');
    }
}
