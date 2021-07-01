<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;
    protected $table = 'category_products';
    protected $fillable = [
        'name',
        'slug',
        'status',
    ];
    //quan hệ với bảng cha
    public function product(){
        return $this->hasMany(Product::class,'category_id');
    }
}
