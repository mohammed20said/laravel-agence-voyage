<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[HomeController::class,"index"]);
Route::get('redirects',[HomeController::class,"redirects"]);
Route::get('/users',[AdminController::class,"user"]);
Route::get('/deleteuser/{id}',[AdminController::class,"deleteuser"]);
Route::get('/ourour',[AdminController::class,"ourour"]);
Route::get('/deletemenu/{id}',[AdminController::class,"deletemenu"]);
Route::get('/updateview/{id}',[AdminController::class,"updateview"]);
Route::get('/viewreservation',[AdminController::class,"viewreservation"]);
Route::get('/viewpartenaires',[AdminController::class,"viewpartenaires"]);
Route::get('/updatepartenaires/{id}',[AdminController::class,"updatepartenaires"]);
Route::get('/deletepartenaires/{id}',[AdminController::class,"deletepartenaires"]);
Route::post('/updateFoodpartenaires/{id}',[AdminController::class,"updateFoodpartenaires"]);
Route::post('/update/{id}',[AdminController::class,"update"]);
Route::post('/uploadourour',[AdminController::class,"upload"]);
Route::post('/reservation',[AdminController::class,"reservation"]);
Route::post('/uploadpartenaires',[AdminController::class,"uploadpartenaires"]);
Route::post('/addcart/{id}',[HomeController::class,"addcart"]);
Route::post('/orderconfirm',[HomeController::class,"orderconfirm"]);
Route::get('/showcart/{id}',[HomeController::class,"showcart"]);
Route::get('/remove/{id}',[HomeController::class,"remove"]);
Route::get('/orders',[AdminController::class,"orders"]);
Route::get('/search',[AdminController::class,"search"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
