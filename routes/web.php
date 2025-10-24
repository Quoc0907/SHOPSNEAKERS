<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

// homepage
Route::get("/", [HomeController::class, "index"])->name("home.index");

Route::get("product", [ProductController::class, "index"])->name("product.index");
Route::get("product/detail/{product}", [ProductController::class, "detail"])->name("product.detail");

// admin page
Route::get("admin/login", [AdminHomeController::class, "login"])->name("admin.login");
Route::post("admin/login", [AdminHomeController::class, "login"]);
Route::group(["prefix" => "admin", "middleware" => "admin"], function (){
    Route::get("/", [AdminHomeController::class, "index"])->name("admin.home.index");
    Route::get("product", [AdminProductController::class, "index"])->name("admin.product.index");
    Route::get("product/edit/{product?}", [AdminProductController::class, "edit"])->name("admin.product.edit");
    Route::post("product/edit", [AdminProductController::class, "edit"]);
    Route::get("product/delete/{product}", [AdminProductController::class, "delete"]);
    Route::get("category", [AdminCategoryController::class, "index"])->name("admin.category.index");
    Route::get("category/edit/{category?}", [AdminCategoryController::class, "edit"])->name("admin.category.edit");
    Route::post("category/edit", [AdminCategoryController::class, "edit"]);
    Route::get("category/delete/{category}", [AdminCategoryController::class, "delete"]);
});

// đánh giá sao
Route::post('/review/{productId}', [ReviewController::class, 'store'])->middleware('auth');


// Đăng nhập - đăng ký - đăng xuất
Route::get('/login', [CustomerController::class, 'showLoginForm'])->name('login');
Route::post('/login', [CustomerController::class, 'login']);
Route::get('/register', [CustomerController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [CustomerController::class, 'register']);
Route::post('/logout', [CustomerController::class, 'logout'])->name('logout');

// Checkout (chỉ khi đã đăng nhập)
Route::middleware('auth')->group(function () {
    Route::get('/checkout', function () {
        return view('checkout'); // hoặc CheckoutController@index
    })->name('checkout');
});
