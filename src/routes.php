<?php

use Illuminate\Support\Facades\Route;
use LP\Calculator\CalculatorController;


Route::get('calculator', function () {
    return "Hello from calculator";
});


Route::get('add/{a}/{b}', [CalculatorController::class, 'add']);

Route::get('subtract/{a}/{b}', [CalculatorController::class, 'subtract']);