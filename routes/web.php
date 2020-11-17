<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
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

Route::get('/',[BatimentController::class,'index']);
Route::post('/batiment-delete/{id}',[BatimentController::class,'destroy']);
Route::get('/edit-batiment/{id}',[BatimentController::class,'edit']);
Route::post('/batiment-update/{id}',[BatimentController::class,'update']);

Route::get('/formations',[FormationController::class,'index']);
Route::post('/formation-delete/{id}',[FormationController::class,'destroy']);
Route::get('/edit-formation/{id}',[FormationController::class,'edit']);
Route::post('/formation-update/{id}',[FormationController::class,'update']);

Route::get('/eleves',[EleveController::class,'index']);
Route::post('/eleve-delete/{id}',[EleveController::class,'destroy']);
Route::get('/edit-eleve/{id}',[EleveController::class,'edit']);
Route::post('/eleve-update/{id}',[EleveController::class,'update']);