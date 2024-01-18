<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Ui\AuthCommand;
use Nette\Utils\ImageColor;

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
    return redirect(url('/home'));
});
// Route::get('/not-found',function(){
//     return abort(404);
// })->name('error404');

Auth::routes();

//Accessible by unauthenticated users
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/login-process', [AuthController::class, 'loginProceed'])->name('login.proceed');
Route::get('/aboutus',[HomeController::class, 'about_us'])->name('about_us');
Route::get('/contactus',[HomeController::class, 'contact_us'])->name('contact_us');
Route::get('/product',[HomeController::class, 'product'])->name('product');

// Admin Side
Route::group(['prefix' => '/admin'], function () {
    Route::get('/',function () { return redirect(url('/admin/dashboard')); });
    Route::get('/login',[AuthController::class,'loginShow'])->name('admin.login');
    Route::post('/login-proceed',[AuthController::class, 'loginProceed'])->name('admin-login');
    Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('product', ProductController::class);
    Route::resource('images', ImageController::class);
});

//Authorized Users
Route::group(['middleware' => ['auth']], function () {
    Route::get('/add-cart/{id}',[HomeController::class,'cart'])->name('add-cart');
    // Route::get('/cart-list',[HomeController::class,'cartlist'])->name('cart-list');
    Route::resource('cart',CartController::class);
    Route::resource('order', OrderController::class);
    Route::resource('orderdetail', OrderDetailController::class);
    // Route::get('disable-cart',[OrderController::class,'disablecart'])->name('disable_cart');
    Route::get('/history',[OrderController::class,'history'])->name('history');
    Route::controller(StripePaymentController::class)->group(function(){
        Route::get('stripe', 'stripe')->name('stripe');
        Route::post('stripe', 'stripePost')->name('stripe.post');
    });
});



