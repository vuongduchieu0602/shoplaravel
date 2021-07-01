<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Models\Brand;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $category = CategoryProduct::all();
        $brand = Brand::all();
        $product = Product::orderBy('id','desc')->limit(6)->get();
        $dataView = [
            'category'=>$category,
            'brand'=>$brand,
            'product'=>$product,
        ];
        return view('pages.home',$dataView);
    }
    public function contact(){
        return view('pages.contact');
    }
}
