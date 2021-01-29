<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register',[App\Http\Controllers\UsersController::class, register]);
Route::post('/User', [App\Http\Controllers\UsersController::class, create]);
Route::get('/getUsers', [App\Http\Controllers\UsersController::class, index]);
Route::get('/getUser/{id}', [App\Http\Controllers\UsersController::class, show]);
Route::put('/editUser/{id}', [App\Http\Controllers\UsersController::class, update]);
Route::delete('/deleteUser/{id}', [App\Http\Controllers\UsersController::class, destroy]);

Route::get('/getPlayers', [App\Http\Controllers\PlayerController::class, index]);
Route::get('/getPlayer/{id}', [App\Http\Controllers\PlayerController::class, show]);
Route::put('/editPlayer/{id}', [App\Http\Controllers\PlayerController::class, update]);
Route::delete('/deletePlayer/{id}', [App\Http\Controllers\PlayerController::class, destroy]);

Route::get('/getTeams', [App\Http\Controllers\TeamController::class, index]);
Route::get('/getTeam/{id}', [App\Http\Controllers\TeamController::class, show]);
Route::put('/editTeam/{id}', [App\Http\Controllers\TeamController::class, update]);
Route::delete('/deleteTeam/{id}', [App\Http\Controllers\TeamController::class, destroy]);

Route::get('/getSchedules', [App\Http\Controllers\ScheduleController::class, index]);
Route::get('/getSchedule/{id}', [App\Http\Controllers\ScheduleController::class, show]);
Route::put('/editSchedule/{id}', [App\Http\Controllers\ScheduleController::class, update]);
Route::delete('/deleteSchedule/{id}', [App\Http\Controllers\ScheduleController::class, destroy]);

Route::post('/PlayerRegistration', [App\Http\Controllers\PlayerController, create]);
// Route::get('/api/user', function(Request $request) {
//     $user = $request->user();
//     return $user->toArray();
// });
Route::post('/createTeam', [App\Http\Controllers\TeamController::class, create]);
Route::post('/createSchedule', [App\Http\Controllers\ScheduleController::class, create]);