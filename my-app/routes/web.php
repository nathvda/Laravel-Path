<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ChapterController;

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

Route::get('/restaurant', [RestaurantController::class, 'index']);

Route::get('/restaurant/create', [RestaurantController::class, 'create']);

Route::post('/restaurant/create', [RestaurantController::class, 'store']);

Route::get('/restaurant/show/{restaurant:id}', [RestaurantController::class, 'show']);

Route::get('/chapters', [ChapterController::class, 'index']);

Route::get('/chapters/create', [ChapterController::class, 'create']);

Route::get('/chapters/show/{chapter:id}', [ChapterController::class, 'show']);

Route::delete('/restaurant/delete/{restaurant:id}', function ($id){

});
