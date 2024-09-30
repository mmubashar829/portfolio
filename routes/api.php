<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

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
Route::any('/index',[UserController::class, 'index']); 
Route::any('/updateAbout',[UserController::class, 'updateAbout']); 
Route::any('/getSkill',[UserController::class, 'getSkill']); 
Route::any('/addSkill',[UserController::class, 'addSkill']); 
Route::any('/updateSkill',[UserController::class, 'updateSkill']); 
Route::any('/removeSkill/{id}',[UserController::class, 'removeSkill']); 