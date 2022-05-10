<?php

use Illuminate\Support\Facades\Route;

Route::post('auth', function(){
   return response()->json([]);
})->middleware('auth:api')->name('auth');
