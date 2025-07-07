<?php

use App\Http\Controllers\AnimalProductionController;
use App\Http\Controllers\AvocadoCropController;
use App\Http\Controllers\CattleController;
use App\Http\Controllers\CoffeCropController;
use App\Http\Controllers\CropController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\HenController;
use App\Http\Controllers\OrmController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\UserAppController;
use Illuminate\Support\Facades\Route;

// Route::get('ormconsultas',[OrmController::class,'consultas']);
Route::get('animalproduction', [AnimalProductionController::class, 'index'])->name('animalproduction.index');
Route::get('animalproduction/create', [AnimalProductionController::class, 'create'])->name('animalproduction.create');
Route::post('animalproduction', [AnimalProductionController::class, 'store'])->name('animalproduction.store');
Route::get('animalproduction/{animalproduction}', [AnimalProductionController::class, 'show'])->name('animalproduction.show');
Route::get('animalproduction/{animalproduction}/edit', [AnimalProductionController::class, 'edit'])->name('animalproduction.edit');
Route::put('animalproduction/{animalproduction}', [AnimalProductionController::class, 'update'])->name('animalproduction.update');
Route::delete('animalproduction/{animalproduction}', [AnimalProductionController::class, 'destroy'])->name('animalproduction.destroy');

Route::get('finance', [FinanceController::class, 'index'])->name('finance.index');
Route::get('finance/create', [FinanceController::class, 'create'])->name('finance.create');
Route::post('finance', [FinanceController::class, 'store'])->name('finance.store');
Route::get('finance/{finance}', [FinanceController::class, 'show'])->name('finance.show');
Route::get('finance/{finance}/edit', [FinanceController::class, 'edit'])->name('finance.edit');
Route::put('finance/{animalproduction}', [FinanceController::class, 'update'])->name('finance.update');
Route::delete('finance/{finance}', [FinanceController::class, 'destroy'])->name('finance.destroy');

Route::get('avocado', [AvocadoCropController::class, 'index'])->name('avocado.index');
Route::get('avocado/create', [AvocadoCropController::class, 'create'])->name('avocado.create');
Route::post('avocado', [AvocadoCropController::class, 'store'])->name('avocado.store');
Route::get('avocado/{avocado}', [AvocadoCropController::class, 'show'])->name('avocado.show');
Route::get('avocado/{avocado}/edit', [AvocadoCropController::class, 'edit'])->name('avocado.edit');
Route::put('avocado/{avocado}', [AvocadoCropController::class, 'update'])->name('avocado.update');
Route::delete('avocado/{avocado}', [AvocadoCropController::class, 'destroy'])->name('avocado.destroy');

Route::get('coffe', [CoffeCropController::class, 'index'])->name('coffe.index');
Route::get('coffe/create', [CoffeCropController::class, 'create'])->name('coffe.create');
Route::post('coffe', [CoffeCropController::class, 'store'])->name('coffe.store');
Route::get('coffe/{coffe}', [CoffeCropController::class, 'show'])->name('coffe.show');
Route::get('coffe/{coffe}/edit', [CoffeCropController::class, 'edit'])->name('coffe.edit');
Route::put('coffe/{coffe}', [CoffeCropController::class, 'update'])->name('coffe.update');
Route::delete('coffe/{coffe}', [CoffeCropController::class, 'destroy'])->name('coffe.destroy');

Route::get('recommendation', [RecommendationController::class, 'index'])->name('recommendation.index');
Route::get('recommendation/create', [RecommendationController::class, 'create'])->name('recommendation.create');
Route::post('recommendation', [RecommendationController::class, 'store'])->name('recommendation.store');
Route::get('recommendation/{recommendation}', [RecommendationController::class, 'show'])->name('recommendation.show');
Route::get('recommendation/{recommendation}/edit', [RecommendationController::class, 'edit'])->name('recommendation.edit');
Route::put('recommendation/{recommendation}', [RecommendationController::class, 'update'])->name('recommendation.update');
Route::delete('recommendation/{recommendation}', [RecommendationController::class, 'destroy'])->name('recommendation.destroy');

Route::get('user', [UserAppController::class, 'index'])->name('user.index');
Route::get('user/create', [UserAppController::class, 'create'])->name('user.create');
Route::post('user', [UserAppController::class, 'store'])->name('user.store');
Route::get('user/{user}', [UserAppController::class, 'show'])->name('user.show');
Route::get('user/{user}/edit', [UserAppController::class, 'edit'])->name('user.edit');
Route::put('user/{user}', [UserAppController::class, 'update'])->name('user.update');
Route::delete('user/{user}', [UserAppController::class, 'destroy'])->name('user.destroy');

Route::get('cattle', [CattleController::class, 'index'])->name('cattle.index');
Route::get('cattle/create', [CattleController::class, 'create'])->name('cattle.create');
Route::post('cattle', [CattleController::class, 'store'])->name('cattle.store');
Route::get('cattle/{cattle}', [CattleController::class, 'show'])->name('cattle.show');
Route::get('cattle/{cattle}/edit', [CattleController::class, 'edit'])->name('cattle.edit');
Route::put('cattle/{cattle}', [CattleController::class, 'update'])->name('cattle.update');
Route::delete('cattle/{cattle}', [CattleController::class, 'destroy'])->name('cattle.destroy');

Route::get('crop', [CropController::class, 'index'])->name('crop.index');
Route::get('crop/create', [CropController::class, 'create'])->name('crop.create');
Route::post('crop', [CropController::class, 'store'])->name('crop.store');
Route::get('crop/{crop}', [CropController::class, 'show'])->name('crop.show');
Route::get('crop/{crop}/edit', [CropController::class, 'edit'])->name('crop.edit');
Route::put('crop/{crop}', [CropController::class, 'update'])->name('crop.update');
Route::delete('crop/{crop}', [CropController::class, 'destroy'])->name('crop.destroy');

Route::get('hen', [HenController::class, 'index'])->name('hen.index');
Route::get('hen/create', [HenController::class, 'create'])->name('hen.create');
Route::post('hen', [HenController::class, 'store'])->name('hen.store');
Route::get('hen/{hen}', [HenController::class, 'show'])->name('hen.show');
Route::get('hen/{hen}/edit', [HenController::class, 'edit'])->name('hen.edit');
Route::put('hen/{hen}', [HenController::class, 'update'])->name('hen.update');
Route::delete('hen/{hen}', [HenController::class, 'destroy'])->name('hen.destroy');