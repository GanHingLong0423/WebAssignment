<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SellerPortalController;

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
Route::middleware(['auth', 'role:admin'])->group(function () {
    // example route
    // Route::get('admin-auth', function () {
    //     return view('adminAuth');
    // });
    Route::get('car/proton/{id}', [carController::class, 'showDetailCar']);
    Route::get('car/perodua/{id}', [carController::class, 'showDetailCar']);
    Route::get('car/honda/{id}', [carController::class, 'showDetailCar']);

    Route::get('car/{brand}/{id}/contact', [messageController::class, 'showContactForm']);
    Route::post("contactMessage", [messageController::class, 'contactMessage']);
});

// seller authentication
Route::middleware(['auth', 'role:seller'])->group(function () {
    // example route
    // Route::get('seller-auth', function () {
    //     return view('sellerAuth');
    // });
    Route::get('car/proton/{id}', [carController::class, 'showDetailCar']);
    Route::get('car/perodua/{id}', [carController::class, 'showDetailCar']);
    Route::get('car/honda/{id}', [carController::class, 'showDetailCar']);

    Route::get('car/{brand}/{id}/contact', [messageController::class, 'showContactForm']);
    Route::post("contactMessage", [messageController::class, 'contactMessage']);
});
Route::middleware(['auth', 'role:user'])->group(function () {
    // example route
    // Route::get('seller-auth', function () {
    //     return view('sellerAuth');
    // });
    Route::get('car/proton/{id}', [carController::class, 'showDetailCar']);
    Route::get('car/perodua/{id}', [carController::class, 'showDetailCar']);
    Route::get('car/honda/{id}', [carController::class, 'showDetailCar']);

    Route::get('car/{brand}/{id}/contact', [messageController::class, 'showContactForm']);
    Route::post("contactMessage", [messageController::class, 'contactMessage']);
});

Route::get('car', [carController::class, 'showAllCar']);
Route::get('car/{honda}', [carController::class, 'showCar']);
Route::get('car/{perodua}', [carController::class, 'showCar']);
Route::get('car/{proton}', [carController::class, 'showCar']);



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [LoginController::class, 'logout']);

Route::get('/seller/dashboard', [sellerPortalController::class, 'showListings'])->name('seller.dashboard');
Route::delete('/seller/car/{car}', [sellerPortalController::class, 'destroy'])->name('seller.destroy');
// Show the create car form
Route::get('/create', [sellerPortalController::class, 'create'])->name('seller.create');

// Save the created car
Route::post('/seller/cars', [sellerPortalController::class, 'store'])->name('seller.store');
Route::post('/seller/update/{id}', [sellerPortalController::class, 'update'])->name('seller.update');
Route::post('/seller/edit/{id}', [sellerPortalController::class, 'edit'])->name('seller.edit');
