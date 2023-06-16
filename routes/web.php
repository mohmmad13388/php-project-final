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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/food', [App\Http\Controllers\FoodController::class, 'GetIndex']);
Route::get('/drink', [App\Http\Controllers\DrinksController::class, 'GetIndex']);
Route::post('/food/store', [App\Http\Controllers\FoodController::class, 'storefood'])->name('food.store');
Route::post('/drink/store', [App\Http\Controllers\DrinksController::class, 'storedrink'])->name('drink.store');
