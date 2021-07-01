<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\CategoryProduct;

class ProductController extends Controller
{
    public function add_product(){
        $category = CategoryProduct::all();
        $brand = Brand::all();
        $dataView = [
            'category' => $category,
            'brand' => $brand,
        ];
        return view('admin.product.add_product',$dataView);
    }
    public function all_product(){
        $product = Product::orderBy('id','desc')->get();
        $dataView = [
            'product' => $product,
        ];
        return view('admin.product.all_product', $dataView);
    }
    public function save_product(Request $request){
        $this->validate($request,
        [
            'name'=>'required|unique:products,name',
            'desc'=>'required',
            'price'=>'required|numeric|min:1000',
            'image'=>'image',
            'status'=>'required',
        ],[
            'name.required'=>'Bạn chưa nhập tên sản phẩm',
            'name.unique'=>'Trùng tên sản phẩm',
            'desc.required'=>'Bạn chưa nhập mô tả sản phẩm',
            'price.required'=>'Bạn chưa nhập giá sản phẩm',
            'price.numeric'=>'Hãy nhập số',
            'price.min'=>'Hãy nhập giá lớn hơn 1000',
            'image'=>'Hình ảnh tải lên không đúng định dạng',
            'status'=>'Bạn chưa chọn trạng thái sản phẩm',
        ]);
        $product = new Product;
        $product->name = $request->name;
        $product->slug = \Str::slug($request->name);
        $product->desc = $request->desc;
        $product->price = $request -> price;
        $product->category_id = $request->product_category;
        $product->brand_id = $request->product_brand;
        $product->status = $request->status;
        if($request->hasFile('image')){
            $destination_path = 'public/images/products';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $product->image = $image_name;
        }
        $product->save();
        return redirect()->route('all_product')->with('thongbao','Thêm sản phẩm thành công');
    }
    public function edit_product($id){
        $product = Product::find($id);
        $category = CategoryProduct::all();
        $brand = Brand::all();
        $dataView = [
            'product' => $product,
            'category' => $category,
            'brand'=> $brand,
        ];
        return view('admin.product.edit_product',$dataView);
    }
    public function post_edit_product(Request $request, $id){
        $product = Product::find($id);
        $this->validate($request,
        [
            'name'=>'required|unique:products,name,'.$id,
            'desc'=>'required',
            'price'=>'required|numeric|min:1000',
            'status'=>'required'
        ],[
            'name.required'=>"Hãy nhập tên cho sản phẩm",
            'name.unique'=>"Hãy nhập tên khác cho sản phẩm",
            'desc.required'=>"Hãy nhập mô tả cho sản phẩm",
            'price.required'=>"Hãy nhập giá cho sản phẩm",
            'price.min'=>"Tối thiếu là lớn hơn 1000",
            'status.required'=>"Chọn trạng thái cho sản phẩm",
        ]);
        $product->name = $request->name;
        $product->slug = \Str::slug($request->name);
        $product->desc = $request->desc;
        $product->price = $request -> price;
        $product->category_id = $request->product_category;
        $product->brand_id = $request->product_brand;
        $product->status = $request->status;
        if($request->hasFile('image')){
            $destination_path = 'public/images/products';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $product->image = $image_name;
        }
        $product->save();
        return redirect()->route('all_product')->with('thongbao','Sửa sản phẩm thành công');

    }
    public function delete_product($id){
        Product::destroy($id);
        return redirect()->route('all_product')->with('thongbao','Xóa thành công sản phẩm');
    }

}
