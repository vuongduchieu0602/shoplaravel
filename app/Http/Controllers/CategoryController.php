<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Models\Brand;
use App\Models\Product;

class CategoryController extends Controller
{
    public function add_category(){
        return view('admin.category.add_category');
    }
    public function all_category(){
        $category = CategoryProduct::orderBy('id','desc')->get();
        $dataView = [
            'category' => $category,
        ];
        return view('admin.category.all_category',$dataView);
    }
    public function save_category(Request $request){
        $this->validate($request,
        [
            'name'=>'required|unique:category_products,name',
            'status'=>'required',
        ],[
            'name.required'=>'Hãy nhập tên danh mục sản phẩm',
            'name.unique'=>'Hãy nhập tên khác cho danh mục sản phẩm',
            'status.required'=>'Hãy chọn trạng thái cho danh mục',
        ]);
        $category = new CategoryProduct;
        $category->name = $request->name;
        $category->slug = \Str::slug($request->name);
        $category->status = $request -> status;
        $category->save();
        return redirect()->route('add_category')->with('thongbao','Thêm danh mục thành công');

    }
    public function edit_category($id){
        $category = CategoryProduct::find($id);
        $dataView = [
            'category' => $category,
        ];
        return view('admin.category.edit_category',$dataView);
    }
    public function post_edit_category(Request $request,$id){
        $category = CategoryProduct::find($id);
        $this->validate($request,
        [
            'name'=>'required|unique:category_products,name,'.$id,
            'status'=>'required',
        ],[
            'name.required'=>'Hãy nhập tên danh mục sản phẩm',
            'name.unique'=>'Hãy nhập tên khác cho danh mục sản phẩm',
            'status.required'=>'Hãy chọn trạng thái cho sản phẩm',
        ]);

        $category->name = $request->name;
        $category->slug = \Str::slug($request->name);
        $category->status = $request -> status;
        $category->save();
        return redirect()->route('all_category')->with('thongbao','Sửa danh mục thành công');

    }
    public function delete_category($id){
        CategoryProduct::destroy($id);
        return redirect()->route('all_category')->with('thongbao','Xóa danh mục thành công');
    }
    public function show_category_home($id){
        $category = CategoryProduct::all();
        $brand = Brand::all();
        $category_by_id = Product::where('category_id',$id)->get();
        $dataView = [
            'category'=>$category,
            'brand'=>$brand,
            'category_by_id'=>$category_by_id,
        ];
        return view('admin.category.show',$dataView);
    }
}
