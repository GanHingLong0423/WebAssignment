<?php

use App\Http\Controllers\carController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
    // return view('welcome');
    return redirect('car');
});

// admin authentication
Route::middleware(['auth', 'role:admin'])->group(function() {
    // example route
    // Route::get('admin-auth', function () {
    //     return view('adminAuth');
    // });
});

// seller authentication
Route::middleware(['auth', 'role:seller'])->group(function() {
    // example route
    // Route::get('seller-auth', function () {
    //     return view('sellerAuth');
    // });
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


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [LoginController::class,'logout']);
