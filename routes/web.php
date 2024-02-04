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


Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth'); //view pizza list
Route::get('/pizzas/create', [PizzaController::class, 'create']); // create pizza
Route::post('/pizzas', [PizzaController::class, 'store']); // store the pizza
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->middleware('auth'); //show pizza
Route::delete('/pizzas/{id}', [PizzaController::class,'destroy'])->middleware('auth'); // delete pizza



// Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizza.store'); //store pizza



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
