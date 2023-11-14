<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//! public routes

Route::post('/login',[AuthController::class ,'login']);




//! protected routes
Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::get('/all-patient',[PatientController::class ,'all_patient']);
    Route::post('/logout',[AuthController::class ,'logout']);
    Route::post('/add-patient',[AuthController::class ,'add_patient']);
Route::post('/add-doctor',[AuthController::class ,'add_doctor']);
});







Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
