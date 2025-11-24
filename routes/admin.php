<?php

use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\Usercontroller;
use Illuminate\Support\Facades\Route;

    Route::get('/', PanelController::class)->name('panel');
    Route::resource('users' , Usercontroller::class);
    Route::fallback(function(){
         return view('admin.errors.404');
    });
