<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Message;

class Car extends Model
{
    use HasFactory;
    public function getUser(){
        return $this->belongsTo(User::class);
    }

    public function getMessage(){
        return $this->hasMany(Message::class);
    }
}
