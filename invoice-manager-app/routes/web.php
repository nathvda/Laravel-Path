<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoicesController;

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

