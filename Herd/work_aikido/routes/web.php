<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
// Route::get('/jobs', [JobController::class, 'index']);

// Route::get('/jobs/create', function () {
//     return view('jobs.create');
// })->name('jobs.create');

// Route::get('/jobs/{id}', [JobController::class, 'show']);
// Route::post('/jobs', [JobController::class, 'store']);
//Route::get('/about', [JobController::class, 'about']);
Route::get('/about', [HomeController::class, 'about']);
Route::resource('jobs', JobController::class);
