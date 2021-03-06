<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\DataDokterController;
use App\Http\Controllers\API\DataJadwalController;
use App\Http\Controllers\API\DataPendaftaranController;
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

Route::resource('keluhan2', ApiController::class);
Route::resource('data_pendaftaran', DataPendaftaranController::class);
Route::resource('data_dokter', DataDokterController::class);
Route::resource('data_jadwal', DataJadwalController::class);
