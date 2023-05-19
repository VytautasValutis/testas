<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController as ORD;


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
    // Route::post('/create', [HI::class, 'store'])->name('store');    
    // Route::put('/edit/{client}', [HI::class, 'update'])->name('update');
});
