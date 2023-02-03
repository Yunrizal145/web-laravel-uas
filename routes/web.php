<?php

use App\Http\Controllers\CardsController;
use App\Http\Controllers\CryptoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

// User
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');



require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Admin 
Route::get('/admin/home', function () {
    return view('admin.home');
})->middleware(['auth:admin', 'verified'])->name('admin.home');

Route::get('home/posts', [PostController::class,'index'])->name('posts.index');

Route::controller(CardsController::class)->group(function(){
    Route::get('/admin/home/cards', 'index');
    Route::put('/admin/home/cards/{id}', 'update');
});

// Route::controller(CryptoController::class)->group(function(){
//     Route::get('/admin/home/crypto', 'index');
//     Route::get('/admin/home/crypto-create', 'create');
//     Route::post('/admin/home/crypto-create', 'store');
//     Route::get('/admin/home/crypto-edit/{product_id}', 'edit');
//     Route::put('/admin/home/crypto-update/{product_id}', 'update');
//     Route::delete('/admin/home/crypto-delete/{product_id}', 'destroy');
// })->middleware(['auth:admin', 'verified']);


require __DIR__.'/adminauth.php';
