<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\Students\StudentController;//
// use App\Http\Controllers\AuthController;// just added
// use app\Http\Controllers\Auth;

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


// Route::group([
//     'middleware' => 'api',
//     'prefix' => 'auth'
// ], function ($router) {
//     Route::post('/login', [AuthController::class, 'login']);
//     Route::post('/register', [AuthController::class, 'register']);//
//     Route::post('/logout', [AuthController::class, 'logout']);
//     Route::post('/refresh', [AuthController::class, 'refresh']);//
//     Route::get('/user-profile', [AuthController::class, 'userProfile']);
// });
/************/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*********************** */

// Route::middleware(['jwt.verify'])->group(function(){
//     Route::get('/Students',[StudentController::class,'index']);
//     Route::get('Student/{id}',[StudentController::class,'show']);
//     Route::post('/Students',[StudentController::class,'store']);
//     Route::post('Students/{id}',[StudentController::class,'update']);
//     Route::post('Students/{id}',[StudentController::class,'destroy']);
// });