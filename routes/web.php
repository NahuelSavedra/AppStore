<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('app', [AppController::class, 'index'])->name('app.index');

Route::get('app/create', [AppController::class, 'create'])->name('app.create');

Route::post('app',[AppController::class, 'store'])->name('app.store');

Route::get('app/{app}', [AppController::class, 'show'])->name('app.show');

Route::get('app/{app}/edit', [AppController::class, 'edit'])->name('app.edit');

Route::put('app/{app}',[AppController::class, 'update'])->name('app.update');

Route::delete('app/{app}',[AppController::class, 'destroy'])->name('app.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
