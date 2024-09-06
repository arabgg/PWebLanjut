<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\POSHomeController;
use App\Http\Controllers\POSPenjualanController;
use App\Http\Controllers\POSProductsController;
use App\Http\Controllers\POSUserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
    return 'World';
});   

//Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

//Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
   
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);

/*Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Zaidan']);
});*/

Route::get('/greeting', [WelcomeController::class, 
'greeting']);
    
// route soal praktikum

// Halaman Home
Route::get('/', [POSHomeController::class,'index']);

// Halaman Produk
Route::get('/category', [POSProductsController::class,'dp']);
Route::get('/category/food-beverage', [POSProductsController::class,'fb']);
Route::get('/category/beauty-health', [POSProductsController::class,'bh']);
Route::get('/category/home-care', [POSProductsController::class,'hc']);
Route::get('/category/baby-kid', [POSProductsController::class,'bk']);

// Halaman User

Route::get('/user/{id}/name/{nama}', [POSUserController::class,'user']);

// Halaman Penjualan

Route::get('/penjualan', [POSPenjualanController::class,'penjualan']);