<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\productcontroller;

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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect ('login');
});
// Route::view('/','login');

Route::view('/register','register');
Route::post('login',[usercontroller::class,'login']);
Route::post('/register',[usercontroller::class,'register']);

Route::view('login','login');
Route::get('/',[productcontroller::class,'index']);
Route::get('detail/{id}',[productcontroller::class,'detail']);
Route::post('add_to_cart',[productcontroller::class,'addtocart']);
Route::get('cartlist',[productcontroller::class,'cartlist']);
Route::get('removecart/{id}',[productcontroller::class,'removeCart']);
Route::get('ordernow',[productcontroller::class,'orderNow']);
Route::post('order',[productcontroller::class,'order']);
Route::get('myorders',[productcontroller::class,'myOrders']);
