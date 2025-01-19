<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetStoreController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/pet', [PetStoreController::class, 'getPetsByStatus']);
Route::get('/pet/{petId}', [PetStoreController::class, 'getPetsById']);

Route::prefix('pet')->group(function(){
Route::post('/', [PetStoreController::class, 'addPet'])->name('pet.add');
Route::put('/', [PetStoreController::class,'updatePet'])->name('pet.update');
Route::delete('/{petId}', [PetStoreController::class, 'deletePet'])->name('pet.delete');
});

