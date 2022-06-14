<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        // Riders route
Route::get('/riders', 'App\Http\Controllers\PagesController@riders');
Route::get('/addRiders', 'App\Http\Controllers\PagesController@addRiders');
Route::post('/rider/delete/{id}', 'App\Http\Controllers\PagesController@deleteRider')->name('deleterider');
Route::get('/rider/status/{id}', 'App\Http\Controllers\PagesController@rider_status')->name('riderstatus');


    //    Driver routes
Route::get('/drivers', 'App\Http\Controllers\PagesController@drivers');
Route::get('/un-approved-driver', 'App\Http\Controllers\PagesController@_unApproved');
Route::get('/driver/statement/{id}', 'App\Http\Controllers\PagesController@driver_statement')->name('statement');
// Route::post('/driver/statement/{id}', 'App\Http\Controllers\PagesController@viewDriver')->name('statement');
Route::post('/driver/delete/{id}', 'App\Http\Controllers\PagesController@deleteDriver')->name('deletedriver');
Route::get('/driver/status/{id}', 'App\Http\Controllers\PagesController@driverStatus')->name('driverstatus');



//  Trips routes
Route::get('/trips', 'App\Http\Controllers\TripsController@trips');
Route::get('/completed-trips', 'App\Http\Controllers\TripsController@_completed');
Route::get('/scheduled-trips', 'App\Http\Controllers\TripsController@_scheduled');
Route::get('/cancelled-trips', 'App\Http\Controllers\TripsController@_cancelled');
Route::get('/trip-status/{id}', 'App\Http\Controllers\TripsController@trip_status')->name('tripstatus');
Route::get('/trip-history/{id}', 'App\Http\Controllers\TripsController@_history')->name('tripshistory');


        //  vehicles routes
Route::get('/vehicles', 'App\Http\Controllers\PagesController@vehicles');

        // Admin route
Route::get('/admin', 'App\Http\Controllers\UserController@showUsers');
Route::get('/admin/create-user', 'App\Http\Controllers\UserController@createUsers');
Route::post('/admin/create-user', 'App\Http\Controllers\UserController@saveUser')->name('/admin');
Route::get('/admin/edit/{id}', 'App\Http\Controllers\UserController@editUser')->name('edituser');
Route::post('/admin/update/{id}', 'App\Http\Controllers\UserController@updateUser')->name('updateuser');
Route::post('/admin/delete/{id}', 'App\Http\Controllers\UserController@deleteUser')->name('deleteuser');
Route::get('/admin/status/{id}', 'App\Http\Controllers\UserController@userStatus')->name('userStatus');