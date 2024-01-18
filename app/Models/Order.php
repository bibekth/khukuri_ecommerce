<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contact','address','receiver','status','total_amount'
    ];

    public function orderDetail(){
        return $this->hasMany(OrderDetail::class,'id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
