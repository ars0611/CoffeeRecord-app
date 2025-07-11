<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeRecordController;
use App\Http\Controllers\HomeController; 

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

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home',[HomeController::class, 'index'])->name('home');
    Route::resource('/coffee_records', CoffeeRecordController::class);
});