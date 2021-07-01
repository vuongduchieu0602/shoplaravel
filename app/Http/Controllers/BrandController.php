<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\CategoryProduct;
use App\Models\Product;

class BrandController extends Controller
{
    public function add_brand(){
        return view('admin.brand.add_brand');
    }
    public function all_brand(){
        $brand = Brand::orderBy('id','desc')->get();
        $dataView = [
            'brand' => $brand,
        ];
        return view('admin.brand.all_brand',$dataView);
    }
    public function save_brand(Request $request){
        $this->validate($request,
        [
            'name'=>'required|unique:brands,name',
            'status'=>'required',
        ],[
            'name.required'=>'Hãy nhập tên thương hiệu sản phẩm',
            'name.unique'=>'Hãy nhập tên khác cho thương hiệu',
            'status.required'=>'Hãy chọn trạng thái cho thương hiệu'
        ]);
        $brand = new Brand;
        $brand->name = $request->name;
        $brand->slug = \Str::slug($request->name);
        $brand->status = $request->status;
        $brand->save();
        return redirect()->route('add_brand')->with('thongbao','Thêm thương hiệu thành công');
    }
    public function edit_brand($id){
        $brand = Brand::find($id);
        $dataView = [
            'brand'=>$brand,
        ];
        return view('admin.brand.edit_brand',$dataView);
    }
    public function post_edit_brand(Request $request, $id){
        $brand = Brand::find($id);
        $this->validate($request,[
           'name'=>'required|unique:brands,name,'.$id,
           'status'=>'required',
        ],[
            'name.required'=>'Hãy nhập tên thương hiệu sản phẩm',
            'name.unique'=>'Hãy nhập tên khác cho thương hiệu',
            'status.required'=>'Hãy nhập trạng thái thương hiệu',
        ]);

        $brand->name = $request->name;
        $brand->slug = \Str::slug($request->name);
        $brand->status = $request->status;
        $brand->save();
        return redirect()->route('all_brand')->with('thongbao','Sửa thương hiệu thành công');
    }
    public function delete_brand($id){
        Brand::destroy($id);
        return redirect()->route('all_brand')->with('thongbao','Xóa thương hiệu thành công');
    }
    public function show_brand_home($id)
    {
        $category = CategoryProduct::all();
        $brand = Brand::all();
        $brand_by_id = Product::where('brand_id',$id)->get();
        $dataView = [
            'category'=>$category,
            'brand'=>$brand,
            'brand_by_id'=>$brand_by_id,
        ];
        return view('admin.brand.show',$dataView);
    }
}
