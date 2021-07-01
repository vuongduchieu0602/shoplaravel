<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table='payments';
    protected $fillable = [
        'name'
    ];
    //quan hệ với bảng cha
    public function order(){
        return $this->belongsTo(Order::class,'payment_id');
    }
}
