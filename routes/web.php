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
    $cities = \App\Models\City::count();
    $states = \App\Models\State::count();
    $branches = \App\Models\Branch::count();
    return view('home', compact('cities', 'states', 'branches'));
})->name('home');

Route::get('/branches/state/{state}', function ($short_name) {
    $branches = \App\Models\Branch::with('city.state')->whereHas('city.state', function ($query) use ($short_name) {
        $query->where('short_name', $short_name);
    })->get();
    $state = \App\Models\State::where('short_name', $short_name)->first();
    return view('branches', compact('branches', 'state'));
})->name('branches.state');

Route::get('/branches', function () {
    $branches = \App\Models\Branch::with('city.state')->get();
    return view('branches', compact('branches'));
})->name('branches');

Route::get('/branches/{branch}', function (\App\Models\Branch $branch) {
    return view('branch', compact('branch'));
})->name('branch');

Route::post('contact', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
