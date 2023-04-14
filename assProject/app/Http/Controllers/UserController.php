<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showDetailUser($id){
        $user=User::find($id);
        return view('profile',['user'=>$user]);
    }

    public function changeRoleToSeller($id){
        $user=User::find($id);
        $user->role = 'seller';
        $user->save();
        //return view('profile',['user'=>$user]);
        return redirect('profile/'.$user['id']);
    }
}
