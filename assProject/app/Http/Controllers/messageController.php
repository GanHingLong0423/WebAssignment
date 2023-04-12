<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\Message;
class messageController extends Controller
{
    
    
    public function showContactForm($brand,$id){
        $car=Car::find($id);
        return view('contact',['car'=>$car]);
    }

    public function contactMessage(Request $request){
        $request->validate([
            'name'=>'required|min:3',
            'contactNumber'=>'required|numeric',
            'email'=>'required|email',
            'comment'=>'required',
        ]);
        
        Message::create([
            'name'=>$request->name,
            'contactNumber'=>$request->contactNumber,
            'email'=>$request->email,
            'comment'=>$request->comment,
            'car_id'=>$request->carid,
            
        ]);

        return redirect('car')->with('submitMessage',"You Have Successfully Submiited Your Message."); 
    }
}
