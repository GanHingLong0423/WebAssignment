<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Car;

use Illuminate\Http\Request;

class carController extends Controller
{
    //
    public function showCar($name){
        $cars=Car::all();
        return view($name."Brand",['cars'=>$cars]);
    }
    public function showAllCar(){
        $cars=Car::all();
        return view("car",['cars'=>$cars]);
    }

    public function showDetailCar($id){
        $car=Car::find($id);
        return view('detailCar',['car'=>$car]);
    }


}
