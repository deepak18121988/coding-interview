<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;

Route::get('/',[DemoController::class,'admin']);
Route::get('/admin',[DemoController::class,'admin']);