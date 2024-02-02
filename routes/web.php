<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

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


Route::get('/pizzas', [PizzaController::class, 'index']); //view pizza list
Route::get('/pizzas/{id}', [PizzaController::class, 'show']); //show pizza
Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizza.store'); //store pizza


