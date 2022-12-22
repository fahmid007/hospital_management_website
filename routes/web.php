<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/home',[HomeController::class,'index']);
Route::get('/',[HomeController::class,'redirect']);
Route::get('/add_doctor',[AdminController::class,'addView']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
