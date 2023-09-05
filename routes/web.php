<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\PendingListController;
use App\Http\Controllers\Admin\AlluserListController;
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







Route::get('/',[FrontController::class,'home'])->name('front-Home');

Route::get('/login',[FrontController::class,'login'])->name('login');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');

Route::get('/pendingList',[PendingListController::class,'pending'])->name('pending');
Route::get('/approve-user/{id}',[PendingListController::class,'approveUser'])->name('approve-user');
Route::get('destroy-list/{id}',[PendingListController::class,'destroy'])->name('destroy');

Route::resource('all-users',AlluserListController::class);







});
