<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetStoreController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/pet', [PetStoreController::class, 'getPets']);
Route::get('/pet/{petId}', [PetStoreController::class, 'getPetsById']);


Route::post('/pet', [PetStoreController::class, 'addPet'])->name('pet.add');
Route::put('/pet', [PetStoreController::class,'updatePet'])->name('pet.update');
Route::delete('/pet/{petId}', [PetStoreController::class, 'deletePet'])->name('pet.delete');