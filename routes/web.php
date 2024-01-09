<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/branches', function () {
    $branches = \App\Models\Branch::with('city.state')->get();
    return view('branches', compact('branches'));
})->name('branches');

Route::get('/branches/{branch}', function (\App\Models\Branch $branch) {
    return view('branch', compact('branch'));
})->name('branch');
