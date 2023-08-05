<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admin_Controller extends Controller
{
    
    /*----------------------Start Dashboard Functionality-------------------------*/
    public function Dashboard()
    {

        return view('Admin.Dashboard');
    }

    /*----------------------End Dashboard Functionality-------------------------*/

    /*----------------------Start login Functionality-------------------------*/
    public function login()
    {
        return view('Admin.login');
    }
    
    /*----------------------Start login Functionality-------------------------*/
    public function postlogin(Request $request)
    {
        return $request;
    }
    
    /*----------------------End login Functionality-------------------------*/






}
