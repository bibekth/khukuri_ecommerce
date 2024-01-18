<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','price','weight','size','description','image'
    ];

    public function cart(){
        return $this->hasMany(Cart::class,'id');
    }

    public function order(){
        return $this->hasMany(Order::class);
    }
}
