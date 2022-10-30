<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaraveVueAppController;

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

Route::get('/list', function () {
    return view('posts.add');
});

Route::get('/', [LaraveVueAppController::class, 'index'])->name('index');
//Auth::routes();

Route::get('/create_post', [LaraveVueAppController::class, 'create'])->name('create');
Route::get('/store_post/{id}', [LaraveVueAppController::class, 'store'])->name('store');
Route::get('/show_post/{id}', [LaraveVueAppController::class, 'show'])->name('show');

Route::get('/edit_post/{id}', [LaraveVueAppController::class, 'edit'])->name('edit');
Route::get('/update_post/{id}', [LaraveVueAppController::class, 'update'])->name('update');
Route::get('/destroy_post/{id}', [LaraveVueAppController::class, 'destroy'])->name('destroy');





//Route::resource('post', LaraveVueAppController::class);













Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
