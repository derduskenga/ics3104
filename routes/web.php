<?php

use App\Http\Controllers\CarController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::post('/cars', [CarController::class, 'newCar']);
Route::get('/cars', [CarController::class, 'allCars']);
Route::get('/cars/{id}', [CarController::class,'particularCar']);
Route::get('/carform', [CarController::class,'carForm']);


