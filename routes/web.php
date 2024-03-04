<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewController;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});
Route::get('/loginview',[viewController::class,'index']);
Route::post('/login_data',[viewController::class,'login']);
Route::post('/signUp',[viewController::class,'signUp']);
Route::get('/homepage',[viewController::class,'homepage']);
Route::get('/admin',[AdminController::class,'admin']);
Route::get('admin/user',[AdminController::class,'showuser']);
Route::get('admin/feedback',[AdminController::class,'showfeedback']);
Route::get('admin/category',[AdminController::class,'showcategory']);
Route::get('admin/product',[AdminController::class,'showproduct']);
