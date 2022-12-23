<?php

use App\Http\Controllers\categoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('category', categoryController::class, ['except' => [
    'create', 'update','show'
]]);