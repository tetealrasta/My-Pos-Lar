<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Me_Controller extends Controller
{
    public function Me(){

        return view("includes.Me");
    }
}
