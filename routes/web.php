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

Route::get('/', function () { //first type
    return view('home');
})->middleware('auth');

Auth::routes();
Route::get('/fmg/{id}/{name}', "App\Http\Controllers\adminController@fmg"); //fourth type
Route::get('/fmg', "App\Http\Controllers\adminController@fmg1"); //thired type
Route::get('/product', "App\Http\Controllers\ProductController@viewProduct"); //fourth type
Route::get('/insert', "App\Http\Controllers\ProductController@insertProduct"); //fourth type
Route::post('/insert', "App\Http\Controllers\ProductController@insertProduct"); //fourth type
Route::get('/product/delete/{id}', "App\Http\Controllers\ProductController@deleteProduct"); //fourth type

Route::get('/product/edit/{id}', "App\Http\Controllers\ProductController@editProduct"); //fourth type
Route::post('/product/edit/{id}', "App\Http\Controllers\ProductController@editProduct"); //fourth type

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/fmg0', [App\Http\Controllers\adminController::class, 'fmg0'])->name('fmg');//second type

// credit & employees one to one
Route::get('/insertc', 'App\Http\Controllers\creditController@insertc');
Route::post('/insertc', "App\Http\Controllers\creditController@insertc");
Route::get('/insertName', 'App\Http\Controllers\creditController@insertName');
Route::post('/insertName', "App\Http\Controllers\creditController@insertName");
Route::get('/insertNumber', 'App\Http\Controllers\creditController@insertNumber');
Route::post('/insertNumber', "App\Http\Controllers\creditController@insertNumber");
Route::get('/credit/edit/{id}', "App\Http\Controllers\creditController@editCredit"); //fourth type
Route::post('/credit/edit/{id}', "App\Http\Controllers\creditController@editCredit"); //fourth type

Route::get('/displayc', 'App\Http\Controllers\creditController@displayc');
Route::get('/credit/delete/{id}', 'App\Http\Controllers\creditController@deletecredit');

