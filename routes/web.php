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



/* Frontend Routes */

// Om os page
Route::get('/om-os', function() {

    return view('om-os');

});

// Vin page
Route::get('/vin-spiritus', function() {


    return view('vin-spiritus');

});

// Events page
Route::get('/events', function() {


    return view('events');

});

// Single event-post page
Route::get('/event-post', function() {


    return view('event-post');

});

// Kontakt page
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
    Route::get('profile/password_update', 'UserProfileController@passwordupdate')->name('profile.passwordupdate');
    Route::put('profile/password/{password}', 'UserProfileController@password')->name('profile.password');
    Route::resource('profile', 'UserProfileController', ['names' => [
        'index'=>'profile.index',
        'update' => 'profile.update',
        'show' => 'profile.show'
    ]]);


    Route::delete('clubs/{withdraw}', 'ClubsController@withdraw')->name('clubs.withdraw');

    Route::put('clubs/apply/{apply}', 'ClubsController@apply')->name('clubs.apply');
    Route::resource('clubs', 'ClubsController', ['names' => [
        'index'=>'clubs.index',
        'create'=>'clubs.create',
        'store'=>'clubs.store',
        'edit'=>'clubs.edit',
        'update' => 'clubs.update',
        'destroy' => 'clubs.destroy',
    ]]);

    Route::patch('clubManagement/active/{active}', 'ClubManagementController@active')->name('clubManagement.active');
    Route::patch('clubManagement/remove/{remove}', 'ClubManagementController@remove')->name('clubManagement.remove');

    Route::delete('clubManagement/deleteclub/{id}', 'ClubManagementController@deleteclub')->name('clubManagement.deleteclub');;

    Route::get('clubManagement/users/{users}', 'ClubManagementController@users')->name('clubManagement.users');
    Route::resource('clubManagement', 'ClubManagementController', ['names' => [
        'index'=>'clubManagement.index',
        'create'=>'clubManagement.create',
        'store'=>'clubManagement.store',
        'edit'=>'clubManagement.edit',
        'update' => 'clubManagement.update',
        'destroy' => 'clubManagement.destroy',
    ]]);

});

Route::get('/', 'HomeController@index')->name('index');
