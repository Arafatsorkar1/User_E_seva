<?php

use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserinputController;
use App\Http\Controllers\Transaction\TransctionController;

Route::group(['prefix'=>'user','as'=>'user.','middleware'=>['auth','user']],function (){
    Route::resource('/profile',ProfileController::class);
//    Route::resource('/profile-edit',UserinputController::class);
    Route::resource('/transactions',TransctionController::class);

});

