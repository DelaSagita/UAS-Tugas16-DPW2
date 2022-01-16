<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\API\ProdukResource;
use App\Http\Controllers\API\AlamatResource;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
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

Route::get('/', function () {
    return view('client.index');
});

Route::get('/about', function () {
    return view('client.about');
});

Route::get('/contact', function () {
    return view('client.contact');
});
Route::get('/blog', function () {
    return view('client.blog');
});
Route::get('/register', function() {
	return view('client.register');
});
Route::get('/checkout', function() {
	return view('client.checkout');
});
Route::get('/cart', function() {
	return view('client.cart');
});



Route::get('shoes', [ClientController::class, 'showshop'] );
Route::get('shop', [ClientController::class, 'showproducts'] );
Route::post('shoes/filter',[ClientController::class, 'filter']);
Route::post('shoes/filter2', [ClientController::class, 'filter2']);
Route::get('shop/{produk}', [ClientController::class, 'showproducts']);




Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::post('produk/filter',[ProdukController::class, 'filter']);
    
    Route::get('/kategori', function () {
        return view('client.kategori');
    });
    Route::resource('produk', ProdukController::class );
    Route::resource('product', ProductController::class);
    Route::resource('user', UserController::class );
    Route::get('dashboard', [HomeController::class, 'showBeranda']);
    Route::get('dashboard/{status}', [HomeController::class, 'showBeranda']);
    
});

Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);

Route::get('login', [AuthController::class, 'showlogin'])->name('login');
Route::post('login', [AuthController::class, 'LoginProcess']);
Route::get('logout', [AuthController::class, 'Logout']);
Route::get('test-collection', [HomeController::class, 'testCollection']);
Route::get('test-ajax', [HomeController::class, 'testAjax']);
