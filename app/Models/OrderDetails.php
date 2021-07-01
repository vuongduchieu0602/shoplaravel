<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table ='order_details';
    protected $fillable = [
        'order_id',
        'product_id',
        'quantily'
    ];
    //quan hệ với bảng con
    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }
    public function product(){
        return $this->hasMany(Product::class,'product_id');
    }


}
