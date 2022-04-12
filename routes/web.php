<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RewardsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovementsController;
use App\Http\Controllers\UserController;

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

Route::get('/suppliers',[SupplierController::class, 'index']);
Route::get('/suppliers/create',[SupplierController::class, 'create']);
Route::post('/suppliers/store',[SupplierController::class, 'store']);
Route::patch('/suppliers/update',[SupplierController::class, 'update'])->name('suppliers.update');
Route::get('/suppliers/edit/{id}',[SupplierController::class, 'edit'])->name('suppliers.edit');
Route::get('/suppliers/show/{id}',[SupplierController::class, 'show'])->name('suppliers.show');
Route::delete('/suppliers/destroy',[SupplierController::class, 'destroy'])->name('suppliers.destroy');

Auth::routes();


Route::get('/rewards',[RewardsController::class, 'index']);
Route::get('/rewards/create',[RewardsController::class, 'create']);
Route::post('/rewards/store',[RewardsController::class, 'store']);
Route::patch('/rewards/update',[RewardsController::class, 'update'])->name('rewards.update');
Route::get('/rewards/edit/{id}',[RewardsController::class, 'edit'])->name('rewards.edit');
Route::get('/rewards/show/{id}',[RewardsController::class, 'show'])->name('rewards.show');
Route::post('/rewards/destroy',[RewardsController::class, 'destroy'])->name('rewards.destroy');

Route::get('/profile',[HomeController::class,'profile'])->name('profile');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/movements', [App\Http\Controllers\MovementsController::class, 'index'])->name('movements.index');
Route::get('/movements/create', [App\Http\Controllers\MovementsController::class, 'create'])->name('movements.create');

Route::post('logout', [HomeController::class, 'logout'])->name('logout');


Route::get('search_cellphone',[UserController::class,'searchCellphone'])->name('search');