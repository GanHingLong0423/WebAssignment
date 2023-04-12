<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function showCar($name){
        if (Auth::check()) {
            // User is authenticated, execute logic
            // ...
        } else {
            Session::flash('checkLogin',"Please login to proceed");
        }
        $cars=Car::all();
        return view($name."Brand",['cars'=>$cars]);
    }
    public function showAllCar(){
        if (Auth::check()) {
            // User is authenticated, execute logic
            // ...
        } else {
            Session::flash('checkLogin',"Please login to proceed");
        }
        $cars=Car::all();
        return view("car",['cars'=>$cars]);
    }

    public function showDetailCar($id){
        $car=Car::find($id);
        return view('detailCar',['car'=>$car]);
    }


}
