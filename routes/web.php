<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Todo List Route
Route::get('/', [TodolistController::class,'index']);
Route::post('InsertTodolistDetails', [TodolistController::class,'Create']);
Route::post('EditTodolistDetails', [TodolistController::class,'Show']);
Route::post('UpdateTodolist', [TodolistController::class,'Update']);
Route::post('DeleteTodolist', [TodolistController::class,'Delete']);
Route::post('updatestatus', [TodolistController::class,'Updatestatus']);
Route::post('Showsingletodolist', [TodolistController::class,'showsingle']);



