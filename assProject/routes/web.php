<?php

use App\Http\Controllers\carController;
use App\Http\Controllers\messageController;
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
    return view('welcome');
});

Route::get('car',[carController::class,'showAllCar']);
Route::get('car/{honda}',[carController::class,'showCar']);
Route::get('car/{perodua}',[carController::class,'showCar']);
Route::get('car/{proton}',[carController::class,'showCar']);
Route::get('car/proton/{id}',[carController::class,'showDetailCar']);
Route::get('car/perodua/{id}',[carController::class,'showDetailCar']);
Route::get('car/honda/{id}',[carController::class,'showDetailCar']);

Route::get('car/{brand}/{id}/contact',[messageController::class,'showContactForm']);
Route::post("contactMessage",[messageController::class,'contactMessage']);

