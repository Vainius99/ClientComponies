<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('clients')->group(function () {

    Route::get('','App\Http\Controllers\ClientController@index')->name('client.index');
    Route::get('create', 'App\Http\Controllers\ClientController@create')->name('client.create');
    Route::post('store', 'App\Http\Controllers\ClientController@store')->name('client.store');
    Route::get('edit/{client}', 'App\Http\Controllers\ClientController@edit')->name('client.edit');
    Route::get('update/{client}', 'App\Http\Controllers\ClientController@update')->name('client.update');
    Route::post('delete/{client}', 'App\Http\Controllers\ClientController@destroy')->name('client.destroy');
    Route::get('show/{client}', 'App\Http\Controllers\ClientController@show')->name('client.show');
});

    Route::prefix('componies')->group(function () {

    Route::get('','App\Http\Controllers\ComponyController@index')->name('compony.index')->middleware("auth");
    Route::get('create', 'App\Http\Controllers\ComponyController@create')->name('compony.create')->middleware("auth");
    Route::post('store', 'App\Http\Controllers\ComponyController@store')->name('compony.store')->middleware("auth");
    Route::get('edit/{compony}', 'App\Http\Controllers\ComponyController@edit')->name('compony.edit')->middleware("auth");
    Route::get('update/{compony}', 'App\Http\Controllers\ComponyController@update')->name('compony.update')->middleware("auth");
    Route::post('delete/{compony}', 'App\Http\Controllers\ComponyController@destroy')->name('compony.destroy')->middleware("auth");
    Route::get('show/{compony}', 'App\Http\Controllers\ComponyController@show')->name('compony.show')->middleware("auth");
});
    // Auth::routes();

    // Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
