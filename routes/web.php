<?php

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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


// Opret ny routes her
// Eksempel til kontakt os siden
Route::get('/kontakt', function() {


    return view('kontakt');

});


Route::group(['middleware'=>'IsAdmin'], function() {

    Route::get('/admin', function(){

        return view('admin.index');

    });


    Route::resource('admin/roles', 'AdminRolesController',['names'=> [

        'index'=>'admin.roles.index',
        'create'=>'admin.roles.create',
        'store'=>'admin.roles.store',
        'edit'=>'admin.roles.edit'


    ]]);

});

