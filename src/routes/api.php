<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\InformationController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\QuizController;
use App\Http\Controllers\Api\KeywordController;
use App\Http\Controllers\Api\RankingController;
use App\Http\Controllers\Api\MeController;
use App\Http\Controllers\Auth\ApiTokenLoginController;
use App\Http\Controllers\Auth\ApiTokenRegisterController;
// use App\Http\Controllers\Auth\ApiTokenLogoutController;

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
Route::post('/login', ApiTokenLoginController::class);
Route::post('/register', ApiTokenRegisterController::class);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', MeController::class);
});

Route::resource('/information', InformationController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/quizzes', QuizController::class);
Route::resource('/keywords', KeywordController::class);
Route::resource('/rankings', RankingController::class);
