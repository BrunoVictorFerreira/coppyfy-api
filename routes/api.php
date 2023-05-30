<?php

use App\Events\TriggerEvent;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\MatchsDayController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

// use Ably;

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

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/search/{name}', [ProductController::class, 'search']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/forgot-password/validate', [ForgotPasswordController::class, 'validateEmail']);
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('/get-user', [UserController::class, 'getUserData']);
Route::get('/broadcast', function() {
    event(new TriggerEvent('hello world'));

    // return view('welcome');
});

// Route::post('/websocket', function(){
//     echo Ably::time(); // 1467884220000
//     // $token = Ably::auth()->requestToken([ 'clientId' => 'client123', ]); // Ably\Models\TokenDetails
//     // Ably::channel('testChannel')->publish('testEvent', 'testPayload', 'testClientId');
// });
Route::post('/login', [AuthController::class, 'login']);
Route::get('/teams', [TeamController::class, 'index']);
Route::post('/teams/register', [TeamController::class, 'register']);
Route::post('/partida/register', [MatchsDayController::class, 'register']);
Route::post('/partida', [MatchsDayController::class, 'index']);


Route::post('/upload-jogadores', [FileUploadController::class, 'upload']);


Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});