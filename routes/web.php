<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

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
    return view('login');
});

Route::get('index',[User::class,'register']);
Route::POST('index',[User::class,'register1']);
Route::get('delete/{id}',[User::class,'delete']);
Route::get('update/{id}',[User::class,'update']);
Route::POST('update/{id}',[User::class,'update1']);
Route::get('login',[User::class,'login']);
Route::POST('login1',[User::class,'login1']);
Route::get('ajax',[User::class,'ajax']);
Route::post('insert',[User::class,'ajaxinsert'])->name('data.insert');
