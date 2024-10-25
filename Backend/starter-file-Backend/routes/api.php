<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//    Event Routes
Route::get('/events', [\App\Http\Controllers\EventController::class,'index']); // fetch events
Route::post('/events', [EventController::class,'create']); // create event
Route::put('/events/{id}', [EventController::class,'update']); // update event
Route::delete('/events/{id}', [EventController::class,'delete']); // delete event

// test route
Route::get('/test-db-connection', [EventController::class, 'testDbConnection']);

//    User routes
Route::get('/users', [\App\Http\Controllers\UserController::class,'users']); // fetch users
Route::get('/users/{id}/friends', [UserController::class,'friends']); // fetch friends
Route::post('/users/{id}/friends', [UserController::class,'addFriend']); // add friend



//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
