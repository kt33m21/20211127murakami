<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;

Route::get('/',[TestController::class,'register']);
Route::post('/verification', [TestController::class, 'post']);
Route::get('/completion',[TestController::class,'completion']);
Route::post('/completion',[TestController::class,'create']);
Route::get('/management',[TestController::class,'management']);
Route::post('/management',[TestController::class,'remove']);



