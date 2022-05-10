<?php

use Illuminate\Support\Facades\Route;

Route::post('auth', function(){
   return response()->json([]);
})->name('auth');
