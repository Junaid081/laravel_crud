<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddData;


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
Route::get('index',[AddData::class, 'listofdata']);
Route::post('add',[AddData::class, 'add']);
Route::get('delete/{id}',[AddData::class, 'delete']);
Route::get('edit/{id}',[AddData::class, 'show']);
Route::view('show','show');
# Route::get('update',[AddData::class, 'update']);

Route::post('update/{id}',[AddData::class,'update']);
#Route::update('update/{id}',[AddData::class,'edit']);

// For Search the data 
Route::get('search/{name}',[AddData::class, 'search']);