<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('inventories', InventoryController::class); Route::get('inventories/search', [InventoryController::class, 'search']);