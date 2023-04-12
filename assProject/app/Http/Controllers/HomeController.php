<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            // User is authenticated, execute logic
            // ...
        } else {
            Session::flash('checkLogin',"Please login to proceed");
        }
        $cars=Car::all();
        return view("home",['cars'=>$cars]);
    }
}
