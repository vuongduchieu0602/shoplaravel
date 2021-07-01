<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $table = 'shippings';
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'phone',
        'email',
        'note',
    ];
    //quan hệ với bảng con
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    //quan hệ với bảng cha
    public function order(){
        return $this->belongsTo(Order::class,'shipping_id');
    }
}
