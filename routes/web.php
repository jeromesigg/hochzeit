<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contacts', 'ContactsController@create');
Route::post('/contacts', 'ContactsController@store');

Route::get('/invitations', 'InvitationsController@create');
Route::post('/invitations', 'InvitationsController@store');

Route::get('/guest_gift', 'GuestGiftController@create');
Route::post('/guest_gift', 'GuestGiftController@store');


Route::group(['middleware' => 'admin'], function(){

    Route::get('/admin','AdminController@index');
    Route::resource('admin/stories', 'AdminStoriesController');
    Route::resource('admin/shedules', 'AdminShedulesController');
    Route::resource('admin/contacts', 'AdminContactsController');
    Route::resource('admin/albums', 'AdminAlbumsController');
    Route::resource('admin/pictures', 'AdminPicturesController');
    Route::resource('admin/locations', 'AdminLocationsController');
    Route::resource('admin/invitations', 'AdminInvitationsController');
    Route::resource('admin/responses', 'AdminResponsesController');
    Route::resource('admin/teams', 'AdminTeamsController');
    Route::resource('admin/gifts', 'AdminGiftsController');
    Route::resource('admin/users', 'AdminUsersController');
    Route::get('admin/guestgifts', ['as'=>'guestgifts.index','uses' => 'AdminGuestGiftsController@index']);
});

Route::get('admin/run-migrations', function () {
    return Artisan::call('migrate', ["--force" => true ]);
});

Route::get('admin/config-cache', function () {
    return Artisan::call('config:cache');
});