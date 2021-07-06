<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\CategoryProduct;
use Cart;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
        public function save_cart(Request $request){
        $category = CategoryProduct::all();
        $brand = Brand::all();
        $productID = $request->productid_hidden;
        $quantity = $request->qty;
        $product_info = Product::where('id',$productID)->get();
        $dataView = [
            'category' => $category,
            'brand' => $brand,
            'product_info'=>$product_info,
            'qty'=>$quantity,
        ];
        return view('pages.cart.show_cart',$dataView);
    }

}
