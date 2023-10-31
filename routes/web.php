<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomViewController;

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

Route::resource('CustomView', CustomViewController::class)->names('CustomView')->only(['index']);
Route::get('CustomView/create/{CustomViewId?}', [CustomViewController::class, 'create'])->name('CustomView.create');
Route::get('CustomView/show/{id}', [CustomViewController::class, 'show'])->name('CustomView.show');