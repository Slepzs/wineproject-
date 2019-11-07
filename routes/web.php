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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


// Opret ny routes her
// Eksempel til kontakt os siden
Route::get('/kontakt', function() {


    return view('kontakt');

});


Route::group(['middleware'=>'IsAdmin'], function() {



    Route::get('admin/', [
        'uses' => 'HomeController@admin',
        'as' => 'admin'
    ]);


    Route::resource('admin/roles', 'AdminRolesController',['names'=> [

        'index'=>'admin.roles.index',
        'create'=>'admin.roles.create',
        'store'=>'admin.roles.store',
        'edit'=>'admin.roles.edit',
        'update' => 'admin.roles.update',
        'destroy' => 'admin.roles.destroy'


    ]]);

});

