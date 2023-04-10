<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = $request->email;
        $password = User::find($email)->password;
        // if($request->password == $check_user->password){
        //     $request->session()->put('user', $check_user->name);
        //     return redirect('car');
        // }
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
      
            // Authentication passed...
            return redirect('car');
        }else{
            return "not passed";
        }
    }

    function signup(Request $request){
        $request->validate([
            'name' => 'required',
            'phoneNum' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
        ]);
        $email = $request->email;
        $check_email = User::find($email);
        if(!$check_email){
            $data = $request->all();
            User::create($data);
            return redirect('login');
        }
    }
}
