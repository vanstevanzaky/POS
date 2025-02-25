<?php

use App\Http\Controllers\BabyKidController;
use App\Http\Controllers\BeautyHealthController;
use App\Http\Controllers\FoodBeverageController;
use App\Http\Controllers\HomeCareController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;
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

Route::get('/',[HomeController::class, 'index']);

Route::prefix('category')->group(function (){
    Route::get('/food-beverage', [FoodBeverageController::class, 'produk']);
    Route::get('/beauty-health', [BeautyHealthController::class, 'produk']);
    Route::get('/home-care', [HomeCareController::class, 'produk']);
    Route::get('/baby-kid', [BabyKidController::class, 'produk']);
});

Route::get('/user/{id}/name/{name}/', [UserController::class, 'pengguna']);

Route::get('/penjualan', [PenjualanController::class, 'penjualan']);