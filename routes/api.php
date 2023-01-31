<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers\Person', 'prefix' => 'people'], function (){
    Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::get('/{person}', 'ShowController');
    Route::patch('/{person}', 'UpdateController');
    Route::delete('/{person}', 'DeleteController');
});

