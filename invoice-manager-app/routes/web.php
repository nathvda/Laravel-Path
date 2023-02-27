<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\ClientsController;

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
    return view('index');
});

Route::get('/invoices', [InvoicesController::class, 'index']);

Route::get('/invoices/create', [InvoicesController::class, 'create']);

Route::post('/invoices/create', [InvoicesController::class, 'store']);

Route::get('/invoices/edit/{invoice:id}', [InvoicesController::class, 'edit']);

Route::post('/invoices/edit/{invoice:id}', [InvoicesController::class, 'update']);

Route::delete('/invoices/delete/{invoice:id}', [InvoicesController::class, 'destroy']);

Route::get('/clients', [ClientsController::class, 'index']);

Route::get('/clients/create', [ClientsController::class, 'create']);

Route::post('/clients/create', [ClientsController::class, 'store']);

Route::get('/clients/edit/{invoice:id}', [ClientsController::class, 'edit']);

Route::post('/clients/edit/{invoice:id}', [ClientsController::class, 'update']);

Route::delete('/clients/delete/{invoice:id}', [ClientsController::class, 'destroy']);

