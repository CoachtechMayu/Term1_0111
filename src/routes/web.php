<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\TimestampsController;
use App\Http\Controllers\RestController;

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
/* ホームページ */
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'index']);
});

/* 出勤・退勤 */
Route::group(['middleware' => 'auth'], function() {
    Route::post('/time_in', [TimestampsController::class, 'timeOn'])->name('timestamp/time_in');
    Route::post('/time_out', [TimestampsController::class, 'timeOff'])->name('timestamp/time_out');
});

/* 休憩開始・休憩終了 */
Route::post('/break_start', [RestController::class, 'BreakStart'])->name('rest/break_start');
Route::post('/break_end', [RestController::class, 'BreakEnd'])->name('rest/break_end');
