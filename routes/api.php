<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanController;
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
Route::prefix("v1/perusahaan")
->group(function() {
    Route::get("cek-user/{user_id}", [PerusahaanController::class,"cekUser"]);
    Route::get("cek-profil", [PerusahaanController::class,"cekProfil"]);
    Route::post("registerasi-perusahaan", [PerusahaanController::class,"registerasiPerusahaan"]);
    Route::get("/cek-perusahaan-superadmin", [PerusahaanController::class, "cekPerusahaanDariUserId"]);
});