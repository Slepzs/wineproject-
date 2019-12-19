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

use App\Wine;
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

    $wines = Wine::with('winecategory', 'winelocations')->get();
    // return $wines;
    return view('vin-spiritus', compact('wines'));

});

// Single vin-post page
Route::get('wine/{slug}', function($slug) {

    $wine = Wine::with('winecategory', 'winelocations')->where('slug', $slug)->first();

    $randomwines = Wine::inRandomOrder()->with('winecategory', 'winelocations')->limit('3')->get();

    // return $wine;
    return view('wine', compact('randomwines', 'wine'));

})->name('wine');

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

})->name('kontakt');





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


    Route::resource('admin/wines', 'AdminWinesController',['names'=> [
        'index'=>'admin.wines.index',
        'create'=>'admin.wines.create',
        'store'=>'admin.wines.store',
        'edit'=>'admin.wines.edit',
        'update' => 'admin.wines.update',
        'destroy' => 'admin.wines.destroy',
        'show' => 'admin.wines.show'
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

    Route::patch('clubs/lock/{lock}', 'ClubsController@lock')->name('clubs/lock');
    Route::get('clubs/overview', 'ClubsController@myclubs')->name('clubs.myclubs');
    Route::delete('clubs/{withdraw}', 'ClubsController@withdraw')->name('clubs.withdraw');
    Route::put('clubs/apply/{apply}', 'ClubsController@apply')->name('clubs.apply');


    Route::get('clubs/search', 'ClubsController@search')->name('clubs.search');
    Route::resource('clubs', 'ClubsController', ['names' => [
        'index'=>'clubs.index',
        'create'=>'clubs.create',
        'store'=>'clubs.store',
        'show'=>'clubs.show',
        'edit'=>'clubs.edit',
        'update' => 'clubs.update',
        'destroy' => 'clubs.destroy',
    ]]);
    Route::patch('clubManagement/role/{id}', 'ClubManagementController@role')->name('clubManagement.role');
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

    Route::get('ratings/search', 'WinesController@search')->name('ratings.search');
    Route::resource('wines', 'WinesController',['names'=> [
        'index'=>'wines.index',
        'create'=>'wines.create',
        'store'=>'wines.store',
        'edit'=>'wines.edit',
        'update' => 'wines.update',
        'show' => 'wines.show'
    ]]);

    Route::group(array('prefix' => 'ratings'), function() {

        Route::get('choose', 'WinesRatingController@index')->name('ratings.choose');
        Route::get('confirm-rating/{slug}', 'WinesRatingController@confirmrating')->name('ratings.confirm-rating');
        Route::post('confirmclub', 'WinesRatingController@confirmclub')->name('ratings.confirmclub');
        Route::get('rate/{slug}/club/{club}', 'WinesRatingController@rate')->name('ratings.rate');
        Route::post('rated/{wine}', 'WinesRatingController@rated')->name('ratings.rated');

    });

});

Route::get('/', 'HomeController@index')->name('index');
