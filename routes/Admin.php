<?php

use Illuminate\support\Facades\Route;

use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






/*----------------------Start Admin Route-------------------------*/

Route::group(['prefix' => 'Admin'], function () {
    route::get("/", 'Admin_Controller@dashboard')->name('admin.dashboard');
    route::get("login", 'Admin_Controller@login')->name('admin.login');
    route::get("Admin", 'Admin_Controller@login')->name('admin.login');
    route::post("post/login", 'Admin_Controller@postlogin')->name('admin.post.login');
    route::get("Dashboard", 'Admin_Controller@Dashboard')->name('admin.dashboard');
});
/*----------------------End Admin Route-------------------------*/


route::group(['prefix' => 'Admin', 'middleware' => 'auth:admin'], function () {

    // route::get("Dashboard", 'Admin_Controller@Dashboard')->name('admin.dashboard');

});

/*----------------------Start Category Route-------------------------*/
Route::group(['prefix' => 'Admin'], function () {

    route::get("Category", 'Category\Category_Controller@Category')->name('admin.category');
    route::get("Category/edit/{cat_id}", 'Category\Category_Controller@Category_edit')->name('admin.category.edit');
    route::post("Category/store", 'Category\Category_Controller@store')->name('admin.category.store');
    route::get("Category/delete/{cat_id}", 'Category\Category_Controller@Category_delete')->name('admin.category.delete');

    // route::resource('Problems', 'Category\Problems_Controller');
    route::get('Problems', 'Category\Problems_Controller@index')->name('admin.problems');
    route::post('Problems/store', 'Category\Problems_Controller@store')->name('admin.problems.store');
});
/*----------------------End Category Route-------------------------*/



/*----------------------Start Brand Route-------------------------*/
Route::group(['prefix' => 'Admin'], function () {
    route::get("Mothasilen", 'Mothasil\motahasil_Controller@index');
    route::post("Mothasilen/store", 'Mothasil\motahasil_Controller@store')->name('admin.Mothasilen.store');
});
/*----------------------End Brand Route-------------------------*/

/*----------------------Start Brand Route-------------------------*/
Route::group(['prefix' => 'Admin'], function () {
    route::get("Super_Visor", 'Super_Visor\Super@index')->name('admin.Super_Visor.index');
    // route::get("Super_Visor", 'Super_Visor\Super_Visor_Controller@store')->name('admin.Super_Visor.store');
});
/*----------------------End Brand Route-------------------------*/

/*----------------------Start Brand Route-------------------------*/
Route::group(['prefix' => 'Admin'], function () {

    route::get("Units", 'Units\Units_Controller@Units')->name('admin.Units');
    route::post("Units/store", 'Units\Units_Controller@store')->name('admin.Units.store');
});
/*----------------------End Brand Route-------------------------*/

/*----------------------Start Brand Route-------------------------*/
Route::group(['prefix' => 'Admin'], function () {
    route::get("Brand", 'Brand\Brand_Controller@Brand')->name('admin.brand');
    route::get("Brand/store", 'Brand\Brand_Controller@Brand')->name('admin.brand.store');
});
/*----------------------End Brand Route-------------------------*/



/*----------------------Start Device Route-------------------------*/
Route::group(['prefix' => 'Admin'], function () {
    route::get("About_Device", 'Device\Device_Controller@about')->name('admin.about');
    route::get("Device", 'Device\Device_Controller@Device')->name('admin.device');
    route::get("Device/store", 'Device\Device_Controller@store')->name('admin.device.store');
    route::get("Device/Droped", 'Device\Device_Controller@Droped')->name('admin.device.drop');
    route::get("Device/view/{id}", 'Device\Device_Controller@view')->name('admin.device.view');
    // route::get("Device/store", 'Device\Device_Controller@store')->name('admin.device.store');
});
/*----------------------End Device Route-------------------------*/

/*----------------------Start Blag Route-------------------------*/
Route::group(['prefix' => 'Admin'], function () {
    route::get("Blag", 'Blag\Blag_controller@Blag')->name('admin.Blag');
    route::post("Blag/store", 'Blag\Blag_controller@store')->name('admin.Blag.store');
    route::post("Blag/edit/", 'Blag\Blag_controller@edit')->name('admin.Blag.edit');
    route::post("Blag/done/", 'Blag\Blag_controller@done')->name('admin.Blag.done');
    route::get("Blag2", 'Blag\Blag_controller@blag2')->name('admin.Blag.blag2');
    route::post("Blag/update", 'Blag\Blag_controller@update')->name('admin.Blag.update');
    route::get("Blag/view/{id}", 'Blag\Blag_controller@view')->name('admin.Blag.view');
});
/*----------------------End Blag Route-------------------------*/

/*----------------------Start Fixed Route-------------------------*/
Route::group(['prefix' => 'Admin'], function () {
    // route::post("Blag/store", 'Blag\Blag_controller@store')->name('admin.Blag.store');
    route::get("Fixed", 'Fixed\Fixed_Controller@Fixed')->name('admin.Fixed');
    route::get("Fixed/Print/{id}", 'Fixed\Fixed_Controller@Print')->name('admin.Fixed.Print');
});
/*----------------------End Fixed Route-------------------------*/



/*----------------------Start Give Devices Route-------------------------*/
Route::group(['prefix' => 'Admin'], function () {

    route::get("Give_Dev", 'Give_Dev\Give_Dev_Controller@Give')->name('admin.Give_Dev');
    route::post("Give_Dev/add", 'Give_Dev\Give_Dev_Controller@add')->name('admin.Give_Dev.zdd');
});
/*----------------------End Give Devices Route-------------------------*/


/*----------------------Start Reports Route-------------------------*/
Route::group(['prefix' => 'Admin'], function () {

    route::get("Reports/has_fixed", 'Fixed\Fixed_Controller@Fixed')->name('admin.Report.has_fixed');
    route::get("Reports/Not_yet", 'Fixed\Fixed_Controller@not_yet')->name('admin.Report.not_yet');
    route::get("Reports/droped", 'Fixed\Fixed_Controller@droped')->name('admin.Report.droped');
    route::get("Reports/has_fixed_print", 'Fixed\Fixed_Controller@print')->name('admin.Report.has_fixed_print');
});
/*----------------------End Reports Route-------------------------*/



/*----------------------Start Setting Route-------------------------*/
Route::group(['prefix' => 'Admin'], function () {

    route::get("Setting", 'Setting\Setting_Controller@Setting')->name('admin.Setting');
});
/*----------------------End Setting Route-------------------------*/




/*----------------------Start User Route-------------------------*/
Route::group(['prefix' => 'Admin'], function () {
    route::get("Users", 'User\User_Controller@Users')->name('admin.users');
    route::get("Users/edit/", 'User\User_Controller@Users')->name('admin.users');
});
/*----------------------End User Route-------------------------*/



/*----------------------Start User Route-------------------------*/
Route::group(['prefix' => 'Admin', 'middleware' => 'Admin'], function () {
    // route::get("Dashboard", 'Admin_Controller@Dashboard');
    // route::get("Category", 'Admin_Controller@Category');
    // route::get("Brand", 'Admin_Controller@Brand');
});
/*----------------------End User Route-------------------------*/



/*----------------------Start Programmer Route-------------------------*/
Route::prefix('Admin')->group(function () {
    route::get("Me", 'Me_Controller@Me')->name('admin.me');
    route::resource('Test', 'Test_controller');
});


/*----------------------End Programmer Route-------------------------*/
