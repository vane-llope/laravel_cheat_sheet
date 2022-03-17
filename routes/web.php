<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    /*enter this URL to see what happens:
     http://127.0.0.1:8000/?name=shaun&age=23*/

     $name = request('name');
    return view('welcome', ['name'=>$name],['age'=>request('age')]);  /*sending the query parameter*/
});


Route::get('/pizzas', [PizzaController::class,'index']);
Route::get('/pizzas/create',[PizzaController::class,'create']);
Route::post('/pizzas',[PizzaController::class,'store'])->name('pizzas');
Route::get('/pizzas/{id}', [PizzaController::class,'show']);
Route::get('/pizzaRecords',[PizzaController::class,'showRecords']);
Route::get('/pizzacreate',[PizzaController::class,'create']);
