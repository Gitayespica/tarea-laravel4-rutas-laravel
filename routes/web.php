<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('reports', ReportController::class); Route::get('reports/export', [ReportController::class, 'export']);
