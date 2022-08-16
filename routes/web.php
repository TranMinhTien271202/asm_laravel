<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckLogin;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth','admin')->prefix('/admin')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('list');
    Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('delete'); //name:users.delete
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    // Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    // Route::post('/update/{id}', [UserController::class, 'update'])->name('update');
    // Route::post('/status/{users}&{status}', [UserController::class, 'status'])->name('status');
});
Route::middleware('auth','admin')->prefix('/admin')->name('admin.')->group(function () {
    Route::post('/status/{users}&{status}', [UserController::class, 'status'])->name('status');
});
Route::middleware('auth','admin')->prefix('/listOder')->name('users.')->group(function () {
    Route::get('/', [OderController::class, 'listOder'])->name('listOder');
    Route::post('/status1/{order}&{status}', [OderController::class, 'status1'])->name('status1');
});
Route::middleware('auth','admin')->prefix('/category')->name('users.')->group(function () {
    Route::get('/', [CategoryController::class, 'category'])->name('category');
    Route::delete('/delete_cate/{id}', [CategoryController::class, 'delete_cate'])->name('delete_cate'); //name:users.delete
    Route::get('/create_cate', [CategoryController::class, 'create_cate'])->name('create_cate');
    Route::post('/store_cate', [CategoryController::class, 'store_cate'])->name('store_cate');
    Route::get('/edit_cate/{id}', [CategoryController::class, 'edit_cate'])->name('edit_cate');
    Route::post('/update_cate/{id}', [CategoryController::class, 'update_cate'])->name('update_cate');
});
Route::middleware('auth','admin')->prefix('/product')->name('users.')->group(function () {
    Route::get('/', [ProductController::class, 'product'])->name('product');
    Route::delete('/delete_pro/{id}', [ProductController::class, 'delete_pro'])->name('delete_pro'); //name:users.delete
    Route::get('/create_pro', [ProductController::class, 'create_pro'])->name('create_pro');
    Route::post('/store_pro', [ProductController::class, 'store_pro'])->name('store_pro');
    Route::get('/edit_pro/{id}', [ProductController::class, 'edit_pro'])->name('edit_pro');
    Route::post('/update_pro/{id}', [ProductController::class, 'update_pro'])->name('update_pro');
    Route::get('/listcmt', [CommentController::class, 'listcmt'])->name('listcmt');
});
Route::middleware('auth','admin')->prefix('/comment')->name('users.')->group(function () {
    Route::get('/', [CommentController::class, 'listcmt'])->name('listcmt');
});
Route::prefix('/')->name('users.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/shop', [ProductController::class, 'Shop'])->name('shop');
    Route::get('/detail/{id}', [ProductController::class, 'ProductDetail'])->name('shop-detail');
    Route::get('/sort', [ProductController::class, 'sort'])->name('sortproduct');
    Route::get('/contact', [UserController::class, 'Contact'])->name('contact');
    Route::get('/blog', [BlogController::class, 'Blog'])->name('blog');
    Route::get('search_cate/{id}', [CategoryController::class, 'search_cate'])->name('search_cate');
});
Route::middleware([CheckLogin::class])->prefix('/')->name('binhluan.')->group(function () {
    Route::post('/comment/{id}', [CommentController::class, 'post_cmt'])->name('post_cmt');
    Route::get('/delete_cmt/{id}', [CommentController::class, 'delete_cmt'])->name('delete_cmt');
});
Route::middleware([CheckLogin::class])->prefix('/')->name('giohang.')->group(function () {
    Route::get('/cart', [CartController::class, 'Cart'])->name('cart');
    Route::post('/addCart/{id}', [CartController::class, 'addCart'])->name('addCart');
    Route::get('/delete_cart/{id}', [CartController::class, 'delete_cart'])->name('delete_cart');
    Route::get('/order', [OderController::class, 'order'])->name('order');
    Route::post('/oderCart', [OderController::class, 'oderCart'])->name('oderCart');
});
Route::prefix('/')->name('auth.')->group(function () {
    Route::get('/login', [LoginController::class, 'Login'])->name('login');
    Route::post('/login', [LoginController::class, 'post_Login'])->name(('postlogin'));
    Route::get('/register', [LoginController::class, 'Register'])->name('register');
    Route::post('/register', [LoginController::class, 'post_register'])->name('post_register');
    Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');
});
