<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
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

Route::get("/", [FrontController::class, "welcome"]);
Route::get("/players", [FrontController::class,"players"]);
Route::get("/teams", [FrontController::class,"teams"]);

Route::resource('admin/players', PlayerController::class);
Route::resource('admin/teams', TeamController::class);

