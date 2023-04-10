<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\TagController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function () {
    Route::post('register', RegisterController::class);
    Route::get('email/verify/{id}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('login', LoginController::class)->name('auth.login');
    Route::get('logout', LogoutController::class);

    Route::group(['middleware' => 'api'], function () {
        Route::get('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
    });
});


Route::group(['middleware' => 'auth:api'], function () {
    Route::get('user-profile', [UserProfileController::class, 'showProfile']);
});

Route::apiResource('tags', TagController::class);
Route::apiResource('articles', ArticleController::class);
