<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});

route::get ('dashboard',[DashboardController::class,'index']);
 