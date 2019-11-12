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



Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


// If banned



// Opret ny routes her
// Eksempel til kontakt os siden
Route::get('/kontakt', function() {


    return view('kontakt');

});

/* Admin Routes */
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

    Route::resource('admin/users', 'UsersController',['names'=> [

        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit',
        'update' => 'admin.users.update',
        'destroy' => 'admin.users.destroy'

    ]]);

    Route::resource('admin/media', 'MediaController',['names'=> [

        'index'=>'admin.media.index',
        'create'=>'admin.media.create',
        'store'=>'admin.media.store',
        'destroy' => 'admin.media.destroy'

    ]]);

});
/* User Routes */
Route::group(['middleware'=>'auth'], function() {
    Route::get('profile/password_update', 'UserProfileController@show');
    Route::put('profile/password/{password}', 'UserProfileController@password')->name('profile.password');
    Route::resource('profile', 'UserProfileController', ['names' => [
        'index'=>'profile.index',
        'update' => 'profile.update',
        'show' => 'password_update'
    ]]);
});

Route::get('/', 'HomeController@index')->name('index');
