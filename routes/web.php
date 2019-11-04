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

Route::group(['middleware'=>'IsAdmin'], function() {

    Route::get('/admin', function(){

        $user = Auth::user();

        return view('admin.index', compact('user'));

    });


    Route::resource('admin/roles', 'AdminRolesController',['names'=> [

        'index'=>'admin.roles.index',
        'create'=>'admin.roles.create',
        'edit'=>'admin.roles.edit'

    ]]);

});

