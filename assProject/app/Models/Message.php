<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'contactNumber',
        'comment',
        'car_id',
        'seller_id',
    ];
    public function getCar(){
        return $this->belongsTo(Car::class);
    }

}
