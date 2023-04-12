<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
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
            'seller_id'=>$request->sellerid,
        ]);

        return redirect('car')->with('submitMessage',"You Have Successfully Submiited Your Message."); 
    }
    // Find message using user_id to find the correct car, then use car_id to search message
    public function showMessage($user_id){
        
        $messages = DB::table('messages')->
            where('seller_id','=',$user_id)
            ->get();

        
        return view('messages',['messages'=>$messages]);

    }
}
