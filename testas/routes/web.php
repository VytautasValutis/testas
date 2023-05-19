<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController as ORD;
use App\Http\Controllers\CountryController as CNT;
use App\Http\Controllers\HotelController as HTL;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('order')->name('order-')->group(function() {
    Route::get('/', [ORD::class, 'index'])->name('index');
    Route::get('/edit/{order}', [ORD::class, 'edit'])->name('edit');
    Route::delete('/delete/{order}', [ORD::class, 'destroy'])->name('delete');
});

Route::prefix('country')->name('country-')->group(function() {
    Route::get('/', [CNT::class, 'index'])->name('index');
    Route::post('/create', [CNT::class, 'create'])->name('create');
    Route::post('/edit/{country}', [CNT::class, 'edit'])->name('edit');
    Route::delete('/delete/{country}', [CNT::class, 'destroy'])->name('delete');
});

Route::prefix('hotel')->name('hotel-')->group(function() {
    Route::get('/', [HTL::class, 'index'])->name('index');
    Route::post('/create', [HTL::class, 'create'])->name('create');
    Route::post('/edit/{country}', [HTL::class, 'edit'])->name('edit');
    Route::delete('/delete/{country}', [HTL::class, 'destroy'])->name('delete');
});
