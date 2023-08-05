<?php

use Illuminate\Http\Request;
use Illuminate\support\Facades\Route;

use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


/*----------------------Start API Route-------------------------*/

Route::group(['prefix' => 'Admin', 'middleware' => ['check_password']], function () {

    route::get("get-categorys", 'Admin\ApiController@categorys');
    route::get("get-category", 'Admin\ApiController@category');
    // route::get("get-man-create", 'Admin_Controller@login')->name('admin.login');
    // route::get("get-man-edit", 'Admin_Controller@login')->name('admin.login');
    // route::get("get-man-delete", 'Admin_Controller@login')->name('admin.login');
});
/*----------------------End API Route-------------------------*/