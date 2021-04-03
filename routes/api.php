<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//l'ensemble des localités
Route::get('/localites', [App\Http\Controllers\MultilisteController::class, "index"])->name('localites');

//renvoi une localité et ses enfants
Route::get('/localites/{id}', [App\Http\Controllers\MultilisteController::class, "localites_enfants"])->name('localites.localites_enfants');

Route::get('/localites/{id}/edit', [App\Http\Controllers\MultilisteController::class, "edit"])->name('localites.edit');
Route::delete('/localites/{id}', [App\Http\Controllers\MultilisteController::class, "delete"])->name('localites.delete');
Route::put('/localites/{id}', [App\Http\Controllers\MultilisteController::class, "update"])->name('localites.update');

// Route::get('/clients/create', [App\Http\Controllers\ClientsController::class, "create"])->name('clients.create');
// Route::post('/clients', [App\Http\Controllers\ClientsController::class, "store"])->name('clients.store');
