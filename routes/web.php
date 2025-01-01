<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });
    
// Route::get('/contact', function (){
//     return view('contact');
// });
     
// LONGCUT 
Route::get('/', [studentController::class, 'home']);
Route::get('/about', [studentController::class, 'about']);
Route::get('/contact', [studentController::class, 'contact']);
Route::post('/create', [studentController::class, 'create']);

// SHORTCUT 
// Route::controller(studentController::class)->group(function (){
//     Route::get('/', 'home');
//     Route::get('/about', 'about');
//     Route::get('/contact', 'contact');
// });


