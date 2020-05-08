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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contacts', 'ContactsController@create');
Route::post('/contacts', 'ContactsController@store');


Route::group(['middleware' => 'admin'], function(){

    Route::get('/admin','AdminController@index');
    Route::resource('admin/stories', 'AdminStoriesController');
    Route::resource('admin/shedules', 'AdminShedulesController');
});

Route::get('admin/run-migrations', function () {
    return Artisan::call('migrate', ["--force" => true ]);
});