<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\ProdukController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\CartController;

use App\Http\Controllers\ProdukController as Produkctrl;
use App\Http\Controllers\ShippingController;

Route::get('/', [App\Http\Controllers\HomeController::class , 'index'])->name('home');
Route::get('/produk/{url}', [ Produkctrl::class , 'detail' ])->name('produk.detail');

//cart
Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::post('cart/add', [CartController::class, 'addToCart'])->name('add.cart');
Route::patch('cart/update', [CartController::class, 'update'])->name('update.cart');
Route::delete('cart/remove', [CartController::class, 'remove'])->name('remove.cart');

Route::get('shiping/get/{id}' , [ShippingController::class , 'json'])->name('shiping.get');


//chackout
Route::get('checkout' , [CartController::class , 'checkout'])->name('checkout');

Route::get('test' , function(){
    echo "test";
    //session(['shipping_id' => 1]);
    echo  session()->get('shipping_id');

});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::group(['middleware' => ['auth'] , 'prefix' => 'admin' ], function(){

    Route::get('/', [ DashboardController::class, 'index'])->name('dahsbord');
    

    //produk 
    Route::prefix('produk')->group(function () {

        Route::get('/' , [ ProdukController::class , 'index' ])->name('admin.produk');
        Route::get('/add' , [ ProdukController::class , 'create' ])->name('admin.produk.add');
        Route::post('/add/post' , [ ProdukController::class , 'store' ])->name('admin.produk.add.post');
        Route::get('/edit/{id}' , [ ProdukController::class , 'edit' ])->name('admin.produk.edit');
        Route::post('/add/update' , [ ProdukController::class , 'update' ])->name('admin.produk.edit.post');
        Route::post('/add/upload' , [ ProdukController::class , 'upload' ])->name('admin.produk.upload');
        Route::post('/search' , [ ProdukController::class , 'search' ])->name('admin.produk.search');
        Route::get('/delete/{id}' , [ ProdukController::class , 'destroy' ])->name('admin.produk.delete');

        Route::get('/kategori' , [ KategoriController::class , 'index' ])->name('admin.produk.kategori');
        Route::get('/kategori/edit/{id}' , [ KategoriController::class , 'edit' ])->name('admin.produk.kategori.edit');
        Route::post('/kategori/add/post' , [ KategoriController::class , 'store' ])->name('admin.produk.kategori.add.post');
        Route::post('/kategori/update' , [ KategoriController::class , 'update' ])->name('admin.produk.kategori.edit.post');
        Route::get('/kategori/delete/{id}' , [ KategoriController::class , 'destroy' ])->name('admin.produk.kategori.delete');

        Route::get('/brand' , [ BrandController::class , 'index' ])->name('admin.produk.brand');
        Route::get('/brand/edit/{id}' , [ BrandController::class , 'edit' ])->name('admin.produk.brand.edit');
        Route::post('/brand/add/post' , [ BrandController::class , 'store' ])->name('admin.produk.brand.add.post');
        Route::post('/brand/add/edit' , [ BrandController::class , 'update' ])->name('admin.produk.brand.edit.post');
        Route::get('/brand/delete/{id}' , [ BrandController::class , 'destroy' ])->name('admin.produk.brand.delete');
        

    });

});