<?php

use App\Http\Controllers\RidesController;
use App\Http\Controllers\AuthController;
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


// Public Routes
// Route::resource("rides", RidesController::class);
Route::post("/register", [AuthController::class, 'register']);
Route::post("/login", [AuthController::class, 'login']);
Route::get("/rides", [RidesController::class, 'index']);
Route::get("/rides/{id}", [RidesController::class, 'show']);
Route::get("/rides/search/{name}", [RidesController::class, 'search']);




// Route::middleware('auth:sanctum')->get('/user', function () {
// Route::get("/rides/search/{name}", [RidesController::class, 'search']);
// });

// protected routes

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post("/rides", [RidesController::class, 'store']);
    Route::put("/rides/{id}", [RidesController::class, 'upadte']);
    Route::delete("/rides/{id}", [RidesController::class, 'destroy']);
    Route::post("/logout", [AuthController::class, 'logout']);
    });
