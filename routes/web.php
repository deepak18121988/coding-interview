<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;

Route::get('/', [DemoController::class, 'admins'])->name('admins');
Route::get('/customers',[DemoController::class,'customers'])->name('customers');
Route::get('/employees',[DemoController::class,'employees'])->name('employees');
Route::get('/message-categories',[DemoController::class,'message_categories'])->name('message_categories');

Route::get('/my-message',[DemoController::class,'my_messages'])->name('my_messages');
Route::get('/messages',[DemoController::class,'messages'])->name('messages');
