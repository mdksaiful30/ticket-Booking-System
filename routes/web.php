<?php

use App\Http\Controllers\TripController;
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
    return view('master');
});

Route::get('/trip', [TripController::class, 'addTrip'])->name('add.trip');
Route::post('/trip', [TripController::class, 'storeTrip'])->name('store.trip');
Route::get('/book', [TripController::class, 'bookTrip'])->name('book.trip');
Route::post('/book', [TripController::class, 'searchTrip'])->name('search.trip');
Route::post('/ticket', [TripController::class, 'storeTicket'])->name('store.ticket');
