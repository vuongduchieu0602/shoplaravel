<?php
namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\BrandController;

//Frontend
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/trang-chu',[HomeController::class,'index'])->name('home');
Route::get('/lien-he',[HomeController::class,'contact'])->name('contact');


//Backend
Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'login'])->name('login');
    Route::get('login',[AdminController::class,'login'])->name('login');
    Route::post('login',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('dashboard',[AdminController::class,'getdashboard'])->name('getdashboard');

    Route::get('logout',[AdminController::class,'logout'])->name('logout');
    //CategoryProduct
    Route::get('add-category',[CategoryController::class,'add_category'])->name('add_category');
    Route::get('all-category',[CategoryController::class,'all_category'])->name('all_category');
    Route::post('save-category',[CategoryController::class,'save_category'])->name('save_category');
    Route::get('edit-category/{id}',[CategoryController::class,'edit_category'])->name('edit_category');
    Route::get('delete-category/{id}',[CategoryController::class,'delete_category'])->name('delete_category');
    Route::post('edit-category/{id}',[CategoryController::class,'post_edit_category'])->name('post_edit_category');
    //Brand
    Route::get('add-brand',[BrandController::class,'add_brand'])->name('add_brand');
    Route::get('all-brand',[BrandController::class,'all_brand'])->name('all_brand');
    Route::post('save-brand',[BrandController::class,'save_brand'])->name('save_brand');
    Route::get('edit-brand/{id}',[BrandController::class,'edit_brand'])->name('edit_brand');
    Route::get('delete-brand/{id}',[BrandController::class,'delete_brand'])->name('delete_brand');
    Route::post('edit-brand/{id}',[BrandController::class,'post_edit_brand'])->name('post_edit_brand');
    //Product
    Route::get('add-product',[ProductController::class,'add_product'])->name('add_product');
    Route::get('all-product',[ProductController::class,'all_product'])->name('all_product');
    Route::post('save-product',[ProductController::class,'save_product'])->name('save_product');
    Route::get('edit-product/{id}',[ProductController::class,'edit_product'])->name('edit_product');
    Route::get('delete-product/{id}',[ProductController::class,'delete_product'])->name('delete_product');
    Route::post('edit-product/{id}',[ProductController::class,'post_edit_product'])->name('post_edit_product');
});

Route::get('danh-muc-san-pham/{id}',[CategoryController::class,'show_category_home'])->name('show_category_home');
Route::get('thuong-hieu-san-pham/{id}',[BrandController::class,'show_brand_home'])->name('show_brand_home');

Route::get();

