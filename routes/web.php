<?php

use App\Http\Controllers\BasicController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/about',[BasicController::class,'about'])->name('About');
Route::get('/home',[BasicController::class,'home'])->name('Home');
Route::get('/contact',[BasicController::class,'contact'])->name('Contact');
Route::get('/Service',[BasicController::class,'service'])->name('Service');
Route::get('/price',[BasicController::class,'price'])->name('Price');
Route::get('registration',[BasicController::class,'register'])->name('Register');
Route::Post('/registration',[BasicController::class,'store']);
Route::Post('/contact',[BasicController::class,'contactstore']);
Route::get('/login',[BasicController::class,'login']);
Route::post('/login',[BasicController::class,'login1']);
Route::get('/registrationform',[BasicController::class,'registredform'])->name('RegistredUser');
Route::get('/contactfrom',[BasicController::class,'contfrom'])->name('ContatedUser');
