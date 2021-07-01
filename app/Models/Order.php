<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable = [
        'user_id',
        'shipping_id',
        'payment_id',
        'total_price',
        'total_quantily',
        'status',
    ];
    //quan hệ với bảng con
    public function user(){
        return $this->hasMany(User::class,'user_id');
    }
    public function shipping(){
        return $this->belongsTo(Shipping::class,'shipping_id');
    }
    public function payment(){
        return $this->belongsTo(Payment::class,'payment_id');
    }
    //quan hệ với bảng cha
    public function orderdetail(){
        return $this->hasMany(OrderDetail::class,'order_id');
    }

}

