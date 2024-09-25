<?php

use App\Http\Controllers\AdresseController;
use App\Http\Controllers\AgentController;
use App\Models\Adresse;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/adresses', [AdresseController::class, 'index'])->name('adresse.index');
    Route::get('/adresse_create', [AdresseController::class, 'create'])->name('adresse.create');
    Route::get('/adresses/{id}', [AdresseController::class, 'show'])->name('adresse.show');
    Route::get('/adresses/edit', [AdresseController::class, 'edit'])->name('adresse.edit');
    Route::post('/adresses/store', [AdresseController::class, 'store'])->name('adresse.store');
    Route::post('/adresses/update', [AdresseController::class, 'update'])->name('adresse.update');
    Route::delete('/adresses/delete', [AdresseController::class, 'destroy'])->name('adresse.destroy');

});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/agents', [AgentController::class, 'index'])->name('agent.index');
    Route::get('/agent_create', [AgentController::class, 'create'])->name('agent.create');
    Route::get('/agent/{id}', [AgentController::class, 'show'])->name('agent.show');
    Route::get('/agent/edit', [AgentController::class, 'edit'])->name('agent.edit');
    Route::post('/agent/store', [AgentController::class, 'store'])->name('agent.store');
    Route::post('/agent/update', [AgentController::class, 'update'])->name('agent.update');
    Route::delete('/agent/delete', [AgentController::class, 'destroy'])->name('agent.destroy');

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
